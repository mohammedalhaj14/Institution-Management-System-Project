<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoring Services</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/tutoringServices.css">
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <!-- Tutoring Services Content -->
        <section class="container">
            <h1 class="page-title">Tutoring Services</h1>
            <p class="page-description">
                We provide high-quality tutoring services to help students excel academically. Our professional tutors are
                here to support your learning journey, offering personalized tutoring in a variety of subjects.
            </p>

            <!-- Tutoring Information Section -->
            <div class="tutoring-info">
                <h2>Why Choose Our Tutoring Services?</h2>
                <ul>
                    <li>Experienced tutors across various subjects.</li>
                    <li>Flexible scheduling to suit your availability.</li>
                    <li>Online and in-person sessions available.</li>
                    <li>Custom learning plans tailored to your needs.</li>
                    <li>One-on-one or group sessions.</li>
                </ul>
            </div>
            @if (session('success'))
                <div style="color: green;">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Tutoring Request Form -->
            <div class="tutoring-form">
                <h2>Request Tutoring Services</h2>
                <form action="{{ route('tutoringRequests.store') }}" method="POST">
                    @csrf
                    <div class="form-control">
                        @error('name')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-control">
                        @error('email')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-control">
                        @error('subject')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject" required>
                            <option value="math">Mathematics</option>
                            <option value="science">Science</option>
                            <option value="english">English</option>
                            <option value="history">History</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-control">
                        @error('message')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <label for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"></textarea>
                    </div>
                    <button type="submit">Submit Request</button>
                </form>
            </div>
        </section>
    @endsection
