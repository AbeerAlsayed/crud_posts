@extends('layouts.master')

@section('title')
    Dashboard
@stop


@section('css')

@endsection
@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Update Post</h3>
                <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                               value="{{ $post->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" name="body" rows="3" required>{{ $post->body }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" class="form-control" id="img" name="img"
                               value="{{ $post->img }}" required>
                    </div>
                    <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
                </form>
            </div>
        </div>
    </div>@stop
@section('js')
@endsection
