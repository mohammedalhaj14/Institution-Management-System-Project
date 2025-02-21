<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <div class="container mt-5">
            <h1 class="mb-4">Edit Blog</h1>
            <form action="{{ route('admin.blogs.update', $blog->blogID) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control"
                        value="{{ old('title', $blog->title) }}">
                    @error('title')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="publishedDate" class="form-label">Published Date</label>
                    <input type="date" id="publishedDate" name="publishedDate" class="form-control"
                        value="{{ old('publishedDate', $blog->publishedDate) }}">
                    @error('publishedDate')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="details" class="form-label">Details</label>
                    <textarea id="details" name="details" class="form-control" rows="5">{{ old('details', $blog->details) }}</textarea>
                    @error('details')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Update Blog</button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </body>

    </html>
@endsection
