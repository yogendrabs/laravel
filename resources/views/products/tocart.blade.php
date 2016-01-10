@extends('layouts.master')


@section('content')

    <h1>Products</h1>
        @if( !$products->isEmpty())
            @foreach( $products as $product )
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="" alt="{{ $product->name }}" class="">
                        <div class="caption">
                            <h3>Name : {{ $product->name }}</h3>
                            <p>{{ $product->description }}</p>
                            <h3>Price : {{ $product->price }}</h3>
                            <p><a href="" class="btn btn-primary" role="button" target="_blank">Add to <span class="glyphicon glyphicon-shopping-cart"></span></a></p>
                        </div>
                    </div>
                </div>
            @endforeach

        @else
                <h3>There are no products.</h3>
        @endif
    </div>

@stop