<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/about.css'])
    <title>{{ $post->title }}</title>
    <style>
        .list-group-item.active {
            background-color: limegreen !important;
            border-color: limegreen !important;
            color: #FFFFFF !important;
            font-weight: bold;
        }
        .post {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .post img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }
        .post-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .post-description {
            font-size: 16px;
            color: #555;
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
            <div class="col-md-8 offset-md-2">
                <div class="post">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <img src="{{ asset('storage/' . $post->images) }}" alt="{{ $post->title }}">
                    <p class="post-description">{!! $post->description   !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
