@extends('layouts.admin')


@section('content')


    <h1>Create Category</h1>
    @include('admin.includes.errors')

    {!! Form::open(['method'=>'post','route'=>'cat.store'])!!}



    <div class="form-group">
        {!! Form::label('product_id','Product Name')!!}
        {!! Form::select('product_id', [''=>'Choose Option'] + $products , null,['class'=>'form-control']) !!}


    </div>

    <div class="form-group">
        {!! Form::label('name','Category Name:')!!}
        {!! Form::text('name',null,['class'=>'form-control'])!!}

    </div>



    <div class="form-group">

        {!! Form::submit('Create Category',['class'=>'btn btn-primary'])!!}

    </div>

    {!! Form::close()!!}



@endsection

@section('footer')
@endsection

