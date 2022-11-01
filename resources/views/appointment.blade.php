<x-application>
    <!-- Therapists Per Category -->
    <div data-draggable="true" style="position: relative;">
        <!---->
        <!---->
        <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
            <section class="mb-5">
                <!-- Background image -->
                <div class="p-5 text-center bg-image" style="background-image: url('/storage/images/toa-heftiba-6fTc40ncUd4-unsplash.jpg'); height: 300px; background-size: cover; background-position: 50% 50%; background-color: rgba(0, 0, 0, 0);" aria-controls="#picker-editor"></div>
                <!-- Background image -->
                <div class="container">
                    <div class="card mx-4 mx-md-5 text-center shadow-5-strong" style=" margin-top: -150px; background: hsla(0, 0%, 100%, 0.3); backdrop-filter: blur(30px); ">
                        <div class="card-header">
                            <h2 class="text-light">Book Appointment</h2>
                        </div>

                        <div class="card-body px-4 py-5 px-md-5">
                            <div class="container  my-4">
                                <div class="row justify-content-evenly">
                                    <div class="col-10 ">
                                        <form class="row g-3" method="post" action="{{ route('appointment.store') }}">
                                            @csrf
                                            <!-- send therapist user id and therapist id to appointment.store -->
                                            <input hidden type="text" name="therapist_user_id" value="{{ $therapist_user_id }}">
                                            <input hidden type="text" name="therapist_id" value="{{ $therapist_id }}">



                                            <div class="col-md-6">
                                                <label for="appointment_date">Date</label>
                                                <input type="date" class="form-control bg-transparent text-dark" name="date" id="appointment_date">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="appointment_time">Time</label>
                                                <input type="time" class="form-control bg-transparent text-dark" name="time" id="appointment_time">
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Payment Method</option>
                                                    <option value="1">Mpesa</option>
                                                    <option value="2">Credit Card</option>
                                                    <option value="3">Paypal</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Book Appointment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </section>
        <!---->
    </div>
</x-application>