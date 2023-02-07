<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
//        $validated = $request->validate([
//            'message' => 'required|string|max:255',
//        ]);
//
//        $request->user()->orders()->create($validated);
//
//        return redirect(route('orders.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
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
            'password' => 'required'
        ]);

        $customer->update($request->all());

        return redirect()->route('posts.index')->with('success','Post updated successfully');
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
    }
}
