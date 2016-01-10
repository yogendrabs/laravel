@extends('layouts.master')

@section('content')

    <h1>Edit Product</h1>
    <h4>Product ID = {{ $products->id }} | Name = {{ $products->name }}</h4>

    <hr>


        {!! Form::open(['url' => route('saveEditedProduct', [$products->id]) ] )!!}
        <div class="form-group">
            <input type="text" name="name" value="{{$products->name}}" class="form-control" placeholder="Product Name">
            <span>{{ $errors->first('name') }}</span>
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" placeholder="Product Description">{{$products->description}}</textarea>
            <span>{{ $errors->first('description') }}</span>
        </div>

        <div class="form-group">
            <input type="text" name="price" value="{{$products->price}}"class="form-control" placeholder="Price">
            <span>{{ $errors->first('price') }}</span>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Save Edited Product</button>
        </div>
        {!! Form::close() !!}


@stop