@extends('layouts.master')


@section('content')

    <h1>Add Product</h1>

    <hr>

    <form role="form" method="POST" action="{{ route('postAddProduct') }}" xmlns="http://www.w3.org/1999/html">

        <input name="_token" type="hidden" value="{{csrf_token()}}">

        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Product Name">
            <span>{{ $errors->first('name') }}</span>
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" placeholder="Product Description"></textarea>
            <span>{{ $errors->first('description') }}</span>
        </div>

        <div class="form-group">
            <input type="text" name="price" class="form-control" placeholder="Price">
            <span>{{ $errors->first('price') }}</span>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Add Product</button>
        </div>

    </form>

    @stop