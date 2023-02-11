<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\item;
use Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function continue(Request $request){
        //----------------Hier validieren wir unsere DB Einträge
        $request->validate([
            'name' => 'required|alpha_dash',
            'street' => 'required|alpha_dash',
            'postal' => 'required|numeric|max:255',
            'email' => 'required',
            'bday' => 'required',
            'password1' => 'required'
        ]);


        $itemid=$request->input('itemid');
        Log::debug('Item ID.');
        Log::info(print_r($itemid, true));

        $item=item::all()->find($itemid);
        Log::debug('Das Item.');
        Log::info(print_r($item, true));

        $data=$request->all();
        Log::debug('der Post.');
        Log::info(print_r($data, true));

        $customer=customer::create($data);
        Log::debug('der erstellte Kunde.');
        Log::info(print_r($customer, true));

        if(!Session::has($customer->id) ){
            session([$customer->id => $customer]);
        }
        return view('orders.showOrder',compact('item','customer'));
    }


    public function createC(Request $request){
        $id=$request->input('id');
        //Log::info(print_r($id, true));
        $item=item::all()->find($id);
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
