<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.layout')
    @section('content')
    <div class="container py-3">
        <div>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                  <li class="breadcrumb-item"><a href="/products">Sản phẩm</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $product->pro_name }}</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $product->image }}" alt="{{ $product->pro_name }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>{{ $product->pro_name }}</h2>
                <p><strong>Price:</strong> ${{ $product->price }}</p>
                <p><strong>Description:</strong> {{ $product->describe }}</p>
                <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
                <form action="{{ route('add_to_cart', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm"><img src="{{ asset('storage/shopping_cart.png') }}" alt="" width="18">Thêm vào giỏ hàng</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>