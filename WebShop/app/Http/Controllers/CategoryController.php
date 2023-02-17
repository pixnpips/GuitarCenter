<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Session;
use Helper;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('categories.index', compact('categories'));

    }

    public function validateCategory(Request $request){
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
        ]);
    }

    public function WebShop(){
        $categories = Category::all();
        return view('WebShop',compact('categories'));
    }

    public function showItems(Category $category){
        $items=$category->items();
        return view ('categories.showItems', compact('items'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //----Validierung der Einträge
        $this->validateCategory($request);

        //------------Upload der Bilder
        Helper::prepareUploadCategory($request);
        Category::create($request->all());
        return redirect()->route('categories.index')->with('success','Category created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return view('categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('categories.edit',compact('category'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        //----Validierung der Einträge
        $this->validateCategory($request);

        //------------Upload der Bilder

        Helper::prepareUploadCategory($request);
        $category->update($request->all());
        return redirect()->route('categories.index')->with('success','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        $category->items()->delete();
        return redirect()->route('categories.index')
            ->with('success','Category deleted successfully');
    }

}
