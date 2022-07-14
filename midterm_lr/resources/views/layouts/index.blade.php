@extends('layouts.master')
@section('title','Home')
@section('content')
<div class="container w-75 text-center">
    <h1 class="my-3 text-uppercase cate">{{$cateName1->name}}</h1>
    @foreach ($prdCate1 as $product )
                <div class="row mb-3 record ">
                    <div class="col-3">
                        <img src="{{$product->image}}" width="100%" alt="">
                    </div>
                    <div class="col-6 content">
                        <p class="text-uppercase fw-bold">
                            <a class="name" href="/detail/{{$product->id}}">{{$product->name}}</a>
                        </p>
                        <p class="text-muted">
                            {{$product->desc}}
                        </p>
                    </div>
                    <div class="col-3">
                        <p class="text-bold price">
                            {{$product->price}}
                        </p>
                    </div>
                </div>
    @endforeach
    <h1 class="my-3 text-uppercase cate">{{$cateName2->name}}</h1>
    @foreach ($prdCate2 as $product )
                <div class="row mb-3 record">
                    <div class="col-3">
                        <img src="{{$product->image}}" width="100%" alt="">
                    </div>
                    <div class="col-6 content">
                        <p class="text-uppercase fw-bold">
                            <a class="name" href="/detail/{{$product->id}}">{{$product->name}}</a>
                        </p>
                        <p class="text-muted">
                            {{$product->desc}}
                        </p>
                    </div>
                    <div class="col-3">
                        <p class="text-bold price">
                            {{$product->price}}
                        </p>
                    </div>
                </div>
    @endforeach
    <h1 class="my-3 text-uppercase cate">{{$cateName3->name}}</h1>
    @foreach ($prdCate3 as $product )
                <div class="row mb-3 record">
                    <div class="col-3">
                        <img src="{{$product->image}}" width="100%" alt="">
                    </div>
                    <div class="col-6 content">
                        <p class="text-uppercase fw-bold">
                            <a class="name" href="/detail/{{$product->id}}">{{$product->name}}</a>
                        </p>
                        <p class="text-muted">
                            {{$product->desc}}
                        </p>
                    </div>
                    <div class="col-3">
                        <p class="text-bold price">
                            {{$product->price}}
                        </p>
                    </div>
                </div>
    @endforeach
</div>
@endsection
