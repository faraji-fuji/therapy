<x-client>
    <!-- create testimonial form  -->
    <h5 class="text-center text-primary mb-2">WRITE TESTIMONIAL</h5>
    <hr>

    <div class="card mx-4 mx-md-5 mt-5">
        <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <form enctype="multipart/form-data" action="{{ route('testimonial.store') }}" method="POST">
                        @csrf
                        <!-- Service Name, ID -->
                        <div class="mb-4">
                            <label for="service" class="form-label">Service Name</label>
                            <select id="service" class="form-select" name="service_id">
                                <option selected value="">--SELECT--</option>
                                @foreach($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input id="customUsername" name="customUsername" type="text" class="form-control" value="{{ $user->name }}" required>
                            <label for="customUsername" class="form-label" style="margin-left: 0px;">Your Name</label>
                        </div>

                        <!-- Testimonial Input -->
                        <div class="form-outline mb-4">
                            <textarea name="testimonial" class="form-control" id="form4Example3" rows="4"></textarea>
                            <label class="form-label" for="form4Example3" style="margin-left: 0px;">Testimonial</label>
                        </div>

                        <!-- <x-input-error :messages="$errors->get('name')" class="mt-2"></x-input-error> -->
                        @if ($errors->has('form4Example3'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('form4Example3') }}</strong>
                        </span>
                        @endif

                        <!-- Image Input -->
                        <label for="inputGroupFile02" class="form-label my-2 visually-hidden">Image</label>
                        <div class="input-group mb-4">
                            <input type="file" name="avatar" class="form-control" id="avatar">
                            <label class="input-group-text" for="avatar">Profile Picture</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="add" class="btn btn-primary btn-block">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-client>