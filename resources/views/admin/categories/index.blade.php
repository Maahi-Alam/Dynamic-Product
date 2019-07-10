
@extends('layouts.admin')

@section('content')

    <h1> ALL Category</h1>




    <div class="col-sm-12">


        @if($categories)


            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>product Name</th>
                    <th>Category Name</th>
                    <th>Created date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)

                    <tr>
                        <td>{{$category->id}}</td>

                        <td>{{$category->product->name}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        @endif



    </div>










@endsection

@section('footer')
@endsection
