<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\item;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function continue(Request $request, item $item){
        //----------------Hier validieren wir unsere DB Einträge
        $request->validate([
            'name' => 'required|alpha_dash',
            'street' => 'required|alpha_dash',
            'postal' => 'required|numeric|max:255',
            'email' => 'required',
            'bday' => 'required',
            'password1' => 'required'
        ]);
        $customer=Customer::create($request->all());
        return redirect()->route('order.showOrder',['item'=>$item, 'customer'=>$customer]);
    }

    public function createC(item $item){
        return view('customers.createC',['item'=>$item]);
    }

    public function index()
    {
        //
        $customers= Customer::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//----------------Hier validieren wir unsere DB Einträge
        $request->validate([
            'name' => 'required|alpha_dash',
            'street' => 'required|alpha_dash',
            'postal' => 'required|numeric|max:255',
            'email' => 'required',
            'bday' => 'required',
            'password1' => 'required'
        ]);


        Customer::create($request->all());
        return redirect()->route('customers.index')->with('success','Customer created successfully.');


        //----------------------------Für Order Klasse-------------------

//-----------------------Hier haben wir einen One to many Beziehung auf die User Klasse die wir für Bestellungen nutzen können
//
//        $request->user()->orders()->create($validated);
//        return redirect(route('orders.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $Customer)
    {
        //
        return view('customers.show',compact('Customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $Customer)
    {
        //
        return view('customers.edit',compact('Customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $request->validate([
            'name' => 'required|alpha_dash',
            'street' => 'required|alpha_dash',
            'postal' => 'required|numeric|max:255',
            'email' => 'required',
            'bday' => 'required',
            'password1' => 'required'
        ]);

        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success','Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
        $customer->delete();
        return redirect()->route('customers.index')->with('success','Customer deleted successfully');
    }
}
