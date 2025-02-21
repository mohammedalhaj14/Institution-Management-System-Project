<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/register.css">
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <div class="register-container">
            <h2>Register</h2>
            @if (session('error'))
                <div style="color: red">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('register.submit') }}" method="POST">
                @csrf <!-- Include CSRF protection -->

                <div class="input-group">
                    <label for="fName">First Name</label>
                    <input type="text" id="fName" name="fName" value="{{ old('fName') }}">
                    @error('fName')
                        <div style="color: red" class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="lName">Last Name</label>
                    <input type="text" id="lName" name="lName" value="{{ old('lName') }}">
                    @error('lName')
                        <div style="color: red" class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div style="color: red" class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <div style="color: red" class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}">
                    @error('username')
                        <div style="color: red" class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    @error('password')
                        <div style="color: red" class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="genderID">
                        <option value="" disabled {{ old('genderID') ? '' : 'selected' }}>Select Gender</option>
                        <option value="male" {{ old('genderID') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('genderID') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('genderID')
                        <div style="color: red" class="error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-submit">Register</button>
            </form>
            <div class="login-text">
                {{-- Already have an account? <a href="{{ route('login') }}">Login here</a> --}}
            </div>
        </div>
    @endsection
</body>

</html>
