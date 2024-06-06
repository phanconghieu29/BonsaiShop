<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/css/footer.css'])
    <title>Document</title>
</head>
<body>
    <div class="bg-footer">
        <div class="container-lg">
            {{-- <div class="footer-left-content">
                <p><b>Địa chỉ:</b> 140 Đ. Lê Trọng Tấn, Tây Thạnh, Tân Phú, Thành phố Hồ Chí Minh, Việt Nam</p>
            </div>
            <div class="footer-right-content">
                <p><b>Địa chỉ:</b> 140 Đ. Lê Trọng Tấn, Tây Thạnh, Tân Phú, Thành phố Hồ Chí Minh, Việt Nam</p>
            </div> --}}
            <div class="row">
                <div class="col-4">
                    <p><b>Địa chỉ:</b> 140 Đ. Lê Trọng Tấn, Tây Thạnh, Tân Phú, Thành phố Hồ Chí Minh, Việt Nam</p>
                    <p><b>Số điện thoại: </b>0763872617</p>
                    <p><b>Email: </b>phanconghieu12@gmail.com</p>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-6"><nav class="nav flex-column">
                            <h3 class="text-dark"><b>Truy cập nhanh</b></h3>
                            <a class="nav-link py-0 text-dark" href="/about">Giới thiệu</a>
                            <a class="nav-link py-0 text-dark" href="/products">Sản phẩm</a>
                            <a class="nav-link py-0 text-dark" href="/post">Dịch vụ</a>
                            <a class="nav-link py-0 text-dark" href="/post">Tin tức</a>
                            <a class="nav-link py-0 text-dark" href="/contact">Liên hệ</a>
                          </nav></div>
                        <div class="col-6">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
