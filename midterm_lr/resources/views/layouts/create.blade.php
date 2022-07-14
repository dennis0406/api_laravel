@extends('layouts.master')
@section('title', 'create')
@section('content')
    <div class="container text-center w-75 mt-3">
        <form action="{{ route('add') }}" method="post">
            @csrf
            <div class="form_group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Nhập tên món ăn...">
            </div>
            <div class="form_group mb-3">
                <select class="form-select" name="category_id" aria-label="Default select example">
                    <option selected>Chọn danh mục món ăn</option>
                    @foreach ($categories as $cate )
                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="form_group mb-3">
                <textarea name="desc" cols="30" rows="3" placeholder="Nhập mô tả món ăn" class="form-control"></textarea>
            </div>
            <div class="form_group mb-3">
                <input type="text" class="form-control" name="image" placeholder="Link hình ảnh món ăn...">
            </div>
            <div class="form_group mb-3">
                <input type="number" class="form-control" name="price" placeholder="Nhập giá món ăn...">
            </div>
            <div class="form_group mb-3">
                <button type="submit" class="btn btn-outline-primary">Tạo</button>
                <a href="/" class="btn-outline-drak btn">Quay lại</a>
            </div>
        </form>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
