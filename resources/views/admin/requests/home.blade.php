<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/adminRequests.css') }}">

    <title>Admin Requests</title>
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <div class="admin-dashboard-menu">
            <h1 class="dashboard-title">Admin Requests</h1>
            <div class="menu-container">
                <a href="/admin/requests/advising" class="menu-card">
                    <div class="card-content">
                        <h2>Advising Requests</h2>
                        <p>Manage and view all advising requests from students.</p>
                    </div>
                </a>
                <a href="/admin/requests/tutoring" class="menu-card">
                    <div class="card-content">
                        <h2>Tutoring Requests</h2>
                        <p>Manage and view all tutoring requests from students.</p>
                    </div>
                </a>
                <a href="/admin/requests/career" class="menu-card">
                    <div class="card-content">
                        <h2>Career Requests</h2>
                        <p>Manage and view all career-related requests from students.</p>
                    </div>
                </a>
            </div>
        </div>
    </body>

    </html>
@endsection
