<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;

class OrdersController extends Controller
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
        $orders=Order::all();
        return view('Order.index')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items=Item::all();
        return view('Order.create')->with('items',$items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'item_id'=>'required|string',
            'quantity'=>'required|integer',
        ]);
        
        $item=Item::FindOrFail($request->item_id);

        $order=new Order;
        $order->pic_id=$request->get('pic_id');
        $order->status=$request->get('status');
        $order->item_id=$item->id;
        if ($request->get('status')=='Complete') {
            $item->quantity += $request->input('quantity');
        }
        $order->total_price=$item->buying_price * $request->input('quantity');
        $order->quantity=$request->input('quantity');
        $order->save();
        $item->save();

        return redirect('/Order')->with('success','Order added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders=Order::find($id);
        return view('Order.show', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders=Order::find($id);
        return view('Order.edit', compact('orders'));
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
        $this->validate($request, [
            //'price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'quantity'=>'required|integer',
        ]);
        
        $order=Order::find($id);
        $item=Item::FindOrFail($order->item_id);
        $order->total_price=$item->buying_price * $request->input('quantity');

        if ($order->status=='Complete' && $request->get('status')=='Complete') {
            $item->quantity = $item->quantity - $order->quantity + $request->input('quantity');
        }
        elseif ($order->status=='Incomplete' && $request->get('status')=='Complete') {
            $item->quantity += $request->input('quantity');
        }
        elseif ($order->status=='Complete' && $request->get('status')=='Incomplete') {
            $item->quantity -= $request->input('quantity');
        }
        $order->status=$request->get('status');
        $order->quantity=$request->input('quantity');

        $item->save();
        $order->save();
        
        return redirect('/Order')->with('success','Order updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/Order')->with('success','Order Removed');

    }
}
