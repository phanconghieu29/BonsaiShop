@extends('admin.index')
    @section('admin-content')
    <h1 class="center">Quản lý sản phẩm</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{route('product.create')}}" class="btn btn-success" style="width: 150px;">Thêm sản phẩm</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Loại</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <th>{{ $item->id }}</th>
                    <td>{{ $item->pro_name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->cat_name }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('products.edit', $item->id) }}" role="button">Sửa</a>
                        <form action="{{ route('products.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mx-auto" style="width: 200px;">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
    @endsection