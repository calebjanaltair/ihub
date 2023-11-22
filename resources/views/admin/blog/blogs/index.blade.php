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
                <h5>Blogs</h5>
                <a class="btn btn-primary" href="{{route('blogs-add')}}">
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
                                <th>Created On</th>
                                <th>Categories</th>
                                <th>Status</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="ihub-news-records">
                            @foreach($blogs as $blog)
                            <tr class="gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td>{{ Str::limit($blog->title, 45, '...')}}</td>
                                <td>
                                    @php
                                    $datetime = \Carbon\Carbon::createFromDate($blog->created_at);
                                    echo $datetime->format('d M Y');
                                    @endphp
                                </td>
                                <td>
                                    @foreach ($blog->categories as $category)
                                    <span class="badge badge-success">{{ $category->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    @if($blog->status == 1)
                                    <span class="badge badge-primary">Published</span> <br>
                                    @elseif($blog->status == 0)
                                    <span class="badge badge-warning">Unpublished</span>
                                    @endif
                                </td>
                                <td class="">
                                    <!-- <a class="btn btn-dark btn-sm btn-block" href="{{ route('blogs-edit', $blog->id) }}" id="edit_button">
                                        <i class="fa fa-edit"> </i> Edit
                                    </a> -->
                                    <a class="btn btn-light btn-sm btn-block" href="{{ route('blogs-edit', $blog->id) }}" id="edit_button" data-toggle="tooltip" data-placement="top" title="View or Edit">
                                        <img width="20" height="20" src="https://img.icons8.com/fluency-systems-filled/20/view.png" alt="view" />
                                    </a>
                                    @if($blog->status == 0)
                                    <!-- <button class="btn btn-primary btn-sm btn-block activate-button" data-id="{{$blog->id}}">
                                        <i class="fa fa-unlock"> </i> Publish
                                    </button> -->
                                    <button class="activate-button btn btn-light btn-sm btn-block" data-id="{{$blog->id}}" data-toggle="tooltip" data-placement="top" title="Publish">
                                        <img width="20" height="20" src="https://img.icons8.com/ios-glyphs/20/visible--v1.png" alt="visible--v1" />
                                    </button>
                                    @elseif($blog->status == 1)
                                    <!-- <button class="btn btn-warning btn-sm btn-block deactivate-button" data-id="{{$blog->id}}">
                                        <i class="fa fa-lock"> </i> Unpublish
                                    </button> -->
                                    <button class="deactivate-button btn btn-light btn-sm btn-block" data-id="{{$blog->id}}" data-toggle="tooltip" data-placement="top" title="Unpublish">
                                        <img width="20" height="20" src="https://img.icons8.com/ios-glyphs/20/hide.png" alt="hide" />
                                    </button>
                                    @endif
                                    <!-- <button class="btn btn-danger btn-sm btn-block delete-button" data-id="{{$blog->id}}">
                                        <i class="fa fa-trash"> </i> Delete
                                    </button> -->
                                    <button class="delete-button btn btn-light btn-sm btn-block" data-id="{{$blog->id}}" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <img width="20" height="20" src="https://img.icons8.com/material-rounded/20/filled-trash.png" alt="filled-trash" />
                                    </button>
                                    
                                    <form action="{{ route('blogs-delete') }}" id="delForm-{{$blog->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$blog->id}}" hidden>
                                        <button type="submit" hidden>Submit</button>
                                    </form>
                                    <form action="{{ route('blogs-activate') }}" id="activate-{{$blog->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$blog->id}}" hidden>
                                        <button type="submit" hidden>Submit</button>
                                    </form>
                                    <form action="{{ route('blogs-deactivate') }}" id="deactivate-{{$blog->id}}" method="post">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{$blog->id}}" hidden>
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
        $('[data-toggle="tooltip"]').tooltip();
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

        // Handler for Deactivate button click
        $('.deactivate-button').click(function() {
            var id = $(this).data('id');
            var deactivateForm = $('#deactivate-' + id); // Use a unique ID for each form

            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to unpublish this record!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, unpublish it!',
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
                text: 'You want to publish this record!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, publish it!',
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