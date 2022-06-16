@extends('layouts.layout')

@section('content')
    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h2>By query <?php  $_GET['search'] ?></h2>
            <p class="lead">Found {{ count($posts) }} posts</p>
        @else
            <h2>By query <?php  $_GET['search'] ?> nothing found</h2>
            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Show all posts</a>

        @endif
    @endif
    <div class="row">
        @foreach($posts as $post)
        <div class="col-6">
            <div class="card">
                <div class="card-header">{{ $post->short_title }}</div>
                <div class="card-body">
                    <div class="card-img" style="background-image:url({{ $post->img ?? asset('img/default.jpg') }});"></div>
                    <div class="card-author">Author: {{ $post -> name }}</div>
                    <a href="{{ route('post.show', ['id' => $post->post_id]) }}" class="btn btn-outline-primary">See post</a>
            </div>
        </div>

        @endforeach
    </div>

    @if(!isset($_GET['search']))
        {{ $posts -> links() }}
    @endif
@endsection
