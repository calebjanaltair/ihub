@extends('layouts.adminpanel')
@section('content')


<div class="alert alert-success alert-dismissible fade show d-none" id="success-alert" role="alert">
    <strong>Success!</strong> <span id="success-msg"></span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-danger alert-dismissible fade show d-none" id="failure-alert" role="alert">
    <strong>Alert!</strong> <span id="failure-msg"></span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title d-flex justify-content-between align-items-center">
                <h5>User Management</h5>
                <a href="{{route('add-new-user')}}" class="btn btn-primary">
                    <i class="fa fa-plus"> </i> Add New User
                </a>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="usersTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="user-records">
                            @foreach($users as $user)
                            <tr class="gradeX" style="cursor: pointer;">
                                <td>{{$loop->iteration}}</td>
                                <td><img style="width: 30px; height: 30px;" src="{{asset('/public/uploads/profile/' . ($user->profile_img ?? 'avatar.jpg'))}}" alt=""> {{' ' .$user->name}}</td>
                                <td>{{$user->department ?? 'N/A'}}</td>
                                <td>{{$user->role == 0 ? 'Moderator' : 'Administrator'}}</td>
                                <td> @if($user->status === 0) <span class="badge bg-dark text-white">Inactive</span> @elseif($user->status === 1) <span class="badge bg-success">Active</span>@elseif($user->status === 2) <span class="badge bg-danger">Blocked</span> @endif</td>
                                <td class="">
                                    <a href="user-details/{{$user->id}}" class="btn btn-sm btn-success"><i class="fa fa-id-card-o"> </i> Perview</a>
                                    @if($user->status == 2)
                                    <a class="btn btn-primary btn-sm btn-block" onclick="confirmUnblock('{{$user->id}}')">
                                        <i class="fa fa-unlock"> </i> Unblock
                                    </a>
                                    @elseif($user->status == 0 || $user->status == 1)
                                    <a class="btn btn-warning btn-sm btn-block" onclick="confirmBlock('{{$user->id}}')">
                                        <i class="fa fa-lock"> </i> Block
                                    </a>
                                    @endif
                                    <a class="btn btn-danger btn-sm btn-block" onclick="confirmDelete('{{$user->id}}')"><i class="fa fa-trash"> </i> Delete</a>
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
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
</script>
<!-- Mainly scripts -->
<!-- jQuery -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- DataTables Buttons -->
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{asset('adminpanel/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('adminpanel/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>


<!-- Page-Level Scripts -->
<script>
    // Upgrade button class name
    $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';

    $(document).ready(function() {
        $('.dataTables-example').DataTable({
            pageLength: 10,
            responsive: true,
        });

    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(userId) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this user profile!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{route("deleteUser")}}',
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: userId,
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#user-records').empty();
                        $('#user-records').html(res.html);
                        $('#success-msg').html(res.success);
                        $('#success-alert').removeClass('d-none');
                    },
                    error: function(xhr, status, error) {
                        $('#failure-msg').html(xhr.responseText);
                        $('#failure-alert').removeClass('d-none');
                    }
                });
            }
        });
    }

    function confirmBlock(userId) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will block/deactivate this profile!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, block user!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{route("blockUser")}}',
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: userId,
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#user-records').empty();
                        $('#user-records').html(res.html);
                        $('#success-msg').html(res.success);
                        $('#success-alert').removeClass('d-none');
                    },
                    error: function(xhr, status, error) {
                        $('#failure-msg').html(xhr.responseText);
                        $('#failure-alert').removeClass('d-none');
                    }
                });
            }
        });
    }

    function confirmUnblock(userId) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will unblock/activate this profile!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, unblock user!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{route("unblockUser")}}',
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: userId,
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#user-records').empty();
                        $('#user-records').html(res.html);
                        $('#success-msg').html(res.success);
                        $('#success-alert').removeClass('d-none');
                    },
                    error: function(xhr, status, error) {
                        $('#failure-msg').html(xhr.responseText);
                        $('#failure-alert').removeClass('d-none');
                    }
                });
            }
        });
    }
</script>
@endsection