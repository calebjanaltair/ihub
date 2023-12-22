@extends('layouts.adminpanel')
@section('content')

<div class="row">
    <div class="col-lg-12">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{session('success')}}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{session('error')}}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="ibox">
            <div class="ibox-title d-flex justify-content-between align-items-center">
                <div class="col-sm-4">
                    <h2>Edit Course</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <h4>Course Details</h4>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="ibox-content">
                <form action="{{ route('course-management-update') }}" method="post" id="addRecord" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" src="" name="croppedImage" id="croppedImage">
                    <input type="text" name="id" value="{{$course->id}}" hidden>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="mb-3">
                                <label for="title" class="form-label">
                                    <h4>Course Title</h4>
                                </label>
                                <input type="text" class="form-control" value="{{$course->title}}" onchange="validateInput(this)" name="title" id="title" required />
                                <div class="invalid-feedback">Title is required.</div>

                            </div>
                            <div class="mb-3">
                                <label for="subtitle" class="form-label">
                                    <h4>Course Subtitle</h4>
                                </label>
                                <input type="text" class="form-control" value="{{$course->subtitle}}" onchange="validateInput(this)" name="subtitle" id="subtitle" required>
                                <div class="invalid-feedback">Subtitle is required.</div>

                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">
                                    <h4>Course Category</h4>
                                </label>
                                <div class="row">
                                    <div class="col-10">
                                        <select class="form-select" name="category_id" id="category_id" required aria-label="Default select example">
                                            {!! allCategories() !!}
                                        </select>

                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-primary mx-0" style="margin-left: none;" type="button" data-toggle="modal" data-target="#newCategory">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">
                                    <h4>Course Sponsor Company</h4>
                                </label>
                                <div class="row">
                                    <div class="col-10">
                                        <select class="form-select" name="company_id" id="company_id" required aria-label="Default select example">
                                            {!! allCompanies() !!}
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-primary mx-0" style="margin-left: none;" type="button" data-toggle="modal" data-target="#newCompany">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">
                                    <h4>Course Cover Image</h4>
                                </label>
                                <input type="file" class="form-control" onchange="validateImage(this)" name="image" id="editImage" accept=".png, .svg, .jpg, .jpeg, .gif" required>
                                <div class="invalid-feedback">
                                    Image is required and must not exceed 1 MB.
                                </div>
                            </div>
                        </div>
                        <div class="col my-auto">
                            <img id="Demoimage" src="{{asset('/public/uploads/Courses/' . $course->image)}}" style="width: 550px; height: auto;" alt="Croppable Image">

                            <div id="cropContainer my-auto">
                                <img id="cropImage" src="" style="display: none;" alt="Croppable Image">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="title" class="form-label">
                                <h4>Course Trainer</h4>
                            </label>
                            <input type="text" class="form-control" value="{{$course->trainer}}" name="trainer" id="trainer" required />
                        </div>
                        <div class="col">
                            <label class="form-label">
                                <h4>Course Total Seats</h4>
                            </label>
                            <input type="text" class="form-control" value="{{$course->seats}}" name="seats" id="seats" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">
                                <h4>Course Fee</h4>
                            </label>
                            <input type="text" class="form-control" value="{{$course->fee}}" name="fee" id="fee" required>
                        </div>
                        <div class="col">
                            <label class="form-label">
                                <h4>Course Type</h4>
                            </label>
                            <select class="form-control" name="type" id="type" required>
                                <option disabled>Select Course Type</option>
                                <option value="0">Internship</option>
                                <option value="1" selected>Certificate</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">
                                <h4>Favourites Count</h4>
                            </label>
                            <input type="text" class="form-control" value="{{$course->favourites}}" name="favourites" id="favourites" required>

                        </div>
                        <div class="col">
                            <label class="form-label">
                                <h4>Enrolled Students</h4>
                            </label>
                            <input type="text" class="form-control" value="{{$course->enrolled}}" name="enrolled" id="enrolled" required>

                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">
                                <h4>Course Schedule</h4>
                            </label>
                            <input type="text" class="form-control" value="{{$course->schedule}}" name="schedule" id="schedule" required>

                        </div>
                        <div class="col">
                            <label class="form-label">
                                <h4>Course Rating</h4>
                            </label>
                            <select class="form-select" name="rating" id="rating" required aria-label="Default select example">
                                <option value="5.0">5.0</option>
                                <option value="4.5" selected>4.5</option>
                                <option value="4.0">4.0</option>
                                <option value="3.5">3.5</option>
                                <option value="3.0">3.0</option>
                                <option value="2.5">2.5</option>
                                <option value="2.0">2.0</option>
                                <option value="1.5">1.5</option>
                                <option value="1.0">1.0</option>
                                <option value="0.5">0.5</option>
                            </select>
                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">
                                <h4>Course Curriculum</h4>
                            </label>
                            <input type="file" class="form-control" name="other2" id="other2" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label">
                            <h4>Course Description</h4>
                        </label>
                        <textarea class="form-control summernote" name="description" id="description" cols="30" rows="10">{{$course->description}}</textarea>
                    </div>
                    <button type="button" class="btn btn-primary" id="submitFakeButton" onclick="submitForm()">Save & Next</button>
                    <button type="submit" hidden>submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newCompany" tabindex="-1" role="dialog" aria-labelledby="newCompanyTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Add New Company</h3>
            </div>
            <div class="modal-body">
                <form action="{{ route('company-add') }}" method="post" id="addTicker">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            <h4>Company Name</h4>
                        </label>
                        <input class="form-control" id="name" name="name" required>
                        <label for="exampleInputEmail1" class="form-label">
                            <h4>Company Logo</h4>
                        </label>
                        <input class="form-control" type="file" id="image" name="image" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="closeCompany" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Category Modal -->
