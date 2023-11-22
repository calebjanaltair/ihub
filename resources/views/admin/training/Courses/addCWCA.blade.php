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
                    <h2>Add Who Can Apply Points</h2>
                </div>
                <div class="col-sm-8">
                    <a class="btn btn-success float-end" href="{{route('highlights', ['id' => $courseID])}}">
                        Save & Next
                    </a>
                </div>
            </div>
            <div class="ibox-title d-flex justify-content-between align-items-center">
                <h5>Who Can Apply Points Management</h5>
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
                                <th>Status</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="ihub-news-records">
                            @foreach($cwcas as $cwca)
                            <tr class="gradeX" style="cursor: pointer;">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$cwca->name}}</td>
                                <td>
                                    @if($cwca->status == 1)
                                    <span class="badge badge-primary">Active</span>
                                    @elseif($cwca->status == 0)
                                    <span class="badge badge-warning">Inactive</span>
                                    @endif
                                </td>

                                <td class="">
                                    <button type="button" class="btn btn-dark btn-sm btn-block" id="edit_button" data-bs-toggle="modal" data-bs-target="#editRecord" data-id="{{$cwca->id}}" data-name="{{$cwca->name}}" data-status="{{$cwca->status}}">
                                        <i class="fa fa-edit"> </i> Edit
                                    </button>
                                    @if($cwca->status == 0)
                                    <button class="btn btn-primary btn-sm btn-block activate-button" data-id="{{$cwca->id}}">
                                        <i class="fa fa-unlock"> </i> Activate
                                    </button>
                                    @elseif($cwca->status == 1)
                                    <button class="btn btn-warning btn-sm btn-block deactivate-button" data-id="{{$cwca->id}}">
                                        <i class="fa fa-lock"> </i> Deactivate
                                    </button>
                                    @endif
                                    <button class="btn btn-danger btn-sm btn-block delete-button" data-id="{{$cwca->id}}">
                                        <i class="fa fa-trash"> </i> Delete
                                    </button>
                                    <form action="{{ route('cwca-delete') }}" id="delForm-{{$cwca->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$cwca->id}}" hidden>
                                        <button type="submit" hidden>Submit</button>
                                    </form>
                                    <form action="{{ route('cwca-activate') }}" id="activate-{{$cwca->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$cwca->id}}" hidden>
                                        <button type="submit" hidden>Submit</button>
                                    </form>
                                    <form action="{{ route('cwca-deactivate') }}" id="deactivate-{{$cwca->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$cwca->id}}" hidden>
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
                <form action="{{ route('cwca-store') }}" method="post" enctype="multipart/form-data" id="addRecordForm">
                    @csrf
                    <input type="text" name="course_id" value="{{$courseID}}" hidden>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="row mb-3">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Name</label></h4>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                    <div class="invalid-feedback">Name is required.</div>
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
                <form action="{{ route('cwca-update') }}" method="post" enctype="multipart/form-data" id="editRecordForm">
                    @csrf
                    <input type="text" name="course_id" value="{{$courseID}}" hidden>
                    <input type="text" name="id" id="edit_id" hidden>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="row mb-3">
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

        // on edit_button click populate modal with data and show modal
        $('#editRecord').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var name = button.data('name');
            var status = button.data('status');

            // give them as value to inputs inside editRecordForm
            $('#edit_name').val(name);
            $('#edit_id').val(id);
            $('#status').val(status);
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