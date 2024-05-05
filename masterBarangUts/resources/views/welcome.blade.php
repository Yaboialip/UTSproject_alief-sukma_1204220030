<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eskrimo Resto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional CSS specific to the restaurant theme */
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        h1 {
            color: #388e3c; /* Green color */
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .img-thumbnail {
            max-width: 300px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .btn {
            background-color: #388e3c; /* Green color */
            border-color: #388e3c; /* Green color */
            font-size: 1.2rem;
            padding: 10px 20px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn:hover {
            background-color: #2e7d32; /* Darker green color on hover */
            border-color: #2e7d32; /* Darker green color on hover */
        }
    </style>
</head>

<body>
    <div class="container text-center my-5">
        <h1>Welcome to Eskrimo Resto</h1>
        {{-- Example of referencing an image within a blade file using the Vite approach --}}
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/e.jpg') }}" alt="image">
        <div class="col-md-6 offset-md-3">
            <p class="lead">Experience the finest cuisine in a cozy atmosphere.</p>
            <p>Our menu offers a wide selection of dishes made with fresh, locally sourced ingredients.</p>
            <a class="btn btn-dark" href="{{ route('home') }}">Explore Our Menu</a>
        </div>
    </div>
</body>

</html>
