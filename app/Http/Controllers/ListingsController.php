<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\User;
use Auth;

class ListingsController extends Controller
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
        $listings=Listing::all();
        return view('Listing.index')->with('listings',$listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Listing.create');
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
            'list_name'=>'required|string',
            'address'=>'required|string',
            'latitude'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'longitude'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            // 'submitter_id'=>'Auth::user()->id',
        ]);
        
        $listing=new Listing;
        $listing->list_name=$request->input('list_name');    
        $listing->address=$request->input('address');
        $listing->latitude=$request->input('latitude');
        $listing->longitude=$request->input('longitude');
        $listing->submitter_id=Auth::user()->id;
        $listing->save();
        
        return redirect('/Listing')->with('success','List added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listings=Listing::find($id);
        return view('Listing.edit')->with('listings',$listings);
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
            'list_name'=>'required|string',
            'address'=>'required|string',
            'latitude'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'longitude'=>'required|regex:/^\d+(\.\d{1,2})?$/',
        ]);
        
        $listing=Listing::find($id);
        $listing->list_name=$request->input('list_name');    
        $listing->address=$request->input('address');
        $listing->latitude=$request->input('latitude');
        $listing->longitude=$request->input('longitude');
        $listing->save();
        
        return redirect('/Listing')->with('success','Listing updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();
        return redirect('/Listing')->with('success','List Removed');

    }
}
