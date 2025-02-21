<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

<body>
    @extends('layout.layout')
    @extends('layout.layout')

    @section('content')
        <div class="container mt-5">
            <h1 class="mb-4">Create New Blog</h1>

            <!-- Create Blog Form -->
            <form action="{{ route('admin.blogs.store') }}" method="POST">
                @csrf
                <div class="card shadow-sm p-4">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="publishedDate" class="form-label">Published Date</label>
                        <input type="date" class="form-control" id="publishedDate" name="publishedDate"
                            value="{{ old('publishedDate') }}">
                        @error('publishedDate')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="details" class="form-label">Details</label>
                        <textarea class="form-control" id="details" name="details" rows="5">{{ old('details') }}</textarea>
                        @error('details')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark w-100 mt-3">Create Blog</button>
                </div>
            </form>
        </div>
    @endsection

</body>

</html>
