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
                <h5>File Assets Management</h5>
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
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="ihub-news-records">
                            @foreach($files as $file)
                            <tr class="gradeX" style="cursor: pointer;">
                                <td>{{$loop->iteration}}</td>
                                <td><a href="{{ asset($file->file_path) }}" target="_blank">{{$file->name}}</a></td>

                                <td class="">
                                    <button type="button" class="btn btn-dark btn-sm btn-block" onclick="copier('{{ asset($file->file_path) }}')">
                                        <i class="fa fa-edit"> </i> Copy
                                    </button>
                                    <button class="btn btn-danger btn-sm btn-block delete-button" data-id="{{$file->id}}">
                                        <i class="fa fa-trash"> </i> Delete
                                    </button>
                                    <form action="{{ route('files.destroy', $file->id) }}" id="delForm-{{$file->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="text" name="id" value="{{$file->id}}" hidden>
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
                <form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data" id="addRecordForm">
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
                                    <h4><label for="exampleInputEmail1" class="form-label">Link</label></h4>
                                    <input type="file" class="form-control" name="file" id="file" required>
                                    <div class="invalid-feedback">File is required.</div>
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
    function copier(link) {
        const textArea = document.createElement('textarea');
        textArea.value = link;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        alert('Link copied to clipboard: ' + link);
    }
</script>

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
    });
</script>
@endsection