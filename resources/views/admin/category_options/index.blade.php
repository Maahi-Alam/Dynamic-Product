
@extends('layouts.admin')

@section('content')

    <h1> ALL Category_option</h1>




    <div class="col-sm-12">


        @if($category_options)


            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>product Name</th>
                    <th>Category Name</th>
                    <th>Category_option Name</th>
                    <th>Created date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($category_options as $category_option)

                    <tr>
                        <td>{{$category_option->id}}</td>

                        <td>{{$category_option->product->name}}</td>
                        <td>{{$category_option->category->name}}</td>
                        <td>{{$category_option->name}}</td>
                        <td>{{$category_option->created_at ? $category_option->created_at->diffForHumans() : 'no date'}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        @endif



    </div>










@endsection

@section('footer')
@endsection
