<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Blog Details</h1>
        <div class="card">
            <div class="card-header">
                <h2>{{ $blog->title }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Published Date:</strong> {{ $blog->publishedDate }}</p>
                <p><strong>Details:</strong></p>
                <p>{{ $blog->details }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary">Back to Blogs</a>
            </div>
        </div>
    </div>
</body>

</html>
