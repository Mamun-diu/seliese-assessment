@extends('layouts.app')

@section('content')
    <div class="d-flex p-3">
        @php
            $total = 0;
        @endphp
        @foreach ($products as $product)
        @php
            $total += $product->price * $product->qty;
        @endphp
            <div class="card mx-2" style="width: 18rem;">
                <div class="card-body">
                    <div class="">
                        <h5 class="card-title">Title: {{ $product->name }}</h5>
                        <h5>Quantity: {{ $product->qty }}</h5>
                        <h5>Price: {{ $product->price }}</h5>
                        <h5>Subtotal: {{ $product->price * $product->qty }}</h5>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <form action="{{ route('checkout') }}" method="post" class="d-inline-block">
        @csrf
        <button type="submit" class="btn btn-primary ms-4 d-inline-block">Checkout ({{ $total }})</button>
    </form>

    <a href="{{ route('home') }}" class="btn btn-danger ms-1 d-inline-block">Back</a>


@endsection
