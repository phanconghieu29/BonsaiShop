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
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="{{ route('products_management') }}" class="list-group-item list-group-item-action {{ request()->is('admin/products_management') ? 'active' : '' }}">Quản lý sản phẩm</a>
                    <a href="{{ route('user_management') }}" class="list-group-item list-group-item-action {{ request()->is('admin/user_management') ? 'active' : '' }}">Quản lý người dùng</a>
                    <a href="{{ route('post_management') }}" class="list-group-item list-group-item-action {{ request()->is('admin/post_management') ? 'active' : '' }}">Quản lý bài viết</a>
                    <a href="{{ route('category_management') }}" class="list-group-item list-group-item-action {{ request()->is('admin/category_management') ? 'active' : '' }}">Quản lý loại sản phẩm</a>
                </div>
            </div>
            <div class="col-9">
                <div class="container-fluid">
                    <div class="row">
                        @yield('admin-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
{{-- @extends('layouts_admin.app')
@section('content')
    <div class="card">
        <div class="row" style="margin: 10px 20px 0 355px">
        </div>
    </div>

@endsection --}}
