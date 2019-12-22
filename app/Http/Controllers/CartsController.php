<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Sale;
use App\Sale_Item;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Cart;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // Cart::instance('sale')->content();
        // Cart::instance('sales')->content();
        $carts = Cart::content();
        return view ('Cart.index', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;
        $total = 0;
        
        $carts = Cart::content();
        foreach ($carts as $cart){
            $total += $cart->subtotal;
        }

        if ($total != 0) {
            $sale= new Sale;
            $sale->seller_id = $user_id;
            $sale->total_price = $total;
            $sale->date = Carbon::now();
            $sale->save();

            foreach ($carts as $cart) {
                $item = Item::findOrFail($cart->id);
                $item->quantity -= $cart->qty;
                $item->save();

                $sale_item = new Sale_Item;
                $sale_item->sale_id = $sale->id;
                $sale_item->item_id = $cart->id;
                $sale_item->quantity = $cart->qty;
                $sale_item->subtotal = $cart->subtotal;
                $sale_item->save();
            }
        }
        
        Cart::destroy();
        
        if ($total == 0) {
            return redirect()->route('Cart.index')->with('statusFail', 'No item in cart');
        } else {
            return redirect()->route('Cart.index')->with('statusSuccess', 'Successfully Paid');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Item::where('id', '=', $request['barcode'])->first();
        if ($item){
            Cart::add(
            [
                'id' => $item->id,
                'name' =>$item->name,
                'qty' => 1,
                'price' =>$item->selling_price
            ]);
            return redirect()->route('Cart.index')->with('statusSuccess', 'Item Added');
        } else {
            return redirect()->route('Cart.index')->with('statusFail', 'Item Not Found');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rowId)
    {
        $item = Cart::get($rowId);
        Cart::update($rowId, ['qty'=>$item->qty - 1]);
        return redirect()->route('Cart.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($rowId)
    {
        $item = Cart::get($rowId);
        Cart::update($rowId, ['qty'=>0]);
        return redirect()->route('Cart.index');
    }

    public function add($id, $quantity) 
    {
        $item = Cart::get($id);
        Cart::update($id, ['qty'=>$quantity]);
        // return redirect()->route('Cart.index');
        // $item = Cart::find($id);
        // $item->qty = $quantity;
        // $item->save();
        return response('success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::destroy();
        return redirect()->route('Cart.index')->with('statusSuccess', 'Cart Successfully Cleared');
    }
}
