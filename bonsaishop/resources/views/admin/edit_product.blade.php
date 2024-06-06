@extends('admin.index')
@section('admin-content')
    <div class="card p-10">
        <a href="{{ route('products_management') }}" style="margin-bottom: 25px;width: 100px" class="btn btn-info">Quay lại</a>
        <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group mb-10">
                <label class="fw-bold">Tên sản phẩm</label>
                <span class="required-field">*</span>
                <input type="text" class="form-control" name="pro_name" value="{{ $product->pro_name }}" required>
                @error('pro_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label class="fw-bold">Đơn giá</label>
                <span class="required-field">*</span>
                <input type="text" class="form-control" name="price" value="{{ $product->price }}" required>
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label class="fw-bold">Số lượng</label>
                <span class="required-field">*</span>
                <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}" required>
                @error('quantity')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label class="fw-bold">Slug</label>
                <span class="required-field">*</span>
                <input type="text" class="form-control" name="pro_slug" value="{{ $product->pro_slug }}" required>
                @error('pro_slug')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label class="fw-bold">Hình ảnh</label>
                <span class="required-field">*</span>
                <input type="file" class="form-control" name="image" accept=".jpeg,.png,.jpg,.gif">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->pro_name }}" style="max-width: 100px; margin-top: 10px;">
                @endif
                @error('image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label class="fw-bold">Loại sản phẩm</label>
                <span class="required-field">*</span>
                <select class="form-control" name="cat_id" required>
                    <option value="" disabled>Chọn loại sản phẩm</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->cat_id == $category->id ? 'selected' : '' }}>{{ $category->cat_name }}</option>
                    @endforeach
                </select>
                @error('cat_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label>Mô tả</label>
                <textarea name="describe" rows="4" cols="50">{{ $product->describe }}</textarea>
                @error('describe')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="modal-footer">
                <button class="btn btn-success">Cập nhật</button>
            </div>
        </form>
    </div>
@endsection
