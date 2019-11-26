<?php

namespace App\Http\Controllers;

use App\book;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $orders = Order::all();

        return view('Orders.index', ['orders' => $orders]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('Orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request)
    {
        $cart = session()->get('cart');

        $order = new Order([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'user_id' => Auth::id(),
            'status' => false
        ]);
        $order->save();
    print_r($cart);
        foreach ($cart as $cartItem)
        {
            $orderDetail = new OrderDetail([
                'book_id' => $cartItem['book_id'],
                'order_id' => $order->id,
                'quantity' => $cartItem['quantity'],
                'unitPrice' => $cartItem['price']
            ]);
            $orderDetail->save();
        }
        $request->session()->forget('cart');
        return redirect()->route('bt.indexDetail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {
        $order = Order::find($id);
        $order->firstName = $request->input('firstName');
        $order->lastName = $request->input('lastName');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->status = $request->input('status');
        $order->save();

        return redirect()->route('order.index');
    }

    public function getUpdate($id)
    {
        $order = Order::find($id);

        return view('Orders.edit', ['order' => $order]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function postDelete(Request $request, $id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect()->route('order.index');
    }
}
