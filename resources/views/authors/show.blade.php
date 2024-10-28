<!-- resources/views/authors/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Author Details</h1>
    <p><strong>Name:</strong> {{ $author->name }}</p>
    <p><strong>Email:</strong> {{ $author->email }}</p>
    <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
