@extends('admin.index')
@section('admin-content')
    <div class="card p-10">
        <a href="{{route('products_management') }}" style="margin-bottom: 25px;width: 100px" class="btn btn-info">Quay lại</a>
        <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-10">
                <label class="fw-bold"> Tên sản phẩm</label>
                <span class="required-field">*</span>
                <input type="text" class="form-control" name="pro_name" required>
                @error('pro_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label class="fw-bold"> Đơn giá</label>
                <span class="required-field">*</span>
                <input type="text" class="form-control" name="price" required>
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label class="fw-bold"> Số lượng</label>
                <span class="required-field">*</span>
                <input type="text" class="form-control" name="quantity" required>
                @error('quantity')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label class="fw-bold"> Slug</label>
                <span class="required-field">*</span>
                <input type="text" class="form-control" name="pro_slug" required>
                @error('pro_slug')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label class="fw-bold">Hình ảnh</label>
                <span class="required-field">*</span>
                <input type="file" class="form-control" name="image" accept=".jpeg,.png,.jpg,.gif" required>
                @error('image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label class="fw-bold">Loại sản phẩm</label>
                <span class="required-field">*</span>
                <select class="form-control" name="cat_id" required>
                    <option value="" disabled selected>Chọn loại sản phẩm</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                    @endforeach
                </select>
                @error('cat_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label>Mô tả</label>
                <textarea name="describe" rows="4" cols="50"></textarea>
                @error('describe')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="modal-footer">
                <button class="btn btn-success">Thêm</button>
            </div>
        </form>
    </div>

    </script>
@endsection