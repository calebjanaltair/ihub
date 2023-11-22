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
                <h5>Featured Courses Management <br> <br> (<small><strong>You can add maximum of 3 courses in feature section.</strong></small>)</h5> 
                @if($canAddMore)
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRecord">
                    <i class="fa fa-plus"> </i> Add New
                </button>
                @endif
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="tickersTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="ihub-news-records">
                            @foreach($featured_courses as $featured_course)
                            <tr class="gradeX" style="cursor: pointer;">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$featured_course->title}}</td>


                                <td class="">

                                    <button class="btn btn-danger btn-sm btn-block delete-button" data-id="{{$featured_course->id}}">
                                        <i class="fa fa-trash"> </i> Remove
                                    </button>
                                    <form action="{{ route('featured-delete') }}" id="delForm-{{$featured_course->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$featured_course->id}}" hidden>
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
                <h3 class="modal-title" id="exampleModalLabel">Add Course to Feature Section</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('featured-store') }}" method="post" enctype="multipart/form-data" id="addRecordForm">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <div class="row mb-3">
                                <div class="col">
                                    <h4><label for="exampleInputEmail1" class="form-label">Select Course</label></h4>
                                    <select class="form-select" name="course_id" id="course_id" aria-label="Default select example">
                                        {!! allNonFeaturedCourses() !!}
                                    </select>
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

<script>
    $(document).ready(function() {
        $('.delete-button').click(function() {
            var id = $(this).data('id');
            var deleteForm = $('#delForm-' + id);

            // Show SweetAlert2 confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to undo this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, remove it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // User confirmed the delete action, send an AJAX request to delete the record
                    deleteForm.submit();
                }
            });
        });
    });
</script>
@endsection