
@extends('layouts.admin')

@section('content')

    <h1> ALL Products</h1>




    <div class="col-sm-12">


        @if($products)


            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Created date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)

                    <tr>
                        <td>{{$product->id}}</td>
                        <td><a href="#">{{$product->name}}</a></td>
                        <td>{{$product->created_at ? $product->created_at->diffForHumans() : 'no date'}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        @endif



    </div>










@endsection

@section('footer')
@endsection