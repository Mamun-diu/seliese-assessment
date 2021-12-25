@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="offset-4 col-4">
            <div class="card">
                <div class="card-header">Login Form</div>
                <div class="card-body">
                    <form action="{{ route('authenticate') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" value="user@gmail.com" class="form-control mb-2" name="email" id="" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="password" value="123456" class="form-control mb-2" name="password" id="" placeholder="Enter password">
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
