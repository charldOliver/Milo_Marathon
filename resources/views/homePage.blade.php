<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milo Marathon Registration</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homePage.css') }}">

</head>
<body>
<div class="container hero-section">
    <div class="main-card">
        <h1 class="logo-title">MILO MARATHON</h1>

        <p class="sub-title">
            Welcome to the Official Milo Marathon Registration System
        </p>

        <div class="d-flex justify-content-center gap-3 flex-wrap">

            <a href="/registrationForm"
               class="btn btn-success btn-custom">
                Registration
            </a>

            <a href="/allRunners"
               class="btn btn-dark btn-custom">
                All Runners
            </a>
        </div>
    </div>
</div>
</body>
</html>