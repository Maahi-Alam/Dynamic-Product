
@extends('layouts.admin')

@section('content')

    <h1> ALL Sku Value</h1>




    <div class="col-sm-12">


        @if($sku_values)


            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>product Name</th>
                    <th>Category Name</th>
                    <th>Category_option Name</th>
                    <th>Sku price</th>
                    <th>Created date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($sku_values as $sku_value)

                    <tr>
                        <td>{{$sku_value->id}}</td>

                        <td>{{$sku_value->product->name}}</td>
                        <td>{{$sku_value->category->name}}</td>
                        <td>{{$sku_value->category_option->name}}</td>
                        <td>{{$sku_value->sku->price}}</td>
                        <td>{{$sku_value->created_at ? $sku_value->created_at->diffForHumans() : 'no date'}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        @endif



    </div>










@endsection

@section('footer')
@endsection
