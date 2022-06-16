@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>
                <div class="card-body">
                    <div class="card-img card-img__max" style="background-image:url({{ $post->img ?? asset('img/default.jpg') }});"></div>
                    <div class="card-author">Author: {{ $post -> name }}</div>
{{--                    <div class="card-date">Post created: {{ $post }}</div>--}}
                    <div class="card-btn">
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Go to home</a>
                        <a href="{{ route('post.edit', ['id'=>$post->post_id]) }}" class="btn btn-outline-success">Edit</a>
                        <form action="{{ route('post.destroy', ['id'=>$post->post_id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-outline-danger" value="Delete">
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
