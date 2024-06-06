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
                        <h2 class="text-center">Đăng ký</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group pb-3">
                                <label for="name">Họ tên</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="password-confirm">Xác nhận mật khẩu</label>
                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Xác nhận mật khẩu">
                                @error('password-confirm')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <p>Bạn đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a></p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary m-2">Đăng ký</button>
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