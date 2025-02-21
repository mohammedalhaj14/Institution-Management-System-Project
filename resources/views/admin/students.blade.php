<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Admin | Students</title>
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <h1>Registered Students</h1>
        <table class="table table-striped">
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Username</th>
                <th>Delete</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td> {{ $user->userID }} </td>
                    <td> {{ $user->fName }} </td>
                    <td> {{ $user->lName }} </td>
                    <td> {{ $user->phone }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->username }} </td>
                    <td>
                        <form style="display: inline" action="{{ route('users.destroy', $user->userID) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        @if (session('success'))
            <span style="color: green">{{ session('success') }}</span>
        @endif
    @endsection
</body>

</html>
