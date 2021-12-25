@extends('layouts.app')

@section('content')
    <div class="d-flex py-3">
        @foreach ($productLists as $product)
            <div class="card mx-2" style="width: 18rem;">
                <img height="300px" src="{{ $product['image_url'] }}" class="card-img-top" alt="image">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['title'] }}</h5>
                    <h5>{{ $product['price'] }}</h5>
                    <a href="{{ route('product.details', ['id' => $product['product_id']]) }}" class="btn btn-primary w-100">View</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
