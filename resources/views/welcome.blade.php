<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/CSS/style.css">
    <title>innovative Institution | Registration & Login</title>
</head>

<body>

    @extends('layout.layout')
    @section('content')
        @auth
    <div class="auth-message user">
        <h1>Welcome</h1>
    </div>
@endauth

@guest
    <div class="auth-message guest">
        <h1>Welcome Guest </h1>
    </div>
@endguest

<!-- Welcome Section -->
<section class="welcome-section">
    <h1>Welcome to Innovate</h1>
    <p>Your one-stop solution for amazing services and ideas.</p>
    <a href="/services" class="services-link">Explore Our Services</a>
</section>

    @endsection

</body>

</html>
