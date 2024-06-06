@extends('admin.index')
    @section('admin-content')
    <div class="container">
      <h1 class="center">Quản lý loại sản phẩm</h1>
      @if(session('msg'))
          <div class="alert alert-success">
              {{ session('msg') }}
          </div>
      @endif

      @if(session('error'))
          <div class="alert alert-danger">
              {{ session('error') }}
          </div>
      @endif
      <form action="{{ route('add.category') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Tên loại" value="{{ old('cat_name') }}">
              @error('cat_name')
                  <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <input type="text" class="form-control" id="cat_slug" name="cat_slug" placeholder="Slug" value="{{ old('cat_slug') }}">
              @error('cat_slug')
                  <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary m-2">Thêm</button>
          </div>
        </div>
      </form>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tên loại</th>
              <th scope="col">Slug</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($categories as $item)
                  <tr>
                      <th>{{ $item->id }}</th>
                      <td>{{ $item->cat_name }}</td>
                      <td>{{ $item->cat_slug }}</td>
                      <td>
                        <a href="{{ route('edit.category', $item->id) }}" class="btn btn-primary">Sửa</a>
                      </td>
                      <td>
                        <form action="{{ route('delete.category', $item->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                      </td>
                  </tr>
              @endforeach
          </tbody>
        </table>
        <div class="mx-auto" style="width: 200px;">
          {{ $categories->links('pagination::bootstrap-4') }}
        </div>
    </div>
    @endsection