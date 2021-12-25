@extends('layouts.app')

@section('content')
<div class="card mx-2" style="">
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <img height="300px" src="{{ $productDetails['image_url'] }}" class="card-img-top" alt="image">
            </div>
            <div class="col-3">
                <h5 class="card-title">{{ $productDetails['title'] }}</h5>
                <h5>{{ $productDetails['price'] }}</h5>
                <a href="{{ route('product.addCart', ['id' => $productDetails['product_id']]) }}" class="btn btn-primary w-100">Add to cart</a>
                <a href="{{ route('home') }}" class="btn btn-danger w-100 mt-2">Back</a>
            </div>
        </div>
    </div>
</div>
<div class="card mx-2">
    <div class="card-header">
        Details
    </div>
    <div class="card-body">
        <p>{{ $productDetails['description'] }}</p>
    </div>
</div>

@endsection
