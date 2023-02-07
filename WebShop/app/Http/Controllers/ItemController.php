<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = item::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'img1' => 'required',
            'pcs' => 'required|numeric',
        ]);


        item::create($request->all());
        return redirect()->route('items.index')->with('success','Item created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\item $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        //
        return view('items.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\item $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $item)
    {
        //
        return view('items.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\item $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $item)
    {
        //

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'img1' => 'required',
            'pcs' => 'required',
        ]);

        $item->update($request->all());

        return redirect()->route('items.index')->with('success','Item updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\item $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        $item->delete();
        return redirect()->route('items.index')
            ->with('success','Item deleted successfully');
    }
}
