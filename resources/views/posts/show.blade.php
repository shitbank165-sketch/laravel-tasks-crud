<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <div class="mt-4">
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-secondary">Edit</a>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to list</a>
    </div>
</div>
</body>
</html>
