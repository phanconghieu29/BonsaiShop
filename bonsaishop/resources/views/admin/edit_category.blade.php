@extends('admin.index')

@section('admin-content')
    <div class="container">
        <h1 class="center">Chỉnh sửa loại cây</h1>
        <form action="{{ route('update.category', $category->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="cat_name">Tên loại</label>
                        <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Tên loại" value="{{ $category->cat_name }}">
                        @error('cat_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="cat_slug">Slug</label>
                        <input type="text" class="form-control" id="cat_slug" name="cat_slug" placeholder="Slug" value="{{ $category->cat_slug }}">
                        @error('cat_slug')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary m-2">Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
@endsection
