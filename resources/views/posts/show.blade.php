<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>By {{ $post->author->name }}</p>
        <p>{{ $post->content }}</p>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit Post</a>
    </div>
@endsection
