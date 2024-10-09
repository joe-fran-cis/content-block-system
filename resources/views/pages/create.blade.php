@extends('layouts.header')

@section('title', 'Create Page')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Create a New Page</h1>
        
        <form action="{{ route('pages.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Page Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Page Description:</label>
                <textarea name="description" id="description" class="form-control" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="text_content" class="form-label">Text Block:</label>
                <textarea name="text_content" id="text_content" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image_url" class="form-label">Image URL:</label>
                <input type="text" name="image_url" id="image_url" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create Page</button>
        </form>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>
@endsection
