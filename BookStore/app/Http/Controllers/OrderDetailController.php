<?php

namespace App\Http\Controllers;

use App\book;
use App\OrderDetail;
use Illuminate\Http\Request;
use mysql_xdevapi\Collection;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\DB;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex($id)
    {
        $orderDetail = DB::table('order_details')
            ->join('books', 'order_details.book_id', '=', 'books.id')
            ->where('order_details.order_id', $id)
            ->select('books.image', 'books.name', 'order_details.quantity', 'unitPrice')
            ->get();
        return view('OrderDetail.index', [
            'orderDetail' => $orderDetail
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\OrderDetail $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function show(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\OrderDetail $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\OrderDetail $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\OrderDetail $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderDetail $orderDetail)
    {
        //
    }
}
