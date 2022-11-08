<x-application>
    <!-- Section: Appointment -->
    <section class="mb-5">
        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="background-image: url('/storage/images/toa-heftiba-6fTc40ncUd4-unsplash.jpg'); height: 300px; background-size: cover; background-position: 50% 50%; background-color: rgba(0, 0, 0, 0);" aria-controls="#picker-editor"></div>

        <div class="container">
            <div class="card mx-4 mx-md-5 text-center shadow-5-strong" style=" margin-top: -150px; background: hsla(0, 0%, 100%, 0.3); backdrop-filter: blur(30px); ">
                <!-- Heading -->
                <div class="card-header">
                    <h2 class="text-light">Book Appointment</h2>
                </div>
                <div class="card-body px-4 py-5 px-md-5">
                    <div class="container  my-4">
                        <div class="row justify-content-evenly">
                            <div class="col-10 ">
                                <!-- Book appointment form: submitted at payment controller store method -->
                                <form class="row g-3" method="post" action="{{ route('payment.store') }}">
                                    @csrf
                                    <!-- send therapist user id and therapist id to appointment.store -->
                                    <input hidden type="text" name="therapist_user_id" value="{{ $therapist_user_id }}">
                                    <input hidden type="text" name="therapist_id" value="{{ $therapist_id }}">
                                    <!-- Date Input -->
                                    <div class="col-md-6">
                                        <label for="appointment_date">Date</label>
                                        <input type="date" class="form-control bg-transparent text-dark" name="date" id="appointment_date" required>
                                    </div>
                                    <!-- Time Input -->
                                    <div class="col-md-6">
                                        <label for="appointment_time">Time</label>
                                        <input type="time" class="form-control bg-transparent text-dark" name="time" id="appointment_time" required>
                                    </div>
                                    <!-- Phone Number Input -->
                                    <div class="col-12">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control bg-transparent text-dark" value="254" maxlength="12" required>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Book Appointment</button>
                                    </div>
                                </form>

                                <!-- success message -->
                                @if (session('statusFail'))
                                <div class="alert alert-danger">
                                    {{ session('statusFail')}}
                                </div>
                                @endif

                                <!-- fail message -->
                                @if (session('statusSuccess'))
                                <div class="alert alert-success">
                                    {{ session('statusSuccess')}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</x-application>