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
                <h5>Consultancy Services Management</h5>
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
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Status</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="ihub-news-records">
                            @foreach($services as $service)
                            <tr class="gradeX" style="cursor: pointer;">
                                <td>{{$loop->iteration}}</td>
                                <td>{{\Illuminate\Support\Str::limit($service->title, 20, '...')}}</td>
                                <td>{{\Illuminate\Support\Str::limit($service->subtitle, 60, '...')}}</td>
                                <td>
                                    @if($service->status == 1)
                                    <span class="badge badge-primary">Active</span>
                                    @elseif($service->status == 0)
                                    <span class="badge badge-warning">Inactive</span>
                                    @endif
                                </td>

                                <td class="">
                                    <button type="button" class="btn btn-dark btn-sm btn-block" id="edit_button" data-bs-toggle="modal" data-bs-target="#editRecord" data-id="{{$service->id}}" data-title="{{$service->title}}" data-subtitle="{{$service->subtitle}}" data-status="{{$service->status}}">
                                        <i class="fa fa-edit"> </i> Edit
                                    </button>
                                    @if($service->status == 0)
                                    <button class="btn btn-primary btn-sm btn-block activate-button" data-id="{{$service->id}}">
                                        <i class="fa fa-unlock"> </i> Activate
                                    </button>
                                    @elseif($service->status == 1)
                                    <button class="btn btn-warning btn-sm btn-block deactivate-button" data-id="{{$service->id}}">
                                        <i class="fa fa-lock"> </i> Deactivate
                                    </button>
                                    @endif
                                    <button class="btn btn-danger btn-sm btn-block delete-button" data-id="{{$service->id}}">
                                        <i class="fa fa-trash"> </i> Delete
                                    </button>
                                    <form action="{{ route('consultancy-service-delete') }}" id="delForm-{{$service->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$service->id}}" hidden>
                                        <button type="submit" hidden>Submit</button>
                                    </form>
                                    <form action="{{ route('consultancy-service-activate') }}" id="activate-{{$service->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$service->id}}" hidden>
                                        <button type="submit" hidden>Submit</button>
                                    </form>
                                    <form action="{{ route('consultancy-service-deactivate') }}" id="deactivate-{{$service->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$service->id}}" hidden>
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
                <form action="{{ route('consultancy-service-store') }}" method="post" enctype="multipart/form-data" id="addRecordForm">
                    @csrf
                    <div class="row mb-3 text-align-center align-items-center">
                        <img src="" class="d-none mx-auto my-auto" id="showImage" style="max-width: 350px; border-radius: 20px; border: 5px soolid gray;" alt="">
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="row mb-3">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Title</label></h4>
                                    <input type="text" class="form-control" name="title" id="title" required>
                                    <div class="invalid-feedback">Title is required.</div>
                                </div>
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Subtitle</label></h4>
                                    <input type="text" class="form-control" name="subtitle" id="subtitle" required>
                                    <div class="invalid-feedback">Subtitle is required.</div>
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
                <form action="{{ route('consultancy-service-update') }}" method="post" id="editRecordForm">
                    @csrf
                    <input type="text" name="id" id="edit_id" hidden>
                    
                    <div class="row mb-3">
                        <div class="col">
                            <div class="row mb-3">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Title</label></h4>
                                    <input type="text" class="form-control" name="title" id="edit_title" required>
                                    <div class="invalid-feedback">Title is required.</div>
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
                            <div class="row mb-3">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Subtitle</label></h4>
                                    <input type="text" class="form-control" name="subtitle" id="edit_subtitle" required>
                                    <div class="invalid-feedback">Subtitle is required.</div>
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
            var title = button.data('title');
            var subtitle = button.data('subtitle');
            var status = button.data('status');

            // give them as value to inputs inside editRecordForm
            $('#edit_title').val(title);
            $('#edit_subtitle').val(subtitle);
            $('#edit_id').val(id);
            $('#status').val(status);
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