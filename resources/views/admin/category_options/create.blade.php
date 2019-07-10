@extends('layouts.admin')


@section('content')


    <h1>Create Category_option</h1>
    @include('admin.includes.errors')

    {!! Form::open(['method'=>'post','route'=>'cat-op.store'])!!}



    <div class="form-group">
        {!! Form::label('product_id','Product Name')!!}
        {!! Form::select('product_id', [''=>'Choose Option'] + $products , null,['class'=>'form-control']) !!}


    </div>



    <div class="form-group">
        {!! Form::label('category_id','Category Name')!!}
        {!! Form::select('category_id', [''=>'Choose Option'] + $categories , null,['class'=>'form-control']) !!}


    </div>

    <div class="form-group">
        {!! Form::label('name','Category_Option Name:')!!}
        {!! Form::text('name',null,['class'=>'form-control'])!!}

    </div>





    <div class="form-group">

        {!! Form::submit('Create Category_Option',['class'=>'btn btn-primary'])!!}

    </div>

    {!! Form::close()!!}



@endsection

@section('footer')
@endsection

