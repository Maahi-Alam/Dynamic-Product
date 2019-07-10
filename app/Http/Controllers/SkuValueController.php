<?php

namespace App\Http\Controllers;

use App\Category;
use App\Category_option;
use App\Http\Requests\SkuValueRequest;
use App\Product;
use App\Sku;
use App\Sku_value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SkuValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        return view('admin.sku_values.index')->with('sku_values', Sku_value::all() );


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
        $category_options=Category_option::pluck("name", "id")->all();
        $skus=Sku::pluck("price", "id")->all();


        return view('admin.sku_values.create',compact('products','categories','category_options','skus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkuValueRequest $request)
    {
        //

        $input=$request->all();




        Sku_value::create($input);



        Session::flash('success', 'You successfully created a sku-values.');
        return redirect()->route('sku-value.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sku_value  $sku_value
     * @return \Illuminate\Http\Response
     */
    public function show(Sku_value $sku_value)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sku_value  $sku_value
     * @return \Illuminate\Http\Response
     */
    public function edit(Sku_value $sku_value)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sku_value  $sku_value
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sku_value $sku_value)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sku_value  $sku_value
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sku_value $sku_value)
    {
        //
    }
}
