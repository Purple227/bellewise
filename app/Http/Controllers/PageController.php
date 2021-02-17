<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function about()
    {
        return view('about');
    }


    public function terms()
    {
        return view('terms');
    }

    public function policy()
    {
        return view('policy');
    }

    public function success()
    {
        return view('success');
    }


}
