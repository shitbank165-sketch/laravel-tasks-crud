<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            @error('title')<div class="text-danger mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="6">{{ old('content') }}</textarea>
            @error('content')<div class="text-danger mt-1">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Save Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
