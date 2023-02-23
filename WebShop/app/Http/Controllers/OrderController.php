<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function showOrder(){
        $item=item::all()->find(session('buy'));
        $customer=Customer::all()->find(session('customer'));
        return view('orders.showOrder',['item'=>$item, 'customer'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->store();
        return redirect()->route('finishedOrder');
    }


    public function finishedOrder(){
        $item=item::all()->find(session('buy'));
        $item->pcs=$item->pcs-1;
        $item->save();
        $customer=Customer::all()->find(session('customer'));
        return view('orders.finishedOrder',['item'=>$item, 'customer'=>$customer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $item=item::all()->find(session('buy'));
        $customer=Customer::all()->find(session('customer'));
        $Iid=$item->id;
        $Cid=$customer->id;
        $status='paid';
        $order=Order::create([
            'item_id'=>$Iid,
            'customer_id'=>$Cid,
            'status'=>$status
            ]);
        session(['order'=> $order]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        return view('orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
        return view('orders.edit',compact('order'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //----Validierung der Einträge

        $request->validate([

        ]);

        $order->update($request->all());
        return redirect()->route('orders.index')->with('success','Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        $order->delete();
        return redirect()->route('orders.index')
            ->with('success','Order deleted successfully');
    }
}
