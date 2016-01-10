@extends('layouts.master')


@section('content')

    <h1>Product List</h1>

    <hr>
        <table class="table table-bordered table-responsive table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>

            @if( !$products->isEmpty())
                @foreach( $products as $product )
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description}}</td>
                        <td>{{ $product->price }}</td>
                        <td><a href="{{ route('editProduct', [ $product->id ]) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> | <a href="{{ route('deleteProduct', [$product->id]) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                    </tr>
                @endforeach

            @else
                <tr>
                    <td colspan="4">There are no products.</td>
                </tr>
            @endif
        </table>
    </div>

@stop