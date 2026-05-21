<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Runner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/registrationForm.css') }}">
</head>
<body>
<div class="container">
  <div class="main-container">
    <div class="top-bar">
        <h2><i class="bi bi-person-running runner-icon"></i> Milo Marathon</h2>
        <a href="/allRunners" class="back-btn">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>
    <div class="form-section">
        <h3 class="form-title">Edit Runner Registration</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="/registrations/{{ $runner->id }}/update" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label>Full Name</label>
                    <input type="text" name="fullname" class="form-control"
                           value="{{ $runner->full_name }}" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label>Age</label>
                    <input type="number" name="age" class="form-control"
                           value="{{ $runner->age }}" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label>Gender</label>
                    <select name="gender" class="form-select" required>
                        <option value="Male"   {{ $runner->gender == 'Male'   ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $runner->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <div class="col-md-6 mb-4">
                    <label>Category</label>
                    <select name="category" class="form-select" required>
                        <option value="3K"  {{ $runner->marathon_category == '3K'  ? 'selected' : '' }}>3K</option>
                        <option value="5K"  {{ $runner->marathon_category == '5K'  ? 'selected' : '' }}>5K</option>
                        <option value="10K" {{ $runner->marathon_category == '10K' ? 'selected' : '' }}>10K</option>
                        <option value="21K" {{ $runner->marathon_category == '21K' ? 'selected' : '' }}>21K</option>
                    </select>
                </div>
                <div class="col-md-6 mb-4">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ $runner->email }}" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label>Contact Number</label>
                    <input type="text" name="contact" class="form-control"
                           value="{{ $runner->phone }}" required>
                </div>
                <div class="col-12 mb-4">
                    <label>Address</label>
                    <textarea name="address" class="form-control" rows="3"
                              required>{{ $runner->address }}</textarea>
                </div>
                <div class="col-md-6 mb-4">
                    <label>Emergency Contact</label>
                    <input type="text" name="emergency_contact" class="form-control"
                           value="{{ $runner->emergency_contact }}" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label>Shirt Size</label>
                    <select name="shirt_size" class="form-select" required>
                        <option value="XS" {{ $runner->shirt_size == 'XS' ? 'selected' : '' }}>XS</option>
                        <option value="S"  {{ $runner->shirt_size == 'S'  ? 'selected' : '' }}>S</option>
                        <option value="M"  {{ $runner->shirt_size == 'M'  ? 'selected' : '' }}>M</option>
                        <option value="L"  {{ $runner->shirt_size == 'L'  ? 'selected' : '' }}>L</option>
                        <option value="XL" {{ $runner->shirt_size == 'XL' ? 'selected' : '' }}>XL</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn-register">
                <i class="bi bi-check-circle"></i> Update Runner
            </button>
        </form>
    </div>
  </div>
</div>
</body>
</html>