<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index(){
        //$title= 'Welcome to laravel';
        //return view('pages.index', compact('title'));
        return view('auth.login');
    }

    public function AnalyzeSale(){
        $title= 'Analyze Sale';
        return view('pages.AnalyzeSale',compact('title'));
    }

    public function StockOut(){
        $data=array(
            'title' => 'Stock Out',
            'StockOut' => ['Item_ID','Item_Name','Quantity']
        );
        return view('pages.StockOut')->with($data);
    } 

    public function StockIn(){
        $data=array(
            'title' => 'Stock In',
            'StockIn' => ['Item_ID','Item_Name','Quantity']
        );
        return view('pages.StockIn')->with($data);
    } 

    public function ViewOrder(){
        $data=array(
            'title' => 'View Order',
            'ViewOrder' => ['Item_ID','Item_Name','Order_Status','Order_Date']
        );
        return view('pages.ViewOrder')->with($data);
    } 

    public function ViewStock(){
        $data=array(
            'title' => 'View Stock',
            'ViewStock' => ['Item_ID','Item_Name','Quantity']
        );
        return view('pages.ViewStock')->with($data);
    }
    
    public function ViewUser(){
        // $data=array(
        // 'title' => 'View User',
        //     'ViewUser' => ['User_ID','User_Name','User_Status','User_Schedule']
        // );
        $title = 'View User';
        $users = User::all();

        return view('pages.ViewUser', compact('users','title'));
        //return view('pages.ViewUser')->with($data);
    }
}
