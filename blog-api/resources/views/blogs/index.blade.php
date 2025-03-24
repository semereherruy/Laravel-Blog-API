<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
    </style>
</head>
<body class="bg-light">

@include('layouts.navbar')

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Blog Posts</h1>
        <a href="{{ route('blogs.create') }}" class="btn btn-success">+ Create New Blog</a>
    </div>

    <!-- Blog List -->
    @if($blogs->isEmpty())
        <div class="alert alert-warning text-center">No blog posts available.</div>
    @else
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title text-dark">{{ $blog->title }}</h4>
                            <p class="card-text text-muted">{{ Str::limit($blog->content, 100) }}</p>
                            <small class="text-secondary">Created at: {{ $blog->created_at->format('M d, Y') }}</small>

                            <!-- Edit & Delete Buttons (Only for Blog Owner) -->
                            @auth
                                @if(auth()->id() === $blog->user_id)
                                    <div class="mt-3">
                                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@include('layouts.footer')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
