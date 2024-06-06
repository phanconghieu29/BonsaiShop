{{-- @extends('layouts_admin.app')

@section('content') --}}
@extends('admin.index')
@section('admin-content')
    <div class="card p-10">
        <a href="{{route('posts.index') }}" style="margin-bottom: 25px;width: 100px" class="btn btn-info">{{ __('Back') }}</a>
        <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-10">
                <label class="fw-bold"> Title</label>
                <span class="required-field">*</span>
                <input type="text" class="form-control" name="title" required>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label class="fw-bold">Image</label>
                <span class="required-field">*</span>
                <input type="file" class="form-control" name="images" accept=".jpeg,.png,.jpg,.gif" required>
                @error('images')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-10">
                <label>Description</label>
                <textarea id="summernote" name="description" required></textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="modal-footer">
                <button class="btn btn-success">Create</button>
            </div>
        </form>
    </div>

    </script>
@endsection
