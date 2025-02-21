<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/dashboard.css">
    <title>Document</title>
</head>

<body>
    @extends('layout.layout')
    @section('content')
        @auth
            <div class="auth-message user">
                <h1>Welcome Admin</h1>
            </div>
        @endauth
        <div class="admin-dashboard-menu">
            <h1 class="dashboard-title">Admin Dashboard</h1>
            <div class="menu-container">
                <a href="/admin/students" class="menu-card">
                    <div class="card-content">
                        <h2>Students</h2>
                        <p>Manage and view student details.</p>
                    </div>
                </a>
                <a href="/admin/advisors/index" class="menu-card">
                    <div class="card-content">
                        <h2>Advisors</h2>
                        <p>Manage and view advisor details.</p>
                    </div>
                </a>
                <a href="/admin/messages" class="menu-card">
                    <div class="card-content">
                        <h2>Contacts Messages</h2>
                        <p>Manage and view contacts messages details.</p>
                    </div>
                </a>
                <a href="{{route('admin.blogs.index')}}" class="menu-card">
                    <div class="card-content">
                        <h2>Blogs</h2>
                        <p>Manage and view your blogs details.</p>
                    </div>
                </a>
                <a href="/admin/requests/home" class="menu-card">
                    <div class="card-content">
                        <h2>Requests</h2>
                        <p>Manage and view your Students` requests.</p>
                    </div>
                </a>
            </div>
        </div>
    </body>

    </html>
@endsection
