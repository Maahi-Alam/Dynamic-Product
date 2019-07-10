@extends('layouts.admin')

@section('content')
    <h1>Create product</h1>


    @include('admin.includes.errors')

    {!! Form::open(['method'=>'post','route'=>'prod.store'])!!}

    <div class="form-group">
        {!! Form::label('name','Product Name')!!}
        {!! Form::text('name',null,['class'=>'form-control'])!!}

    </div>


    <div class="form-group">

        {!! Form::submit('create Product',['class'=>'btn btn-primary'])!!}

    </div>

    {!! Form::close()!!}





@endsection

@section('footer')
@endsection