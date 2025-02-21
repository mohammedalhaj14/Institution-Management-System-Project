<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('CSS/contact.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <div class="container">
            <div class="contact-form">
                <h1>REACH US</h1>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('admin.messages') }}" method="POST">
                    @csrf <!-- Include CSRF protection -->
                    <div class="form-control">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4">{{ old('message') }}</textarea>
                        @error('message')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" id="submit-btn">Send Message</button>
                </form>

            </div>
        </div>
        <script src="JS/contact.js"></script>
        <script src="JS/main.js"></script>
    </body>

    </html>
@endsection
