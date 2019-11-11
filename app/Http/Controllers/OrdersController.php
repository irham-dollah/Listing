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
            'name'=>'required|string',
            'price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'quantity'=>'required|integer',
        ]);
        
        $order=new Order;
        $order->name=$request->input('name');
        $order->price=$request->input('price');
        $order->quantity=$request->input('quantity');
        $order->save();
        
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
        return view('Order.show')->with('orders',$orders);
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
        return view('Order.edit')->with('orders',$orders);
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
            'price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'quantity'=>'required|integer',
        ]);
        
        $order=Order::find($id);
        $order->price=$request->input('price');
        $order->quantity=$request->input('quantity');
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
