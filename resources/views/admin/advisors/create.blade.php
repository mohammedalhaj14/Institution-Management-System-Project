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
    <title>Admin | Create Advisor</title>
</head>

<body>
    @extends('layout.layout')

    @section('content')
        <div class="container mt-5">
            <h1 class="text-center text-primary mb-4">Create New Advisor</h1>
            <div class="card shadow p-4">
                <form action="{{ route('admin.advisors.store') }}" method="POST">
                    @csrf

                    <!-- Advisor Name -->
                    <div class="mb-3">
                        <label for="advisorName" class="form-label fw-bold">Advisor Name</label>
                        <input type="text" class="form-control @error('advisorName') is-invalid @enderror"
                            id="advisorName" name="advisorName" value="{{ old('advisorName') }}"
                            placeholder="Enter advisor's name">
                        @error('advisorName')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Service ID -->
                    <div class="mb-3">
                        <label for="serviceID" class="form-label fw-bold">Service ID</label>
                        <input type="number" class="form-control @error('serviceID') is-invalid @enderror" id="serviceID"
                            name="serviceID" value="{{ old('serviceID') }}" placeholder="Enter service ID">
                        @error('serviceID')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Advisor Major -->
                    <div class="mb-3">
                        <label for="advisorMajor" class="form-label fw-bold">Advisor Major</label>
                        <input type="text" class="form-control @error('advisorMajor') is-invalid @enderror"
                            id="advisorMajor" name="advisorMajor" value="{{ old('advisorMajor') }}"
                            placeholder="Enter advisor's major">
                        @error('advisorMajor')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark px-5">
                            <i class="bi bi-check-circle"></i> Create Advisor
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection

</body>

</html>
