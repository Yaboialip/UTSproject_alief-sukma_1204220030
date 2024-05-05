<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
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
route('food.index') }}" class="nav-link">Menu List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-outlinelight my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My
                    Profile</a>
            </div>
        </div>
    </nav>
    <div class="container-sm mt-5">
        <form action="{{ route('food.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert dismissible fade show">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                    @endif
                    <div class="mb-3 text-center">
                        <h4>Create Menu Item</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="formlabel">Item Name</label>
                            <input class="form-control" type="text" name="firstName" id="firstName" value="" placeholder="Enter Item Name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Itemdescription" class="form-label">Item description</label>
                            <input class="form-control" type="text" name="Itemdescription" id="Itemdescription" value="" placeholder="Enter Item description" style="height: 200%;">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Price" class="form-label">Price ($)</label>
                            <input class="form-control" type="text" name="Price" id="Price" value="" placeholder="Enter Price">
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                            <label for="kategori" class="form-label">Categories</label>
                            <select name="kategori" id="kategori" class="form-select">
                                @foreach ($positions as $kategori)
                                <option value="{{ $kategori->id }}" {{ old('kategori') == $kategori->id ? 'selected' : '' }}>{{ $kategori->code.' - '. $kategori->name }}</option>
                                @endforeach
                            </select>
                            @error('kategori')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('food.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>

</html>