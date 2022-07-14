@extends('layouts.master')
@section('title', 'detail')
@section('content')
    <div class="container text-center">
        <div class="card" style="width: 100%;">
            <img src="{{ $product->image }}" class="card-img-top" alt="" width="100%">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->desc }}</p>
                <p class="card-text price">{{ $product->price }}</p>
                <a href="buy/{{ $product->id }}" class="btn btn-success">Mua ngay</a>
            </div>
        </div>
        <a href="/" class="btn btn-outline-dark mt-2">Quay lại</a>
    </div>
@endsection