<div class="modal fade" id="newCategory" tabindex="-1" role="dialog" aria-labelledby="newCategoryTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Add New Category</h3>
            </div>
            <div class="modal-body">
                <form action="{{ route('category-add') }}" method="post" id="addCat">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            <h4>Category Name</h4>
                        </label>
                        <input class="form-control" id="name" name="name" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="closeCategory" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var cropper;
    $(document).ready(function() {
        $('.summernote').summernote({
            tabsize: 2,
            height: 250,
            toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
<!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./../adminpanel/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="./../adminpanel/js/plugins/slimscroll/jquery.slimscroll.min.js"></script> -->
<script>
    function validateImage(input) {
        if (input.files[0].size > 9048576) {
            input.classList.add('is-invalid')
            input.value = "";
        } else {
            input.classList.remove('is-invalid')
        }
    }

    function validateForm() {
        var title = document.getElementById('title').value;
        var subtitle = document.getElementById('subtitle').value;
        var category_id = document.getElementById('category_id').value;
        var company_id = document.getElementById('company_id').value;
        var description = document.getElementById('description').value;
        var type = document.getElementById('type').value;
        var fee = document.getElementById('fee').value;
        var trainer = document.getElementById('trainer').value;
        var seats = document.getElementById('seats').value;
        var enrolled = document.getElementById('enrolled').value;
        var favourites = document.getElementById('favourites').value;
        var schedule = document.getElementById('schedule').value;


        if (title == '' || subtitle == '' || image == '' || category_id == '' || company_id == '' || description == '' || type == '' || fee == '' || trainer == '' || seats == '' || enrolled == '' || favourites == '' || schedule == '') {
            // add error messages to error-alert and show it
            // document.getElementById('error-alert').innerHTML = '<strong>Error!</strong> Please fill all the required fields.';
            // document.getElementById('error-alert').classList.remove('d-none');
            // and add invalidated class to the empty input fields
            if (title == '') {
                document.getElementById('title').classList.add('is-invalid');
            }
            if (subtitle == '') {
                document.getElementById('subtitle').classList.add('is-invalid');
            }
            if (image == '') {
                document.getElementById('editImage').classList.add('is-invalid');
            }
            if (category_id == '') {
                document.getElementById('category_id').classList.add('is-invalid');
            }
            if (company_id == '') {
                document.getElementById('company_id').classList.add('is-invalid');
            }
            if (description == '') {
                document.getElementById('description').classList.add('is-invalid');
            }
            if (type == '') {
                document.getElementById('type').classList.add('is-invalid');
            }
            if (fee == '') {
                document.getElementById('fee').classList.add('is-invalid');
            }
            if (trainer == '') {
                document.getElementById('trainer').classList.add('is-invalid');
            }
            if (seats == '') {
                document.getElementById('seats').classList.add('is-invalid');
            }
            if (enrolled == '') {
                document.getElementById('enrolled').classList.add('is-invalid');
            }
            if (favourites == '') {
                document.getElementById('favourites').classList.add('is-invalid');
            }
            if (schedule == '') {
                document.getElementById('schedule').classList.add('is-invalid');
            }

            return false;
        }
        return true;
    }

    function submitForm() {
        if (!validateForm()) {
            return false;
        }
        console.log('vallidation successful');
        var croppedData = cropper.getCroppedCanvas().toDataURL();
        $('#croppedImage').val(croppedData);
        $('#addRecord').submit();
    }
    $(document).ready(function() {
        $category = "{{$course->category_id}}";
        // select the category option with value of $category
        $('#category_id option[value="' + $category + '"]').attr('selected', 'selected');
        $company = "{{$course->company_id}}";
        // select the company option with value of $company
        $('#company_id option[value="' + $company + '"]').attr('selected', 'selected');
        // Ajax post request for adding company and updating select options
        $type = "{{$course->type}}";
        // select the type option with value of $type
        $('#type option[value="' + $type + '"]').attr('selected', 'selected');

        // d-none the demoimage and add {{$course->image}} to the show image and show it
        $('#Demoimage').addClass('d-none');
        $('#cropImage').attr('src', '{{asset("/public/uploads/Courses/" . $course->image)}}');
        $('#cropImage').removeAttr('style');


        $('#addTicker').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response.html);
                    $('#company_id').html(response.html);
                    $('#closeCompany').trigger('click');
                    $('#addTicker').trigger('reset');
                    $('#company_id').val(response.company.id);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        });
        $('#addCat').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response.html);
                    $('#category_id').html(response.html);
                    $('#closeCategory').trigger('click');
                    $('#addCat').trigger('reset');
                    $('#category_id').val(response.category.id);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        });

        cropper = new Cropper(document.getElementById('cropImage'), {
            dragMode: 'move',
            aspectRatio: 350 / 200,
            autoCropArea: 1,
        });
        // Handler for file input change event
        $('#editImage').change(function() {
            // Demoimage d-none
            $('#Demoimage').addClass('d-none');
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                // Set the source image for cropping when a new image is selected
                $('#cropImage').attr('src', e.target.result);
                // remove style display none to block
                $('#cropImage').removeAttr('style');

                // Clear the Cropper instance when a new image is selected
                if (cropper) {
                    cropper.destroy();
                }

                // Initialize Cropper.js with a fixed aspect ratio (350x200)
                cropper = new Cropper(document.getElementById('cropImage'), {
                    aspectRatio: 350 / 200,
                    viewMode: 2,
                });
            };
            reader.readAsDataURL(file);
        });
    });
</script>
@endsection