<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    

    public function order()
    {
        return view('order');
    }

    public function single()
    {
        return view('single_order');
    }

    public function index()
    {
        return view('order.index');
    }




}
