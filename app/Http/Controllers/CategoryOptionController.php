<?php

namespace App\Http\Controllers;

use App\Category;
use App\Category_option;
use App\Http\Requests\CategoryOptionRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.category_options.index')->with('category_options', Category_option::all() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $products=Product::pluck("name", "id")->all();
        $categories=Category::pluck("name", "id")->all();
        return view('admin.category_options.create',compact('products','categories'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryOptionRequest $request)
    {
        //
        $input=$request->all();




        Category_option::create($input);



        Session::flash('success', 'You successfully created a category option.');
        return redirect()->route('cat-op.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category_option  $category_option
     * @return \Illuminate\Http\Response
     */
    public function show(Category_option $category_option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category_option  $category_option
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_option $category_option)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category_option  $category_option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category_option $category_option)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category_option  $category_option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_option $category_option)
    {
        //
    }
}
