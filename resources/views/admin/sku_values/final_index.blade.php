
@extends('layouts.admin')

@section('content')

    <h1> ALL Sku Value</h1>




    <div class="col-sm-12">


        @if($sku_values)






            <table class="table">
                <thead>
                <tr>


                    @foreach($sku_values as $id1)
                        @if(($id1->product->id == $id1->sku->id) )
                            <th>{{$id1->category->name}}</th>
                        @endif
                    @endforeach


                    <th>Sku price</th>

                </tr>
                </thead>
                <tbody>

                @foreach($sku_values as $sku_value)

                    <tr>


                            @foreach($sku_values as $id)
                                @if(($id->product->id == $id->sku->id) )
                                <td>{{$id->category_option->name}}</td>
                                @endif


                            @endforeach
                        <td>{{$sku_value->sku->price}}</td>






                    </tr>
                @endforeach

                </tbody>
            </table>

        @endif



    </div>










@endsection

@section('footer')
@endsection
