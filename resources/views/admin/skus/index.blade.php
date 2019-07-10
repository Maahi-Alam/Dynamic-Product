
@extends('layouts.admin')

@section('content')

    <h1> ALL Sku</h1>




    <div class="col-sm-12">


        @if($skus)


            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>product Name</th>
                    <th> sku pattern</th>
                    <th> price</th>
                    <th>Created date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($skus as $sku)

                    <tr>
                        <td>{{$sku->id}}</td>

                        <td>{{$sku->product->name}}</td>
                        <td>{{$sku->sku}}</td>
                        <td>{{$sku->price}}</td>
                        <td>{{$sku->created_at ? $sku->created_at->diffForHumans() : 'no date'}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        @endif



    </div>










@endsection

@section('footer')
@endsection
