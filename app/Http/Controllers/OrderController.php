<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    

    public function order()
    {
        return view('order_item');
    }

    public function single()
    {
        return view('single_order');
    }
    
    public function track()
    {
        return view('order.track');
    }

    public function index()
    {
        return view('order.index');
    }

    public function favorite()
    {
        return view('order.favorite');
    }



}
