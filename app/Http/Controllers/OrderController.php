<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

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

    public function saveOrder()
    {
        $order_id = mt_rand(100000, 999999);

        // New  object
        $order = new Order;

        $order->order_id = $order_id;
        $order->payment = $request->payment;
        $order->status = $request->status;
        $order->price = $request->price_summary;
        $order->phone = $request->contact_number;
        $order->delivery_time = $request->delivery_time;
        $order->address = $request->address;
        $order->save();


            //Tags save to database
        $tags = $request->tags;
        foreach ($tags as $tag) {
           $tag_data[] =Tag::firstOrCreate([
            'name' => $tag
        ]);     
       } 

     //I collected the tag id
       if (isset($tag_data) ) {
           $tag_count = count($tag_data);
           for ($i=0; $i<$tag_count; $i++) { 
            $tag_id[] = $tag_data[$i]['id'];
        }

    // A blast tag id get inserted here for many to many relationship
        $order->tags()->attach($tag_id);
    }
}



}
