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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

    <!-- Google Fonts -->
    <!-- Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

    <!-- Scripts -->
    @vite(['resources/css/mdb.min.css', 'resources/js/mdb.min.js'])

    <!-- Custom styles -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>

    <title>Teletherapy</title>
</head>

<body>
    <main>
        <div style="position: relative;" data-draggable="true">
            <!---->
            <!---->
            <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
                <section class="">

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
                                    <li class="nav-item"> <a class="nav-link btn-link" href="work.php" aria-controls="#picker-editor">Work</a> </li>
                                    <li class="nav-item"> <a class="nav-link btn-link" href="index.php#our-services" aria-controls="#picker-editor">Services</a> </li>
                                    <li class="nav-item"> <a class="nav-link btn-link" href="index.php#contactUs" aria-controls="#picker-editor">Contact Us</a> </li>
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

                        </div>
                        <!-- Container wrapper -->
                    </nav>
                    <!-- Navbar -->
                </section>
            </section>
            <!---->
        </div>

        <!-- Section: Call to action -->
        <div id="preview" class="preview">
            <div style="display: none;"></div>
            <div>
                <div id="preview" class="preview">
                    <div style="display: none;"></div>
                    <div>
                        <div data-draggable="true" style="position: relative;">
                            <!---->
                            <!---->
                            <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
                                <section class="mb-5">
                                    <!-- Background image -->
                                    <div class="p-5 text-center bg-image" style="background-image: url(&quot;https://images.unsplash.com/photo-1573497491208-6b1acb260507?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=Mnw5NjI0M3wwfDF8c2VhcmNofDN8fHRoZXJhcHl8ZW58MHx8fHwxNjYxMjQzNzky&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&quot;); height: 500px; background-size: cover; background-position: 50% 50%; background-color: rgba(0, 0, 0, 0);" aria-controls="#picker-editor"></div>
                                    <!-- Background image -->
                                    <div class="container">
                                        <div class="card mx-4 mx-md-5 text-center shadow-5-strong" style=" margin-top: -170px; background: hsla(0, 0%, 100%, 0.5); backdrop-filter: blur(30px); ">
                                            <div class="card-body px-4 py-5 px-md-5">
                                                <h1 class="display-5 fw-bold ls-tight mb-4">
                                                    <span>Get Connected to Top Therapists</span>
                                                    <br>
                                                    <span class="text-primary">Available Online</span>
                                                </h1>

                                                @guest
                                                <a class="btn  btn-primary btn-lg py-3 px-5 mb-2 mb-md-0 me-md-2" href="{{ route('register') }}" role="button" aria-controls="#picker-editor">Sign Up to Get started</a>
                                                @endguest

                                                <a class="btn  btn-link btn-lg py-3 px-5 mb-2 mb-md-0" data-ripple-color="primary" href="#our-services" role="button" aria-controls="#picker-editor">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </section>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section: Call to action -->

        <!-- Section: Our Services -->
        <div style="position: relative;" data-draggable="true" draggable="false" class="" id="our-services">
            <!---->
            <!---->
            <section draggable="false" class="container pt-5" data-v-271253ee="">
                <section class="mb-2 text-center">
                    <h2 class="fw-bold mb-7 text-center">Our Services<br></h2>

                    <div class="row gx-lg-5">

                        @foreach ($services as $service)
                        <div class="col-lg-4 col-md-12 mb-5 mt-5 mb-lg-0">
                            <div class="card shadow-2-strong">
                                <div class="bg-image hover-overlay ripple shadow-4-strong rounded mx-3" data-mdb-ripple-color="light" style="margin-top: -15px">
                                    <img src="/storage/{{ $service->image}}" class="img-fluid" alt="" aria-controls="#picker-editor" draggable="false">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $service->name }}<br></h5>
                                    <p class="card-text">{{ $service->brief_description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </section>
            </section>
            <!---->
        </div>
        <!-- Section: Our Services -->

        <!-- Section: Testimonials -->
        <div style="position: relative;" data-draggable="true" class="" draggable="false">
            <!---->
            <!---->
            <section draggable="false" class="container pt-5" data-v-271253ee="">
                <section class="mb-10 text-center">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10 col-xl-8">
                            <h2 class="fw-bold mb-5">Testimonials</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-5 mb-md-0">
                            <div class="d-flex justify-content-center mb-4"> <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle shadow-1-strong" alt="" aria-controls="#picker-editor" draggable="false" width="150" height="150"> </div>
                            <h5 class="mb-3">Maria Smantha</h5>
                            <h6 class="text-primary mb-3">Web Developer</h6>
                            <p class="px-xl-3"> <i class="fas fa-quote-left pe-2"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</span> </p>
                            <ul class="list-unstyled d-flex justify-content-center mb-0">
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="fas fa-star-half-alt fa-sm text-warning"></i> </li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-5 mb-md-0">
                            <div class="d-flex justify-content-center mb-4"> <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" class="rounded-circle shadow-1-strong" alt="" aria-controls="#picker-editor" draggable="false" width="150" height="150"> </div>
                            <h5 class="mb-3">Lisa Cudrow</h5>
                            <h6 class="text-primary mb-3">Graphic Designer</h6>
                            <p class="px-xl-3"> <i class="fas fa-quote-left pe-2"></i><span>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.</span> </p>
                            <ul class="list-unstyled d-flex justify-content-center mb-0">
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-0">
                            <div class="d-flex justify-content-center mb-4"> <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle shadow-1-strong" alt="" aria-controls="#picker-editor" draggable="false" width="150" height="150"> </div>
                            <h5 class="mb-3">John Smith</h5>
                            <h6 class="text-primary mb-3">Marketing Specialist</h6>
                            <p class="px-xl-3"> <i class="fas fa-quote-left pe-2"></i><span>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</span> </p>
                            <ul class="list-unstyled d-flex justify-content-center mb-0">
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                                <li> <i class="far fa-star fa-sm text-warning"></i> </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </section>
            <!---->
        </div>
        <!-- Section: Testimonials -->

        <!-- Section: Contact Us -->
        <div style="position: relative;" data-draggable="true" class="" draggable="false">
            <!---->
            <!---->
            <section draggable="false" class="overflow-hidden pt-5" data-v-271253ee="">
                <section id="contactUs" class="mb-10 text-center">
                    <style>
                        hr.divider-vertical {
                            position: absolute;
                            right: 0;
                            top: 0;
                            width: 1px;
                            background-image: linear-gradient(180deg, transparent, hsl(0, 0%, 40%), transparent);
                            background-color: transparent;
                            height: 100%;
                        }
                    </style>

                    <!-- heading -->

                    <!-- Background image -->
                    <div class="p-5 bg-image" style="background-image: url(&quot;https://images.unsplash.com/photo-1493836512294-502baa1986e2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=Mnw5NjI0M3wwfDF8c2VhcmNofDJ8fHRoZXJhcHl8ZW58MHx8fHwxNjYxMjQzNzky&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&quot;); height: 300px; background-size: cover; background-position: 50% 50%;" aria-controls="#picker-editor"></div> <!-- Background image -->
                    <div class="card mx-4 mx-md-5 shadow-5-strong" style=" margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px); ">

                        <div class="card-body py-5 px-md-5">
                            <h2 class="mb-5">Need Help? Leave us a Message.</h2>

                            <div class="row mb-5">
                                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 position-relative"> <i class="fas fa-globe-americas fa-3x text-primary mb-4" aria-controls="#picker-editor"></i>
                                    <h6 class="fw-normal mb-0">Kenya</h6>
                                    <hr class="divider-vertical d-none d-lg-block">
                                </div>
                                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 position-relative"> <i class="fas fa-map-marker-alt fa-3x text-primary mb-4" aria-controls="#picker-editor"></i>
                                    <h6 class="fw-normal mb-0">Nairobi</h6>
                                    <hr class="divider-vertical d-none d-lg-block">
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative"> <i class="fas fa-phone fa-3x text-primary mb-4" aria-controls="#picker-editor"></i>
                                    <h6 class="fw-normal mb-0">+2547 000 000</h6>
                                    <hr class="divider-vertical d-none d-lg-block">
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative"> <i class="fas fa-envelope fa-3x text-primary mb-4" aria-controls="#picker-editor"></i>
                                    <h6 class="fw-normal mb-0">support@teletherapy.com</h6>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <form>
                                        <!-- Name input -->
                                        <div class="form-outline mb-4"> <input type="text" id="form4Example1" class="form-control"> <label class="form-label" for="form4Example1" style="margin-left: 0px;">Name</label>
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 42.4px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div> <!-- Email input -->
                                        <div class="form-outline mb-4"> <input type="email" id="form4Example2" class="form-control"> <label class="form-label" for="form4Example2" style="margin-left: 0px;">Email address</label>
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 88.8px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div> <!-- Message input -->
                                        <div class="form-outline mb-4"> <textarea class="form-control" id="form4Example3" rows="4"></textarea> <label class="form-label" for="form4Example3" style="margin-left: 0px;">Message</label>
                                            <div class="form-notch">
                                                <div class="form-notch-leading" style="width: 9px;"></div>
                                                <div class="form-notch-middle" style="width: 60px;"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div> <!-- Checkbox -->
                                        <div class="form-check d-flex justify-content-center mb-4"> <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked=""> <label class="form-check-label" for="form4Example4">Send me a copy of this message</label> </div> <!-- Submit button --> <button type="submit" class="btn       btn-primary btn-block" aria-controls="#picker-editor">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <!---->
        </div>
        <!-- Section: Contact Us -->
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
</body>

</html>