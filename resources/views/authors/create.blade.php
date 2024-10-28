<!-- resources/views/authors/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Author</h1>
    
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
