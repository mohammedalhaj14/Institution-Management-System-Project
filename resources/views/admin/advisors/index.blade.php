<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=A, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Admin | Advisors</title>
</head>

<body>
    @extends('layout.layout')

    @section('content')
        <div class="container mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-primary">Advisors</h1>
                <a href="{{ route('admin.advisors.create') }}" class="btn btn-dark">
                    <i class="bi bi-plus-circle"></i> Add New Advisor
                </a>
            </div>

            <table class="table table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Advisor ID</th>
                        <th scope="col">Advisor Name</th>
                        <th scope="col">Service ID</th>
                        <th scope="col">Advisor Major</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($advisors as $advisor)
                        <tr>
                            <td>{{ $advisor->academicAdvisorID }}</td>
                            <td>{{ $advisor->advisorName }}</td>
                            <td>{{ $advisor->serviceID }}</td>
                            <td>{{ $advisor->advisorMajor }}</td>
                            <td class="text-center">
                                <form action="{{ route('advisors.destroy', $advisor->academicAdvisorID) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this advisor?')">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">No advisors found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    @endsection


</body>

</html>
