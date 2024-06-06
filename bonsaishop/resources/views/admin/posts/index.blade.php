@extends('admin.index')
@section('admin-content')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('./css/admin_student.css') }}"> --}}
    <div class="container">
        <div class="card-body py-3">
            <a href="{{route('posts.create')}}"   style="margin-bottom: 25px" class="btn btn-success" >{{__('Add Post')}}</a>
            <table class="table">
                <th>{{__('ID')}}</th>
                <th>{{__('Title')}}</th>
                <th>{{__('Image')}}</th>
                <th>{{__('Description')}}</th>
                <th>{{__('Action')}}</th>
                </td>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td><img height="80px" src="{{ asset('storage/' . $post->images) }}" alt=""></td>
                        <td>{!! $post->description !!}</td>
                        <td>
                            <a href="{{ route('posts.edit',$post->id) }}" style="background: #ffc700; color: #fff;" class="btn">{{ __('Update') }}</a>
                            <form action="{{route('posts.destroy',$post->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger delete">{{ __('Delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
