<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>
@extends('layout.layout')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Blogs</h1>

        <!-- Create New Blog Button -->
        <div class="mb-3 text-end">
            @auth
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-dark">Create New Blog</a>
            </div>
            @endif
        @endauth
        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Blogs Table -->
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Published Date</th>
                    <th>Details</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog['blogID'] }}</td>
                        <td>{{ $blog['title'] }}</td>
                        <td>{{ $blog['publishedDate'] }}</td>
                        <td>{{ $blog['details'] }}</td>
                        <td>
                            <!-- Action Buttons -->
                            <a href="{{ route('admin.blogs.show', $blog->blogID) }}" class="btn btn-success btn-sm">Show</a>

                            @auth
                                @if (Auth::user()->role === 'admin')
                                    <a href="{{ route('admin.blogs.edit', $blog->blogID) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.blogs.destroy', $blog->blogID) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this blog?')"
                                            class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                @endif
                            @endauth
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
