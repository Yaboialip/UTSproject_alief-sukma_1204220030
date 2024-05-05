<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #388e3c; 
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #f8f9fa;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }

        .btn-outline-light {
            color: #f8f9fa; /* Green color */
            border-color: #388e3c; /* Green color */
        }

        .btn-outline-light:hover {
            background-color: #388e3c; /* Green color */
            color: #f8f9fa;
        }

        .bg-light {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-green">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Eskrimo Resto</a>
            <button type="button" class="navbar-toggler" data-bstoggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{
route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{
route('food.index') }}" class="nav-link active">Menu
                            List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i>My Profile</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Welcome to {{ $pageTitle }}.</h4>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
