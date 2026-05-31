<!-- resources/views/registrationForm.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runner Registration</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/registrationForm.css') }}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container">
  <div class="main-container">
        <div class="top-bar">
            <h2>
                <i class="bi bi-person-running runner-icon"></i>
                Milo Marathon
            </h2>
            <a href="{{ route('home') }}" class="back-btn">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
<div class="form-section">
    <h3 class="form-title">
        Runner Registration Form
    </h3>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="/register-runner" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-4">
                <label>Full Name</label>
                <input type="text"
                       name="fullname"
                       class="form-control"
                       placeholder="Enter full name"
                       required>
            </div>
            <div class="col-md-6 mb-4">
                <label>Age</label>
                <input type="number"
                       name="age"
                       class="form-control"
                       placeholder="Enter age"
                       required>
            </div>
            <div class="col-md-6 mb-4">
                <label>Gender</label>
                <select name="gender"
                        class="form-select"
                        required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-6 mb-4">
                <label>Category</label>
                <select name="category"
                        class="form-select"
                        required>
                    <option value="">Select Category</option>
                    <option value="3K">3K</option>
                    <option value="5K">5K</option>
                    <option value="10K">10K</option>
                    <option value="21K">21K</option>

                </select>
            </div>
            <!-- Email -->
            <div class="col-md-6 mb-4">
                <label>Email Address</label>

                <input type="email"
                       name="email"
                       class="form-control"
                       placeholder="Enter email"
                       required>
            </div>
            <!-- Contact Number -->
            <div class="col-md-6 mb-4">
                <label>Contact Number</label>

                <input type="text"
                       name="contact"
                       class="form-control"
                       placeholder="09XXXXXXXXX"
                       required>
            </div>
            <!-- Address -->
            <div class="col-12 mb-4">
                <label>Address</label>

                <textarea name="address"
                          class="form-control"
                          rows="3"
                          placeholder="Enter complete address"
                          required></textarea>
            </div>
            <!-- Emergency Contact -->
            <div class="col-md-6 mb-4">
                <label>Emergency Contact</label>

                <input type="text"
                       name="emergency_contact"
                       class="form-control"
                       placeholder="Emergency contact person"
                       required>
            </div>
            <!-- Shirt Size -->
            <div class="col-md-6 mb-4">
                <label>Shirt Size</label>
                <select name="shirt_size"
                        class="form-select"
                        required>
                    <option value="">Select Size</option>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn-register">

            <i class="bi bi-check-circle"></i>
            Register Runner
        </button>
    </form>
</div>

    </div>
</body>
</html>