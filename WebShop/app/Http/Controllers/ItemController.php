<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;
use Helper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\This;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param \App\Models\item $item
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = item::all();
        return view('items.index', compact('items'));
    }

    public function validateit(Request $request){
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'price' => 'required|numeric',
            'pcs' => 'required|numeric',
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
        $categories= Category::all();
        return view('items.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateit($request);
        Helper::prepareUploadItem($request);
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
        //Sessions brauchen wir um zu schauen welche Produkte sich Kunden angeschaut haben
        //Aber auch um vllt die angeschauten Objekte nochmal verwenden zu können
        session_start();
         session_destroy();
        if(!Session::has($item->id) ){
            session([$item->id => $item]);
        }
//        Log::info(print_r($item, true));
//        Log::info(print_r(Session::all(), true));
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
        $categories= Category::all();
        return view('items.edit',compact('item'),['categories'=>$categories]);
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
        $this->validateit($request);
        Helper::prepareUploadItem($request);
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
