<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Teletherapy | Admin Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/mdb.min.css', 'resources/css/admin.css', 'resources/js/mdb.min.js'])



    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">

                    <a href="{{ route('admin.index') }}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i>
                        <span>Main dashboard</span>
                    </a>

                    <a href="{{ route('service.index') }}" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-plus fa-fw me-3"></i>
                        <span>Services</span>
                    </a>

                    <a href="{{ route('application.index') }}" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-plus fa-fw me-3"></i>
                        <span>Applications</span>
                    </a>

                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <div style="position: relative;" style="z-index: 2000;" data-draggable="true">
            <!---->
            <!---->
            <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
                <section class="">

                    <!-- Navbar -->
                    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-light shadow-sm gradient-custom   bg-white fixed-top" style="z-index: 2000;">
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
                                    <li class="nav-item"> <a class="nav-link" href="{{ route('index') }}" aria-controls="#picker-editor">Teletherapy</a> </li>
                                </ul>
                                <!-- Left links -->

                            </div>

                            <!-- Collapsible wrapper -->

                            <!-- Right elements -->
                            <div class="d-flex align-items-center">
                                @guest
                                <a href="{{ route('login') }}">
                                    <button type="button" class="btn btn-link px-3 mb-1 me-2 " aria-controls="#picker-editor">Login</button>
                                </a>

                                <a href="{{ route('register') }}">
                                    <button type="button" class="btn btn-primary mb-1 me-lg-3 " aria-controls="#picker-editor">Sign up</button>
                                </a>
                                @endguest

                                @auth
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link rounded mb-1 me-lg-3 " aria-controls="#picker-editor">Logout</button>
                                </form>
                                @endauth
                            </div>
                            <!-- Right elements -->

                            <!-- Toggle button -->
                            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                            <!-- Right elements -->

                        </div> <!-- Container wrapper -->
                    </nav>
                    <!-- Navbar -->
                </section>

            </section>
            <!---->
        </div>
    </header>
    <!--Main Navigation-->
    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
            {{ $slot }}
        </div>
    </main>
    <!--Main layout-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/admin.js"></script>
</body>

</html>