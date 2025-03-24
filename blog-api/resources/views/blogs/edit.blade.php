@extends('layouts.app')

@extends('layouts.navbar')

@section('content')
<div class="container">
    <h2>Edit Blog Post</h2>
    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" class="form-container">
        @csrf
        @method('PUT') <!-- This will use the PUT method to update the resource -->

        <!-- Title Input -->
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}" class="form-input" required>
        </div>

        <!-- Content Input -->
        <div class="form-group">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-textarea" required>{{ old('content', $blog->content) }}</textarea>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Blog</button>
        </div>
    </form>
</div>

<!-- Optional: Add custom styles to enhance the form design -->
<style>
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .form-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-label {
        font-size: 14px;
        margin-bottom: 5px;
        color: #333;
    }

    .form-input, .form-textarea {
        padding: 10px;
        font-size: 14px;
        border-radius: 4px;
        border: 1px solid #ccc;
        background-color: #fff;
    }

    .form-input:focus, .form-textarea:focus {
        border-color: #007bff;
        outline: none;
    }

    .form-textarea {
        resize: vertical;
        min-height: 150px;
    }

    .btn {
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>
@endsection
