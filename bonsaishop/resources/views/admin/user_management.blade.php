{{-- @extends('admin.index')
    @section('admin-content')
    <h1 class="center">Quản lý người dùng</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Email</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Vai trò</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <th>{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->role }}</td>
                    <td>
                        <form action="{{ route('user_management') }}" method="post">
                          @csrf
                          <button type="submit" class="btn btn-primary btn-sm">Cấp quyền</button>
                          <button type="submit" class="btn btn-danger btn-sm">Hủy</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      <div class="mx-auto" style="width: 200px;">
        {{ $users->links('pagination::bootstrap-4') }}
      </div>
    @endsection --}}

@extends('admin.index')
@section('admin-content')
    <h1 class="center">Quản lý người dùng</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Email</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Vai trò</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <th>{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->role }}</td>
                    <td>
                        <form action="{{ route('user.upgrade') }}" method="post" style="display:inline-block;">
                          @csrf
                          <input type="hidden" name="user_id" value="{{ $item->id }}">
                          <button type="submit" class="btn btn-primary btn-sm">Cấp quyền</button>
                        </form>
                        <form action="{{ route('user.downgrade') }}" method="post" style="display:inline-block;">
                          @csrf
                          <input type="hidden" name="user_id" value="{{ $item->id }}">
                          <button type="submit" class="btn btn-danger btn-sm">Hủy</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      <div class="mx-auto" style="width: 200px;">
        {{ $users->links('pagination::bootstrap-4') }}
      </div>
@endsection
