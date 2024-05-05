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
            color: #f8f9fa;
            /* Green color */
            border-color: #388e3c;
            /* Green color */
        }

        .btn-outline-light:hover {
            background-color: #388e3c;
            /* Green color */
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
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail items</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName" class="form-label">Item Name</label>
                        <h5>{{ $item->firstname }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="itemdescription" class="form-label">Item Description</label>
                        <h5>{{ $item->Itemdescription }}</h5>
                    </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="price" class="form-label">Price ($)</label>
                        <h5>{{ $item->price }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="kategori" class="formlabel">Position</label>
                        <h5>{{ $item->kategori_name }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('food.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle
me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>