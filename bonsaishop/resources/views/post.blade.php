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
              <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                <h3><b>Danh mục</b></h3><hr>
                @foreach(App\Models\Category::all() as $category)
                    <a href="{{ route('products.category', $category->cat_slug) }}" class="list-group-item list-group-item-action {{ request()->is('products/'.$category->cat_slug) ? 'active' : '' }}">{{ $category->cat_name }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img height="150px" src="{{ asset('storage/' . $post->images) }}" class="card-img-top" alt="{{ $post->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <a href="{{route('posts.show-web',$post->id)}}" class="btn btn-primary btn-sm">
                                            <img src="{{ asset('storage/detail.png') }}" alt="" width="18">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
