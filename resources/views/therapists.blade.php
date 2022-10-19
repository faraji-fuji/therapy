<x-application>
    <!-- Therapists Per Category -->
    <div data-draggable="true" style="position: relative;">
        <!---->
        <!---->
        <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
            <section class="mb-5">
                <!-- Background image -->
                <div class="p-5 text-center bg-image" style="background-image: url(/storage/{{ $service->image }} ); height: 400px; background-size: cover; background-position: 50% 50%; background-color: rgba(0, 0, 0, 0);" aria-controls="#picker-editor"></div>
                <!-- Background image -->
                <div class="container">
                    <div class="card mx-4 mx-md-5 text-center shadow-5-strong" style=" margin-top: -170px; background: hsla(0, 0%, 100%, 0.5); backdrop-filter: blur(30px); ">
                        <div class="card-header">
                            <h2 class="display-5 ls-tight mb-1 text-uppercase">
                                <span>{{ $service->name}}</span>
                            </h2>
                        </div>
                        <div class="card-body px-4 py-5 px-md-5">
                            @foreach ($therapists as $therapist)
                            <!-- cards -->
                            <div class="card mb-3 mx-2 hover-shadow" style="border-radius: .5rem;">
                                <div class="row g-0">
                                    <div class="col-md-4 gradient-custom-therapist-card text-center text-dark" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                        <img src="images\resizedprofi.jpg" alt="Avatar" class="img-fluid my-5 rounded-circle" style="width: 180px;" />
                                        <h5>{{ $therapist->user->name}}</h5>
                                    </div>

                                    <div class="col-md-8">

                                        <div class="card-body p-4">
                                            <h6>Information</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Email</h6>
                                                    <p class="text-muted">{{ $therapist->user->email}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Phone</h6>
                                                    <p class="text-muted">123 456 789</p>
                                                </div>
                                            </div>

                                            <form action="{{ route('appointment.create') }}" method="get">

                                                <button type="submit" class="btn btn-primary btn-rounded  btn-sm"><i class="far fa-clock me-2"></i>Book now</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </section>
        </section>
        <!---->
    </div>
</x-application>