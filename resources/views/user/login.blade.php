<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <div class="login-container">
            <h2>Login</h2>
            <form action="/login" method="POST">
                @csrf
                @if (session('success'))
                    <div style="color: green">
                        <span>
                            {{ session('success') }}
                        </span>
                    </div>
                @endif
                <div class="input-group">
                    @error('username')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}">
                </div>
                <div class="input-group">
                    @error('password')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <button type="submit" class="btn-submit">Login</button>
            </form>
            <div class="login-text">
                Don't have an account? <a href="{{ route('user.register') }}">Sign up here</a>
            </div>
        </div>
        <script>
            document.getElementById('signup-btn').addEventListener('click', function() {
                window.location.href = 'register.html';
            });
        </script>
    </body>

    </html>
@endsection
