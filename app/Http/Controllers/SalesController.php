<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Item;
use App\Sale_Item;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales=Sale::all();
        return view('Sale.index')->with('sales',$sales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items=Item::all();
        return view('Sale.create')->with('items',$items);;
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
            'item_id'=>'required|integer',
            //'price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'quantity'=>'required|integer',
        ]);
        
        // $item_id=Item::where('barcode_id',$request->barcode_id)->first()->id;
        $item=Item::FindOrFail($request->item_id);
        // $user=User::FindOrFail($request->seller_id);
        $item->quantity -= ($request->quantity);

        $sale=new Sale;
        $sale->seller_id=$request->get('seller_id');
        $sale->item_id=$item->id;
        $sale->price=$item->selling_price * $request->input('quantity');
        $sale->quantity=$request->input('quantity');
        $sale->save();
        $item->save();

        return redirect('/Sale')->with('success','Sale added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sales=Sale::find($id);
        $sale_items=Sale_Item::where('sale_id', $sales->id)->get();
        // $items=Item::where('id', $sale_items->item_id)->get();
        return view('Sale.show', compact('sale_items','sales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sales=Sale::find($id);
        return view('Sale.edit')->with('sales',$sales);
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
        
        $sale=Sale::find($id);
        $item=Item::FindOrFail($sale->item_id);
        $item->quantity = $item->quantity + $sale->quantity - $request->quantity;
        $sale->quantity=$request->input('quantity');
        $sale->price=$item->selling_price * $request->input('quantity');
        
        $item->save();
        $sale->save();
        
        return redirect('/Sale')->with('success','Sale updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return redirect('/Sale')->with('success','Sale Removed');
    }
}
