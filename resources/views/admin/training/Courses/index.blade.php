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
                <h5>Course Management</h5>
                <a href="course-management-add" class="btn btn-primary">
                    <i class="fa fa-plus"> </i> Add New
                </a>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="tickersTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Activity Status</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="ihub-news-records">
                            @foreach($courses as $course)
                            <tr class="gradeX" style="cursor: pointer;">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>@if($course->type == 1)
                                    Certificate
                                    @elseif($course->type == 0)
                                    Internship
                                    @endif
                                </td>
                                <td>
                                    @if($course->status == 1)
                                    <span class="badge badge-primary">Active</span>
                                    @elseif($course->status == 0)
                                    <span class="badge badge-warning">Inactive</span>
                                    @endif
                                </td>

                                <td class="">
                                    <a class="btn btn-dark btn-sm btn-block" href="{{route('course-management-one', ['id' => $course->id])}}">
                                        <i class="fa fa-edit"> </i> View/Edit
                                    </a>
                                    @if($course->publishstatus == 1)
                                    @if($course->status == 0)
                                    <button class="btn btn-primary btn-sm btn-block activate-button" data-id="{{$course->id}}">
                                        <i class="fa fa-unlock"> </i> Activate
                                    </button>
                                    @elseif($course->status == 1)
                                    <button class="btn btn-warning btn-sm btn-block deactivate-button" data-id="{{$course->id}}">
                                        <i class="fa fa-lock"> </i> Deactivate
                                    </button>
                                    @endif
                                    @endif
                                    <button class="btn btn-danger btn-sm btn-block delete-button" data-id="{{$course->id}}">
                                        <i class="fa fa-trash"> </i> Delete
                                    </button>
                                    <form action="{{ route('course-management-delete') }}" id="delForm-{{$course->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$course->id}}" hidden>
                                        <button type="submit" hidden>Submit</button>
                                    </form>
                                    <form action="{{ route('course-management-activate') }}" id="activate-{{$course->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$course->id}}" hidden>
                                        <button type="submit" hidden>Submit</button>
                                    </form>
                                    <form action="{{ route('course-management-deactivate') }}" id="deactivate-{{$course->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$course->id}}" hidden>
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

<script>
    $(document).ready(function() {
        $('.dataTables-example').DataTable({
            pageLength: 10,
            responsive: true,
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