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
                <h5>Verticals Management</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRecord">
                    <i class="fa fa-plus"> </i> Add New
                </button>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="tickersTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="ihub-news-records">
                            @foreach($verticals as $vertical)
                            <tr class="gradeX" style="cursor: pointer;">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$vertical->name}}</td>
                                <td>{{$vertical->subtitle}}</td>
                                <td>
                                    @if($vertical->status == 1)
                                    <span class="badge badge-primary">Active</span>
                                    @elseif($vertical->status == 0)
                                    <span class="badge badge-warning">Inactive</span>
                                    @endif
                                </td>

                                <td class="">
                                    <button type="button" class="btn btn-dark btn-sm btn-block" id="edit_button" data-bs-toggle="modal" data-bs-target="#editRecord" data-id="{{$vertical->id}}" data-name="{{$vertical->name}}" data-image="{{$vertical->image}}" data-subtitle="{{$vertical->subtitle}}" data-description="{{$vertical->description}}" data-status="{{$vertical->status}}">
                                        <i class="fa fa-edit"> </i> Edit
                                    </button>
                                    @if($vertical->status == 0)
                                    <button class="btn btn-primary btn-sm btn-block activate-button" data-id="{{$vertical->id}}">
                                        <i class="fa fa-unlock"> </i> Activate
                                    </button>
                                    @elseif($vertical->status == 1)
                                    <button class="btn btn-warning btn-sm btn-block deactivate-button" data-id="{{$vertical->id}}">
                                        <i class="fa fa-lock"> </i> Deactivate
                                    </button>
                                    @endif
                                    <button class="btn btn-danger btn-sm btn-block delete-button" data-id="{{$vertical->id}}">
                                        <i class="fa fa-trash"> </i> Delete
                                    </button>
                                    <form action="{{ route('vert-delete') }}" id="delForm-{{$vertical->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$vertical->id}}" hidden>
                                        <button type="submit" hidden>Submit</button>
                                    </form>
                                    <form action="{{ route('vert-activate') }}" id="activate-{{$vertical->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$vertical->id}}" hidden>
                                        <button type="submit" hidden>Submit</button>
                                    </form>
                                    <form action="{{ route('vert-deactivate') }}" id="deactivate-{{$vertical->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$vertical->id}}" hidden>
                                        <button type="submit" hidden>Submit</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Record Modal -->
<div class="modal fade" id="addRecord" tabindex="-1" aria-labelledby="addRecord" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Add Record</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('vert-store') }}" method="post" enctype="multipart/form-data" id="addRecordForm">
                    @csrf
                    <div class="row mb-3 text-align-center align-items-center">
                        <img src="" class="d-none mx-auto my-auto" id="showImage" style="max-width: 350px; border-radius: 20px; border: 5px soolid gray;" alt="">
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="row mb-3">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Name</label></h4>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                    <div class="invalid-feedback">Name is required.</div>
                                </div>
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Image</label></h4>
                                    <input type="file" class="form-control" name="image" id="image" required>
                                    <div class="invalid-feedback">Image is required and must not exceed 1 MB.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Subtitle</label></h4>
                                    <input type="text" class="form-control" name="subtitle" id="subtitle">
                                    <div class="invalid-feedback">Subtitle is required.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Desscription</label></h4>
                                    <textarea class="form-control summernote" name="description" id="description" cols="30" rows="10"></textarea>
                                    <div class="invalid-feedback">Description is required.</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="addRecordForm" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Record Modal -->
<div class="modal fade" id="editRecord" tabindex="-1" aria-labelledby="editRecord" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Edit Record</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('vert-update') }}" method="post" enctype="multipart/form-data" id="editRecordForm">
                    @csrf
                    <input type="text" name="id" id="edit_id" hidden>
                    <div class="row mb-3 text-align-center align-items-center">
                        <img src="" class="d-none mx-auto my-auto" id="showEditImage" style="max-width: 350px; border-radius: 20px;" alt="">
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <div class="row mb-2">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Name</label></h4>
                                    <input type="text" class="form-control" name="name" id="edit_name" required>
                                    <div class="invalid-feedback">Name is required.</div>
                                </div>
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Status</label></h4>
                                    <select class="form-select" name="status" id="status" aria-label="Default select example">
                                        <option disabled selected>Please Select an option</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <div class="invalid-feedback">Status is required.</div>
                                </div>

                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Subtitle</label></h4>
                                    <input type="text" class="form-control" name="subtitle" id="edit_subtitle">
                                    <div class="invalid-feedback">Subtitle is required.</div>
                                </div>
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Image</label></h4>
                                    <input type="file" class="form-control" name="image" id="edit_image">
                                    <div class="invalid-feedback">Image is required and must not exceed 1 MB.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Desscription</label></h4>
                                    <textarea class="form-control summernote" name="description" id="edit_description" cols="30" rows="10"></textarea>
                                    <div class="invalid-feedback">Description is required.</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="editRecordForm" class="btn btn-primary">Save changes</button>
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
    function showImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
                $('#showImage').removeClass('d-none');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function showEditImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showEditImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function validateImage(input) {
        if (input.files[0].size > 1048576) {
            input.classList.add('is-invalid')
            input.value = "";
        } else {
            input.classList.remove('is-invalid')
        }
    }
    $(document).ready(function() {
        $('.dataTables-example').DataTable({
            pageLength: 10,
            responsive: true,
        });

        $('#image').change(function() {
            validateImage(this);
            showImage(this);
        });

        // on edit_button click populate modal with data and show modal
        $('#editRecord').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var name = button.data('name');
            var subtitle = button.data('subtitle');
            var image = button.data('image');
            var description = button.data('description');
            var status = button.data('status');

            // give them as value to inputs inside editRecordForm
            $('#edit_name').val(name);
            $('#edit_id').val(id);
            $('#edit_subtitle').val(subtitle);
            $("#edit_description").summernote('code', description);
            $('#status').val(status);
            $('#showEditImage').attr('src', '/public/uploads//vertical/' + image);
            $('#showEditImage').removeClass('d-none');

        });

        $('#edit_image').change(function() {
            validateImage(this);
            showEditImage(this);
        });

        $('.delete-button').click(function() {
            var id = $(this).data('id');
            var deleteForm = $('#delForm-' + id);

            // Show SweetAlert2 confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this record!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // User confirmed the delete action, send an AJAX request to delete the record
                    deleteForm.submit();
                }
            });
        });

        // Handler for Deactivate button click
        $('.deactivate-button').click(function() {
            var id = $(this).data('id');
            var deactivateForm = $('#deactivate-' + id); // Use a unique ID for each form

            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to deactivate this record!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, deactivate it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    deactivateForm.submit();
                }
            });
        });

        // Handler for Activate button click
        $('.activate-button').click(function() {
            var id = $(this).data('id');
            var activateForm = $('#activate-' + id); // Use a unique ID for each form

            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to activate this record!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, activate it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    activateForm.submit();
                }
            });
        });
    });
</script>
@endsection