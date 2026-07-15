<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Blog Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="list-group">
        @forelse($posts as $post)
            <div class="list-group-item d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="mb-1"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h5>
                    <p class="mb-1 text-muted">{{ \Illuminate\Support\Str::limit($post->content, 120) }}</p>
                </div>
                <div>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="alert alert-info">No posts yet.</div>
        @endforelse
    </div>
</div>
</body>
</html>
