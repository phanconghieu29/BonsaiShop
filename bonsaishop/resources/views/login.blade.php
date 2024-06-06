<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/about.css'])
    <title>Document</title>
    <style>
        .login-container {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    @extends('layouts.layout')
    @section('content')
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-container">
                        <h2 class="text-center">Đăng nhập</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-group pb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                            </div>
                            <div class="form-group pb-3">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                            </div>
                            <div>
                                <a href="">Quên mật khẩu</a> | <a href="{{ route('register') }}">Đăng ký</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary m-2">Đăng nhập</button>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <p>Đăng nhập bằng tài khoản mạng xã hội</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-danger m-2" href="{{ route('google-auth') }}" role="button">Đăng nhập bằng Google</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>