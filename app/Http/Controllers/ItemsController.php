<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('Item.index')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Item.create');
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
            //'barcode_id'=>'required|string',
            'id'=>'required|string',
            'name'=>'required|string',
            'buying_price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'selling_price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'quantity'=>'required|integer',
            'category'=>'required|string',
            'minimum_no'=>'required|integer'
        ]);
        
        $item=new Item;
        $item->id=$request->input('id');    
        $item->name=$request->input('name');
        $item->buying_price=$request->input('buying_price');
        $item->selling_price=$request->input('selling_price');
        $item->quantity=$request->input('quantity');
        $item->category=$request->get('category');
        $item->minimum_no=$request->input('minimum_no');
        $item->save();
        
        return redirect('/Item')->with('success','Item added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items=Item::find($id);
        return view('Item.show')->with('items',$items);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items=Item::find($id);
        return view('Item.edit')->with('items',$items);
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
            'buying_price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'selling_price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'quantity'=>'required|integer',
            'category'=>'required|string',
            'minimum_no'=>'required|integer'
        ]);
        
        $item=Item::find($id);
        $item->buying_price=$request->input('buying_price');
        $item->selling_price=$request->input('selling_price');
        $item->quantity=$request->input('quantity');
        $item->category=$request->get('category');
        $item->minimum_no=$request->input('minimum_no');
        $item->save();
        
        return redirect('/Item')->with('success','Item updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/Item')->with('success','Item Removed');

    }
}
