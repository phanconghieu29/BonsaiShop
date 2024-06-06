@extends('layouts.layout')

@section('content')
    <div class="container py-3">
        <h1>Thanh toán</h1>
        @if(session('cart'))
            <form action="{{ route('checkout') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Tên</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <input type="hidden" name="redirect" value="">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng cộng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $id => $details)
                        <tr>
                            <td><img src="{{ $details['image'] }}" width="50" height="50" alt="{{ $details['name'] }}"></td>
                            <td>{{ $details['name'] }}</td>
                            <td>{{ $details['quantity'] }}</td>
                            <td>{{ number_format($details['price']) }}đ</td>
                            <td>{{ number_format($details['price'] * $details['quantity']) }}đ</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" class="text-end"><strong>Tổng cộng</strong></td>
                        <td><strong>{{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart))) }}đ</strong></td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Xác nhận thanh toán</button>
                </div>
            </form>
        @else
            <p>Giỏ hàng của bạn đang trống.</p>
        @endif
    </div>
@endsection
