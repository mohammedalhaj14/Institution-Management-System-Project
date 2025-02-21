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
    <title>Admin | Advising Requests</title>
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <h1>Advising Requests</h1>
        <table class="table table-striped">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Advisor</th>
                <th>Message</th>
            </tr>
            @foreach ($advisors as $advisor)
                <tr>
                    <td> {{ $advisor->fullName }} </td>
                    <td> {{ $advisor->email }} </td>
                    <td> {{ $advisor->advisor }} </td>
                    <td> {{ $advisor->message }} </td>
                </tr>
            @endforeach
        </table>
    @endsection
</body>

</html>
