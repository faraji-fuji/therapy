<x-admin>
    <!-- add service form  -->
    <h5 class="text-center text-primary mb-2">ADD SERVICE</h5>
    <hr>

    <div class="card mx-4 mx-md-5 mt-5">
        <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <form enctype="multipart/form-data" action="{{ route('service.store') }}" method="POST">
                        @csrf
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input name="name" type="text" id="form4Example1" class="form-control" required>
                            <label class="form-label" for="form4Example1" style="margin-left: 0px;">Service Name</label>

                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 42.4px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>

                        <x-input-error :messages="$errors->get('name')" class="mt-2"></x-input-error>

                        <!-- Brief Description input -->
                        <div class="form-outline mb-4">
                            <textarea name="brief_description" class="form-control" id="form4Example2" rows="2" required></textarea>
                            <label class="form-label" for="form4Example2" style="margin-left: 0px;">Brief Description</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 60px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"></x-input-error>

                        <!-- Full Description input -->
                        <div class="form-outline mb-4">
                            <textarea name="full_description" class="form-control" id="form4Example3" rows="4" required></textarea>
                            <label class="form-label" for="form4Example2" style="margin-left: 0px;">Full Description</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 60px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"></x-input-error>


                        <!-- Image Input -->
                        <label for="inputGroupFile02" class="form-label my-2 visually-hidden">Image</label>
                        <div class="input-group mb-4">
                            <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                            <input type="file" name="image_path" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload Image</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="add" class="btn btn-primary btn-block" aria-controls="#picker-editor">ADD</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-admin>