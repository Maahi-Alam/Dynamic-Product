<?php

namespace App\Http\Controllers;

use App\Category;
use App\Category_option;
use App\Http\Requests\SkuRequest;
use App\Product;
use App\Sku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.skus.index')->with('skus', Sku::all() );
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


        return view('admin.skus.create',compact('products'));
        //return view('admin.skus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkuRequest $request)
    {
        //

        $input=$request->all();




        Sku::create($input);



        Session::flash('success', 'You successfully created a price.');
        return redirect()->route('sku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function show(Sku $sku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function edit(Sku $sku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sku $sku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sku $sku)
    {
        //
    }
}
