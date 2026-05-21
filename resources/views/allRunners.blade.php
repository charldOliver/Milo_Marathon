<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Runners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/allRunners.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
<div class="container mt-5">
    <div class="container-box">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-success fw-bold">
                Registered Runners
            </h2>
            <a href="/" class="btn btn-success">
                Back
            </a>
        </div>
        <form method="GET" action="/allRunners" class="mb-4">
            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="Search runner..."
                   value="{{ request('search') }}">
        </form>
        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-success">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Category</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Emergency Contact</th>
        <th>Shirt Size</th>
        <th>Action</th>
    </tr>
            </thead>
            <tbody>
                @foreach($runners as $runner)
                <tr>
                    <td>{{ $runner->id }}</td>
                    <td>{{ $runner->full_name }}</td>
                    <td>{{ $runner->age }}</td>
                    <td>{{ $runner->gender }}</td>
                    <td>{{ $runner->marathon_category }}</td>
                    <td>{{ $runner->email }}</td>
                    <td>{{ $runner->phone }}</td>
                    <td>{{ $runner->address }}</td>
                    <td>{{ $runner->emergency_contact }}</td>
                    <td>{{ $runner->shirt_size }}</td>
                    <td>
                        <a href="/registrations/{{ $runner->id }}/edit" 
                           class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>