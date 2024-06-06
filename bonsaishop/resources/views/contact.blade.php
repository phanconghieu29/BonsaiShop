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
        <div class="row">
            <div class="col-4">
                <h3><b>Thông tin liên hệ</b></h3>
                <p><b>Địa chỉ:</b> 140 Đ. Lê Trọng Tấn, Tây Thạnh, Tân Phú, Thành phố Hồ Chí Minh, Việt Nam</p>
                <p><b>Số điện thoại: </b>0763872617</p>
                <p><b>Email: </b>phanconghieu12@gmail.com</p>
            </div>
            <div class="col-8">
                <h3><b>Gửi thông tin</b></h3>
                <p><i>Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</i></p>
                <div class="container-fluid">
                    <form>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="name" class="py-2"><b>Họ tên</b></label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="phone" class="py-2"><b>Số điện thoại</b></label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="py-2"><b>Email</b></label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="py-2"><b>Nội dung</b></label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <div class="py-2">
                            <button type="submit" class="btn btn-success">Gửi tin nhắn</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>