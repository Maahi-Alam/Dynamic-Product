@extends('layouts.admin')


@section('content')


    <h1>Create Sku Value</h1>
    @include('admin.includes.errors')

    {!!  Form::open(['method'=>'post','route'=>'sku-value.store'])!!}



    <div class="form-group">
        {!! Form::label('product_id','Product Name')!!}
        {!! Form::select('product_id', [''=>'Choose Option'] + $products , null,['class'=>'form-control']) !!}


    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category Name')!!}
        {!! Form::select('category_id', [''=>'Choose Option'] + $categories , null,['class'=>'form-control']) !!}


    </div>

    <div class="form-group">
        {!! Form::label('category_option_id','Category option Name')!!}
        {!! Form::select('category_option_id', [''=>'Choose Option'] + $category_options , null,['class'=>'form-control']) !!}


    </div>

    <div class="form-group">
        {!! Form::label('sku_id','Sku value')!!}
        {!! Form::select('sku_id', [''=>'Choose Option'] + $skus , null,['class'=>'form-control']) !!}


    </div>



    <div class="form-group">

        {!! Form::submit('Create sku value',['class'=>'btn btn-primary'])!!}

    </div>

    {!! Form::close()!!}



@endsection

@section('footer')
@endsection

