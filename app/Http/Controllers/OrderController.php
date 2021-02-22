<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Nexmo\Client\Credentials\Basic;
use Nexmo\Client;
use Illuminate\Support\Facades\Auth;

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
        return view('order.partials.track');
    }

    public function index()
    {
        return view('order.index');
    }

    public function favorite()
    {
        return view('order.favorite');
    }

    public function saveOrder(Request $request)
    {

        $order_id = mt_rand(100000, 999999);

        // New  object
        $order = new Order;

        $order->order_id = $order_id;
        $order->payment = $request->paymentStatus;
        $order->price = $request->totalPrice;
        $order->phone = $request->phone;
        $order->delivery_time = $request->deliveryTime;
        $order->address = $request->address;
        $order->name = $request->name;
        $order->user_id = $request->userID;
        $order->price_summary = $request->priceSummary;
        $order->order_charge = $request->orderCharge;
        $order->order_status = $request->orderStatus;
        $order->restaurant_name = $request->restaurantName;
        $order->save();

        $order = Order::find($order->id);

        $b = $request->basket;
        for ($i=0; $i < count($b) ; $i++) { 
            $tag = $order->tags()->create([
                'name' => $b[$i] ['name'],
                'count' => $b[$i] ['count'],
                'price' => $b[$i] ['price'],
            ]);
        }

        $nexmo_credentials = new Basic('e1ee698d', '3vsIsgixcRp5bmRM');
        $user_credentials = new Client($nexmo_credentials);

        $message = $user_credentials->message()->send([
            'to' => $request->phone,
            'from' => 'Bellewisefoods',
            'text' => 'Hello,'.' '.$request->name. ' '.'your order is place succesfully below is your order ID:'.' '.$order_id.' '.'to aid you check your order status'
        ]);

    }

    public function getOrder()
    {
        $orders = Order::with('tags')
        ->orderBy('id', 'desc')
        ->paginate(5);
       return response()->json($orders);
   }

   public function search(Request $request)
   {
    $search_query = $request->search_query;
    $data = Order::where('order_id','LIKE',"%$search_query%")
    ->with('tags')
    ->take(5)
    ->get();
    return response()->json($data);
   }

    public function orderUpdate(Request $request, $id)
    {
        $order = Order::find($id);
        $order->order_status = $request->status;
        $order->save();

        $nexmo_credentials = new Basic('e1ee698d', '3vsIsgixcRp5bmRM');
        $user_credentials = new Client($nexmo_credentials);

        $message = $user_credentials->message()->send([
            'to' => $request->phone,
            'from' => 'Bellewisefoods',
            'text' => 'Hello,'.' '. $request->name. ' '.' order ID:'.' '.$request->order_id.' '.'have been' .''. $request->status
        ]);
    }


    public function geAuthOrder()
    {
        $orders = Order::where('user_id', Auth::id() )
        ->with('tags')
        ->orderBy('id', 'desc')
        ->paginate(5);
       return response()->json($orders);
   }


   public function authSearch(Request $request)
   {
    $search_query = $request->search_query;
    $data = Order::where('user_id', Auth::id() )
    ->where('order_id','LIKE',"%$search_query%")
    ->with('tags')
    ->take(5)
    ->get();
    return response()->json($data);
   }

    public function showOrder($id)
    {
      $order = Order::find($id);
      foreach ($order->tags as $tag) {
           $tag->name;
        }       
      return response()->json($order);
    }

    public function pendingOrder()
    {
        $orders = Order::where('order_status', 'pending' )
        ->with('tags')
        ->orderBy('id', 'desc')
        ->paginate(5);
       return response()->json($orders);
   }

    public function confirmOrder()
    {
        $orders = Order::where('order_status', 'confirm' )
        ->with('tags')
        ->orderBy('id', 'desc')
        ->paginate(5);
       return response()->json($orders);
   }

    public function allOrder()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

}
