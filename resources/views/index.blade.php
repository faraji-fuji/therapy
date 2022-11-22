<x-application>
    <!-- Section: Call to action -->
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
    <!-- Section: Call to action -->

    <!-- Section: Our Services -->
    <section class="mb-2 text-center p-5">
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
                    <div class="card-footer">
                        <form action="{{ route('therapist.index') }}" method="GET">
                            <input hidden name="service_id" value="{{ $service->id }}">
                            <button type="submit" class="btn btn-link">Find Therapist</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Section: Our Services -->

    <!-- Section: Testimonials -->
    <section class="mb-10 text-center">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8">
                <h3 class="fw-bold mb-5">Testimonials</h3>
            </div>
        </div>
        <div class="row">
            @foreach($testimonials as $testimonial)
            <div class="col-md-4 mb-5 mb-md-0">
                <div class="d-flex justify-content-center mb-4"> <img src="/storage/{{ $testimonial->avatar}}" class="rounded-circle shadow-1-strong" alt="" aria-controls="#picker-editor" draggable="false" width="150" height="150"> </div>
                <h5 class="mb-3">{{ $testimonial->customUsername }}</h5>
                <h6 class="text-primary mb-3">{{ $testimonial->service->name }}</h6>
                <p class="px-xl-3"> <i class="fas fa-quote-left pe-2"></i><span>{{ $testimonial->testimonial}}</span> </p>
                <!-- <ul class="list-unstyled d-flex justify-content-center mb-0">
                    <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                    <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                    <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                    <li> <i class="fas fa-star fa-sm text-warning"></i> </li>
                    <li> <i class="fas fa-star-half-alt fa-sm text-warning"></i> </li>
                </ul> -->
            </div>
            @endforeach
        </div>
    </section>
    <!-- Section: Testimonials -->

    <!-- Section: Contact Us -->
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

        <!-- Background image -->
        <div class="p-5 bg-image" style="background-image: url(&quot;https://images.unsplash.com/photo-1493836512294-502baa1986e2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=Mnw5NjI0M3wwfDF8c2VhcmNofDJ8fHRoZXJhcHl8ZW58MHx8fHwxNjYxMjQzNzky&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&quot;); height: 300px; background-size: cover; background-position: 50% 50%;" aria-controls="#picker-editor"></div>

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
                        <form action="{{ route('message.store') }}" method="POST">
                            @csrf
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="name" name="name" class="form-control" required>
                                <label class="form-label" for="name" style="margin-left: 0px;">Name</label>
                            </div>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control" required>
                                <label class="form-label" for="email" style="margin-left: 0px;">Email address</label>
                            </div>
                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                <label class="form-label" for="message" style="margin-left: 0px;">Message</label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Contact Us -->
</x-application>