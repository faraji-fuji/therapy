<x-application>
    <!-- Section: Work With Us -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="background-image: url('assets/images/lgbtqcropped.jpg'); height: 300px;"></div>
        <!-- Background image -->
        <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
            <div class="card-body py-5 px-md-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">WORK WITH US</h2>

                        <form enctype="multipart/form-data" method="POST" action="{{ route('application.store') }}">
                            @csrf
                            <!-- ID Number -->
                            <div class="form-outline mb-4">
                                <input type="text" name="nationalId" id="validationDefault03" placeholder="" class="form-control" required />
                                <label class="form-label" for="validationDefault03">National ID Number</label>
                            </div>

                            <!-- proficiency -->
                            <div class="mb-4">
                                <label for="inputState3" class="form-label">What area are proficient in?</label>
                                <select id="inputState3" class="form-select" name="proficiency">
                                    <option selected>--SELECT--</option>
                                    <option>DEPRESSION</option>
                                    <option>ANXIETY</option>
                                    <option>LGBTQ+</option>
                                    <option>GRIEF</option>
                                    <option>MARRIAGE AND FAMILY</option>
                                    <option>WORK</option>
                                </select>
                            </div>

                            <!-- Motivation -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" name="motivation" id="form3Example3" aria-label="With textarea" placeholder="Not more than 250 words"></textarea>
                                <label class="form-label" for="form3Example3">Motivation</label>
                            </div>

                            <!-- CV Input -->
                            <label for="inputGroupFile01" class="form-label my-2 visually-hidden">Profile Photo</label>
                            <div class="input-group mb-4">
                                <input type="file" name="resume" class="form-control" id="inputGroupFile01">
                                <label class="input-group-text" for="inputGroupFile01">Upload CV</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
                                SUBMIT APPLICATION
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Work With Us -->
</x-application>