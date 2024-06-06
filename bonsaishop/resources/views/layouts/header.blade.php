<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @vite(['resources/css/header.css', 'resources/css/app.css'])
    <title>Document</title>
</head>
<body>
  <div class="container-lg">
    <nav class="navbar navbar-light bg-light">
      <div class="container">
          <a class="navbar-brand" href="/">
              <img src="{{ asset('storage/logo.png') }}" alt="" width="50">
          </a>
          <div class="d-flex align-items-center">
            @auth
            <span class="me-2">{{ Auth::user()->name }}</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
            <a href="#" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất</a>
            @else
            <a href="/login" class="btn btn-success me-1 btn-sm">Đăng nhập</a>
            <a href="/register" class="btn btn-outline-success btn-sm">Đăng ký</a>
            @endauth
            <a href="{{ route('carts') }}" class="btn btn-warning ms-3">
              <img src="{{ asset('storage/shopping_cart.png') }}" alt="" width="20">
              Giỏ hàng
              @if(session('cart'))
                      <span class="badge bg-danger">{{ array_sum(array_column(session('cart'), 'quantity')) }}</span>
                  @endif
            </a>
          </div>
      </div>
  </nav>
  </div>
  <div class="bg-header py-2">
    <div class="container-lg">
      <nav class="nav justify-content-between">
        <div class="d-flex">
            <a class="nav-link {{ request()->is('/about') ? 'active' : '' }}" href="/about"><b class="text-light">Giới thiệu</b></a>
            <a class="nav-link {{ request()->is('/products') ? 'active' : '' }}" href="/products"><b class="text-light">Sản phẩm</b></a>
            <a class="nav-link" href="/post"><b class="text-light">Dịch vụ</b></a>
            <a class="nav-link" href="/post"><b class="text-light">Tin tức</b></a>
            <a class="nav-link" href="/contact"><b class="text-light">Liên hệ</b></a>
        </div>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="TÌm kiếm..." aria-label="Search">
            <button class="btn btn-success btn-width" type="submit">Tìm kiếm</button>
        </form>
      </nav>
    </div>
  </div>
</body>
</html>