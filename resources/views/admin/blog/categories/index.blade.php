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
                <h5>Categories</h5>
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
                                <th>Created On</th>
                                <th>Total Blogs</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="ihub-news-records">
                            @foreach($categories as $category)
                            <tr class="gradeX" style="cursor: pointer;">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    @php
                                    $datetime = \Carbon\Carbon::createFromDate($category->created_at);
                                    echo $datetime->format('d M Y');
                                    @endphp
                                </td>
                                <td>
                                    {{ blog_count($category->id) }}
                                </td>
                                <td class="">
                                    <button type="button" class="btn btn-light btn-sm btn-block" id="edit_button" data-toggle="tooltip" data-placement="top" data-bs-toggle="modal" title="View or Edit" data-bs-target="#editRecord" data-id="{{$category->id}}" data-name="{{$category->name}}">
                                    <img width="20" height="20" src="https://img.icons8.com/ios/20/create-new.png" alt="create-new"/>
                                    </button>
                                    <!-- <button type="button" class="btn btn-dark btn-sm btn-block" id="edit_button" data-bs-toggle="modal" data-bs-target="#editRecord" data-id="{{$category->id}}" data-name="{{$category->name}}">
                                        <i class="fa fa-edit"> </i> Edit
                                    </button> -->
                                    <button class="delete-button btn btn-light btn-sm btn-block" data-id="{{$category->id}}" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <img width="20" height="20" src="https://img.icons8.com/material-rounded/20/filled-trash.png" alt="filled-trash" />
                                    </button>
                                    <!-- <button class="btn btn-danger btn-sm btn-block delete-button" data-id="{{$category->id}}">
                                        <i class="fa fa-trash"> </i> Delete
                                    </button> -->
                                    <form action="{{ route('categories-management-delete') }}" id="delForm-{{$category->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$category->id}}" hidden>
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
    <div class="modal-dialog modal-dialog-scrollable modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Add Record</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories-management-store') }}" method="post" id="addRecordForm">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <div class="row mb-3">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Category Name</label></h4>
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
                <button type="submit" form="addRecordForm" class="btn btn-primary">Add Category</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Record Modal -->
<div class="modal fade" id="editRecord" tabindex="-1" aria-labelledby="editRecord" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Edit Record</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories-management-update') }}" method="post" id="editRecordForm">
                    @csrf
                    <input type="text" name="id" id="edit_id" hidden>

                    <div class="row mb-2">
                        <div class="col">
                            <div class="row mb-2">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Category Name</label></h4>
                                    <input type="text" class="form-control" name="name" id="edit_name" required>
                                    <div class="invalid-feedback">Name is required.</div>
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
        $('[data-toggle="tooltip"]').tooltip();
        $('#editRecord').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var name = button.data('name');

            // give them as value to inputs inside editRecordForm
            $('#edit_name').val(name);
            $('#edit_id').val(id);
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
                    deleteForm.submit();
                }
            });
        });
    });
</script>
@endsection