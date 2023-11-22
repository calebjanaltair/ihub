@extends('layouts.adminpanel')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title d-flex justify-content-between align-items-center">
                <h5>Hackathon Management</h5>
            </div>
            <div class="ibox-content">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success') }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{ session('error') }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{ route('hackathon-update') }}" method="post" id="editRecord" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$hackathon->id}}">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="mb-3">
                                <label for="title" class="form-label">
                                    <h4>Hackathon Title</h4>
                                </label>
                                <input type="text" class="form-control" value="{{$hackathon->title}}" name="title" id="title" required>
                                <div class="invalid-feedback">Title is required.</div>
                            </div>
                            <div class="mb-3">
                                <label for="subtitle" class="form-label">
                                    <h4>Hackathon Subtitle</h4>
                                </label>
                                <input type="text" class="form-control" value="{{$hackathon->subtitle}}" name="subtitle" id="subtitle" required>
                                <div class="invalid-feedback">Subtitle is required.</div>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">
                                    <h4>Hackathon Registration Link</h4>
                                </label>
                                <input type="text" class="form-control" value="{{$hackathon->register_link}}" name="register_link" id="register_link">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">
                                    <h4>Hackathon Brochure</h4>
                                </label>
                                <input type="file" class="form-control" name="brochure" id="editImage">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">
                                    <h4>Hackathon Poster</h4>
                                </label>
                                <input type="file" class="form-control" name="poster" id="editImage" accept=".png, .svg, .jpg, .jpeg, .gif">
                            </div>
                            <div class="mb-3">
                                <label for="subtitle" class="form-label">
                                    <h4>Hackathon Description</h4>
                                </label>
                                <textarea class="form-control summernote" name="description" id="description" rows="3" required>{{$hackathon->description}}</textarea>
                                <div class="invalid-feedback">Subtitle is required.</div>
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
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
<script>
    // var cropper;

    // function validateImage(input) {
    //     if (input.files[0].size > 1048576) {
    //         input.classList.add('is-invalid')
    //         input.value = "";
    //     } else {
    //         input.classList.remove('is-invalid')
    //     }
    // }

    // function validateForm() {
    //     var title = document.getElementById('title').value;
    //     var subtitle = document.getElementById('subtitle').value;

    //     if (title == '' || subtitle == '') {
    //         if (title == '') {
    //             document.getElementById('title').classList.add('is-invalid');
    //         }
    //         if (subtitle == '') {
    //             document.getElementById('subtitle').classList.add('is-invalid');
    //         }
    //         return false;
    //     }
    //     return true;
    // }

    // function submitForm() {
    //     if (!validateForm()) {
    //         return false;
    //     }
    //     console.log('vallidation successful');
    //     var croppedData = cropper.getCroppedCanvas().toDataURL();
    //     $('#croppedImage').val(croppedData);
    //     $('#editRecord').submit();
    // }
    // $(document).ready(function() {
    //     cropper = new Cropper(document.getElementById('cropImage'), {
    //         dragMode: 'move',
    //         aspectRatio: 350 / 200,
    //         autoCropArea: 1,
    //     });
    //     // Handler for file input change event
    //     $('#editImage').change(function() {
    //         var file = this.files[0];
    //         var reader = new FileReader();
    //         reader.onload = function(e) {
    //             // Set the source image for cropping when a new image is selected
    //             $('#cropImage').attr('src', e.target.result);

    //             // Clear the Cropper instance when a new image is selected
    //             if (cropper) {
    //                 cropper.destroy();
    //             }

    //             // Initialize Cropper.js with a fixed aspect ratio (350x200)
    //             cropper = new Cropper(document.getElementById('cropImage'), {
    //                 aspectRatio: 350 / 200,
    //                 viewMode: 2,
    //             });
    //         };
    //         reader.readAsDataURL(file);
    //     });
    // });
</script>
@endsection