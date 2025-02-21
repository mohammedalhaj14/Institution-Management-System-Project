<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Services</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/careerServices.css">
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <!-- Career Services Content -->
        <section class="container">
            <h1 class="page-title">Career Services</h1>
            <p class="page-description">
                Our Career Services are designed to guide you through every step of your career journey. Whether you need
                help with your resume, interview skills, or career planning, our expert advisors are here to support you.
            </p>

            <!-- Career Services Overview -->
            <div class="career-info">
                <h2>Our Career Services Include:</h2>
                <ul>
                    <li>Career counseling to help you identify your strengths and career goals.</li>
                    <li>Resume and cover letter review to enhance your job applications.</li>
                    <li>Mock interviews to prepare you for job opportunities.</li>
                    <li>Job search strategies and networking tips.</li>
                    <li>Workshops and webinars on industry trends and professional development.</li>
                </ul>
            </div>

            <!-- Request Career Services Form -->
            @if (session('success'))
                <div style="color: green;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="career-form">
                <h2>Request Career Services</h2>
                <form action="{{ route('careerRequests.store') }}" method="POST">
                    @csrf
                    <div class="form-control">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-control">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-control">
                        <label for="service">Service Requested</label>
                        <select id="service" name="service" required>
                            <option value="career_counseling">Career Counseling</option>
                            <option value="resume_review">Resume Review</option>
                            <option value="interview_preparation">Interview Preparation</option>
                            <option value="job_search_strategies">Job Search Strategies</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"></textarea>
                    </div>
                    <button type="submit">Submit Request</button>
                </form>
            </div>
        </section>
    @endsection
