<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    /* Style the fixed navbar */
    .navbar {
        position: absolute;
        top: 20;
        width: 100%;
        z-index: 1000;
        height: 80px; /* Default height for larger screens */
    }
    
    .navbar.sticky-top {
        position: fixed;
        top: 17;
        background-color: white; /* Customize the background color as needed */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add a box shadow for a subtle effect */
    }

    .navbar-brand .img-fluid {
        max-width: 150px;
    }

    /* Media query for smaller screens */
    @media (max-width: 1000px) {
        .navbar {
            height: auto; /* Adjust the height for smaller screens */
        }
    }
</style>
<body>
<x-navbartop/>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <!-- Add 'sticky-top' class to make the navbar sticky -->
        <div class="container-fluid">
            <a class="navbar-brand" href="/unitedtractors"><img src="{{ asset('assets/images/Logo UT.png') }}" alt="" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/unitedtractors">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/unitedtractors/about-ut">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/unitedtractors/contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown dropleft"> <!-- Add 'dropleft' class here -->
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/unitedtractors/komatsu">Komatsu</a></li>
                            <li><a class="dropdown-item" href="/unitedtractors/bomag">Bomag</a></li>
                            <li><a class="dropdown-item" href="/unitedtractors/scania">Scania</a></li>
                            <li><a class="dropdown-item" href="/unitedtractors/tadano">Tadano</a></li>
                            <li><a class="dropdown-item" href="/unitedtractors/ud-truck">UD Truck</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ... your remaining HTML content ... -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
