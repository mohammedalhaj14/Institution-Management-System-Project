<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Offered</title>
    <link rel="stylesheet" href="CSS/services.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
@extends('layout.layout')
@section('content')
 <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to Our Services</h1>
        <p>Explore the wide range of services we offer to support your academic and career success.</p>
    </section>

    <!-- Services Section -->
    <div class="services">
        <div class="card">
            <a href="/academicAdvising"><img src="images/istockphoto-1218975578-612x612.jpg" alt="Academic Advising">
            <h2>Academic Advising</h2></a>
        </div>
        <div class="card">
            <a href="/tutoringServices"><img src="images/images.jfif" alt="Tutoring Services">
            <h2>Tutoring Services</h2></a>
        </div>
        <div class="card">
            <a href="/careerServices"><img src="images/images (1).jfif" alt="Career Services">
            <h2>Career Services</h2></a>
        </div>
    </div>
    <script src="JS/main.js"></script>
</body>
</html>

@endsection
