<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/about.css'])
    <title>Document</title>
    <style>
        .list-group-item.active {
            background-color: limegreen !important;
            border-color: limegreen !important;
            color: #FFFFFF !important;
            font-weight: bold
        }
    </style>
</head>
<body>
    @extends('layouts.layout')
    @section('content')
    <div class="container py-3">
        <div>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            {{-- <div class="col-3">
                <div class="list-group">
                    <a href="products" class="list-group-item list-group-item-action {{ request()->is('products') ? 'active' : '' }}">Sản phẩm</a>
                    <a href="#" class="list-group-item list-group-item-action {{ request()->is('#') ? 'active' : '' }}">Cây cảnh để bàn</a>
                    <a href="#" class="list-group-item list-group-item-action {{ request()->is('about') ? 'active' : '' }}">Cây chậu treo</a>
                    <a href="#" class="list-group-item list-group-item-action {{ request()->is('about') ? 'active' : '' }}">Cây xương rồng</a>
                    <a href="#" class="list-group-item list-group-item-action {{ request()->is('about') ? 'active' : '' }}">Cây thủy sinh</a>
                    <a href="#" class="list-group-item list-group-item-action {{ request()->is('about') ? 'active' : '' }}">Cây ăn trái</a>
                </div>
            </div> --}}
            {{-- <a href="{{ route('products.index') }}" class="list-group-item list-group-item-action {{ request()->is('products') ? 'active' : '' }}">Sản phẩm</a> --}}
            <div class="col-3">
                <div class="list-group">
                    <h3><b>Danh mục</b></h3><hr>
                    @foreach(App\Models\Category::all() as $category)
                        <a href="{{ route('products.category', $category->cat_slug) }}" class="list-group-item list-group-item-action {{ request()->is('products/'.$category->cat_slug) ? 'active' : '' }}">{{ $category->cat_name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-9">
                <div class="container-fluid">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->pro_name }}">
                                    <div class="container">
                                        <div class="card-body">
                                            <p class="card-title"><b>{{ $product->pro_name }}</b></p>
                                            <div class="row">
                                                <div class="col-8">
                                                    <p class="card-text text-danger"><b>Giá: {{ number_format($product->price) }}đ</b></p>
                                                </div>
                                                <div class="col-2">
                                                    <form action="{{ route('add_to_cart', $product->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary btn-sm"><img src="{{ asset('storage/shopping_cart.png') }}" alt="" width="18"></button>
                                                    </form>
                                                </div>
                                                <div class="col-2">
                                                    <a href="{{ route('products.detail', $product->pro_slug) }}" class="btn btn-primary btn-sm"><img src="{{ asset('storage/detail.png') }}" alt="" width="18"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mx-auto" style="width: 200px;">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>