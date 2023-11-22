@extends('layouts.adminpanel')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title d-flex justify-content-between align-items-center">
                <h5>Navbar News Card Management</h5>
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
                <form action="{{ route('navNews-update') }}" method="post" id="editRecord" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$navNews->id}}">
                    <input type="hidden" name="croppedImage" id="croppedImage">

                    <div class="row mb-3">
                        <div class="col">
                            <div class="mb-3">
                                <label for="title" class="form-label">
                                    <h4>News Card Title</h4>
                                </label>
                                <input type="text" class="form-control" onchange="validateInput(this)" value="{{$navNews->title}}" name="title" id="title" required>
                                <div class="invalid-feedback">Title is required.</div>
                            </div>
                            <div class="mb-3">
                                <label for="subtitle" class="form-label">
                                    <h4>News Card Subtitle</h4>
                                </label>
                                <input type="text" class="form-control" onchange="validateInput(this)" value="{{$navNews->subtitle}}" name="subtitle" id="subtitle" required>
                                <div class="invalid-feedback">Subtitle is required.</div>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">
                                    <h4>News Card Link</h4>
                                </label>
                                <input type="text" class="form-control" value="{{$navNews->link}}" name="link" id="link">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">
                                    <h4>News Card Image</h4>
                                </label>
                                <input type="file" class="form-control" onchange="validateImage(this)" name="image" id="editImage" accept=".png, .svg, .jpg, .jpeg, .gif">
                                <div class="invalid-feedback">
                                    Image is required and must not exceed 1 MB.
                                </div>
                            </div>
                        </div>
                        <div class="col my-auto">

                            <div id="cropContainer my-auto">
                                <img id="cropImage" src="/public/uploads//navNews/{{$navNews->image}}" alt="Croppable Image">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" id="submitFakeButton" onclick="submitForm()">Save changes</button>
                    <button type="submit" hidden>submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./../adminpanel/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="./../adminpanel/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var cropper;

    function validateImage(input) {
        if (input.files[0].size > 1048576) {
            input.classList.add('is-invalid')
            input.value = "";
        } else {
            input.classList.remove('is-invalid')
        }
    }

    function validateForm() {
        var title = document.getElementById('title').value;
        var subtitle = document.getElementById('subtitle').value;

        if (title == '' || subtitle == '') {
            if (title == '') {
                document.getElementById('title').classList.add('is-invalid');
            }
            if (subtitle == '') {
                document.getElementById('subtitle').classList.add('is-invalid');
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
        $('#editRecord').submit();
    }
    $(document).ready(function() {
        cropper = new Cropper(document.getElementById('cropImage'), {
            dragMode: 'move',
            aspectRatio: 350 / 200,
            autoCropArea: 1,
        });
        // Handler for file input change event
        $('#editImage').change(function() {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                // Set the source image for cropping when a new image is selected
                $('#cropImage').attr('src', e.target.result);

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