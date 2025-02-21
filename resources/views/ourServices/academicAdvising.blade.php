<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Advising | Innovative Institution</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/academicAdvising.css">
</head>


<body>
    @extends('layout.layout')
    @section('content')
        <!-- Main Content -->
        <div class="container">
            <h1 class="page-title">Academic Advising</h1>
            <p class="page-description">
                Our Academic Advising services aim to provide students with guidance on course selection, academic
                challenges, and career planning. Our advisors work closely with students to help them navigate their
                educational journey and achieve academic success.
            </p>

            <div class="advising-info">
                <h2>Meet Our Advisors</h2>
                <p>Our team of experienced advisors is here to assist you with your academic goals:</p>
                <ul>
                    <li><strong>Dr. John Smith</strong> - Specializes in AI and Data Science.</li>
                    <li><strong>Dr. Emily Johnson</strong> - Expert in Educational Technology and Curriculum Development.
                    </li>
                    <li><strong>Prof. Michael Lee</strong> - Focuses on Engineering and Applied Sciences.</li>
                </ul>
            </div>
            @if (session('success'))
                <div style="color: green;">
                    {{ session('success') }}
                </div>
            @endif
            <div class="advising-form">
                <h2>Request Academic Advising</h2>
                <form action="{{ route('academicAdvising.store') }}" method="POST" class="contact-form">
                    @csrf
                    <div class="form-control">
                        @error('fullName')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="fullName">
                    </div>
                    <div class="form-control">
                        @error('email')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="form-control">
                        @error('advisor')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <label for="advisor">Preferred Advisor:</label>
                        <select id="advisor" name="advisor">
                            <option value="Dr. John Smith">Dr. John Smith</option>
                            <option value="Dr. Emily Johnson">Dr. Emily Johnson</option>
                            <option value="Prof. Michael Lee">Prof. Michael Lee</option>
                        </select>
                    </div>
                    <div class="form-control">
                        @error('message')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <label for="message">Describe your academic needs:</label>
                        <textarea id="message" name="message" rows="5"></textarea>
                    </div>
                    <button type="submit">Submit Request</button>
                </form>



            </div>
        </div>
    @endsection
</body>
