@extends('layouts.admin')


@section('content')


    <h1>Create Sku</h1>
    @include('admin.includes.errors')

    {!! Form::open(['method'=>'post','route'=>'sku.store'])!!}



    <div class="form-group">
        {!! Form::label('product_id','Product Name')!!}
        {!! Form::select('product_id', [''=>'Choose Option'] + $products , null,['class'=>'form-control']) !!}


    </div>

    <div class="form-group">
        {!! Form::label('sku','sku pattern')!!}
        {!! Form::text('sku',null,['class'=>'form-control'])!!}

    </div>


    <div class="form-group">
        {!! Form::label('price','Set price:')!!}
        {!! Form::text('price',null,['class'=>'form-control'])!!}

    </div>



    <div class="form-group">

        {!! Form::submit('Create Price',['class'=>'btn btn-primary'])!!}

    </div>

    {!! Form::close()!!}



@endsection

@section('footer')
@endsection

