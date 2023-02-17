<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ItemController;
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


    // Diese Methode führt uns zur View Customer createC. von wo aus wir nun den Nutzer erstellen wollen!! Das machen wir in der Continue Methode des Nutzers
    //auch er bekommt per Post Daten zugesendet zum anzeigen

    public function createC($id){
        session(['buy' => $id]);
        Log::info(print_r($id, true));
        Log::info(print_r(Session::all(), true));
      return view('customers.CreateC',['id'=>$id]);
    }

    public function validateCust(Request $request){
        $request->validate([
            'name' => 'required|alpha_dash',
            'street' => 'required|alpha_dash',
            'postal' => 'required|numeric|max:255',
            'email' => 'required',
            'bday' => 'required',
            'password1' => 'required',
        ]);

    }


    public function continue(Request $request)
    {
        $this->validateCust($request);
        $customer = Customer::create($request->all());
        session(['customer' => $customer->id]);
        Log::info(print_r(Session::all(), true));

        return redirect()->route('showOrder');
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
//----------------Hier validieren wir unsere Form Inputs und spcuekn Fehlermeldungen aus
        $this->validateCust($request);
        Customer::create($request->all());
        return redirect()->route('customers.index')->with('success','Customer created successfully.');

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
        $this->validateCust($request);
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
