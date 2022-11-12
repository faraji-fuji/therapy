<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />

    <!-- Google Fonts -->
    <!-- Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

    <!-- Scripts -->
    @vite(['resources/css/mdb.min.css', 'resources/js/mdb.min.js'])

    <!-- Custom styles -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
    <title>Teletherapy</title>
</head>

<body class="m-0 p-0">
    <section class=" pt-0">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm gradient-custom">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <div class="d-flex">

                    <!-- Toggle button -->
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Navbar brand -->
                    <a class="navbar-brand ms-3" href="{{ route('index') }}">
                        <i class="fas fa-laptop-medical text-primary" aria-controls="#picker-editor"></i>
                    </a>
                </div>
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 ms-2 ps-1 ms-lg-0 ps-lg-0 mb-lg-0">
                        <li class="nav-item"> <a class="nav-link btn-link" href="{{ route('index') }}" aria-controls="#picker-editor">Teletherapy</a> </li>
                        <li class="nav-item"> <a class="nav-link btn-link" href="{{ route('application.create') }}" aria-controls="#picker-editor">Work</a> </li>
                        <li class="nav-item"> <a class="nav-link btn-link" href="index.php#our-services" aria-controls="#picker-editor">Services</a> </li>
                        <li class="nav-item"> <a class="nav-link btn-link" href="index.php#contactUs" aria-controls="#picker-editor">Contact Us</a> </li>
                        @auth
                        <li class="nav-item"> <a class="nav-link btn-link" href="{{ route('profile') }}" aria-controls="#picker-editor">My Profile</a> </li>

                        @if(Auth::user()->is_admin)
                        <li class="nav-item"> <a class="nav-link btn-link" href="{{ route('admin') }}" aria-controls="#picker-editor">Dashboard</a> </li>

                        @endif
                        @endauth
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Display links if user is guest -->
                    @guest
                    <a href="{{ route('login') }}"><button type="button" class="btn btn-link px-3 mb-1 me-2 " aria-controls="#picker-editor">Login</button></a>
                    <a href="{{ route('register') }}"><button type="button" class="btn btn-primary mb-1 me-lg-3 " aria-controls="#picker-editor">Sign up</button></a>
                    @endguest

                    <!-- Display if user is authenticated -->
                    @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link rounded mb-1 me-lg-3 " aria-controls="#picker-editor">Logout</button>
                    </form>
                    @endauth
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </section>
    <main>
        {{ $slot }}
    </main>

    <!-- Section: Footer -->
    <div class="container-fluid bg-transparent">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2022 Teletherapy</p>
        </footer>
    </div>
    <!-- Section: Footer -->

    <!-- google calendar api custom script -->
    <!-- @vite(['resources/js/googleCalendarApi.js']) -->

    <!-- google calendar api scripts -->
    <!-- <script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script> -->
    <!-- <script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script> -->
</body>

</html>