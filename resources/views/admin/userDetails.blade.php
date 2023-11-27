@extends('layouts.adminpanel')
@section('content')
<div class="row animated fadeInRight mt-2">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('failure'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Alert!</strong> {{session('failure')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="col-md-4">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>User Profile</h5>
            </div>
            <div>
                <div class="ibox-content no-padding border-left-right">
                    <label for="profile_img" style="cursor: pointer; display: block;margin-left: auto;margin-right: auto;width: 200px; height: 200px;">
                        <img alt="image" class="img-fluid" id="dpShowLabel" style="cursor: pointer; display: block;margin-left: auto;margin-right: auto;width: 200px; height: 200px;" src="{{asset('/public/uploads/profile/' . ($user->profile_img ?? 'avatar.jpg'))}}">
                    </label>
                </div>
                <div class="ibox-content profile-content">
                    <small>@if($user->status == 0) <span class="badge bg-dark text-white">Inactive</span> @elseif($user->status == 1) <span class="badge bg-primary">Active</span> @elseif($user->status == 2) <span class="badge bg-danger">Blocked</span> @endif </small>
                    <h3 class="mt-1"><strong>{{$user->name}} </strong></h3>
                    <p>
                        <strong>Last active: </strong>
                        @php
                        $datetime = \Carbon\Carbon::createFromDate($user->last_login);
                        echo $datetime->diffForHumans();
                        @endphp
                        <br>
                        <strong>Member Since: </strong>
                        @php
                        $datetime = \Carbon\Carbon::createFromDate($user->last_login);
                        echo $datetime->format('d M Y');
                        @endphp
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>User Details</h5>
            </div>
            <div class="ibox-content">
                <form id="editOtherProfileForm" action="{{route('editOtherProfile')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" id="id" value="{{$user->id}}" required hidden>
                    <input type="file" name="profile_img" id="profile_img" class="visually-hidden" accept="image/*" hidden onchange="imageName(this)">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="" required id="name" name="name" value="{{$user->name}}">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="" required id="email" name="email" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Department</label>
                            <input type="text" name="department" id="department" class="form-control" value="{{$user->department}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Role</label>
                            <select class="form-select" name="role" id="role">
                                <option value="0" required {{ $user->role == 0 ? 'selected' : '' }}>User</option>
                                <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Administrator</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Status</label>
                            <select class="form-select" name="status" id="status">
                                <option value="" required {{ $user->status == 0 ? 'selected' : '' }}>Inactive</option>
                                <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Blocked</option>
                            </select>
                        </div>


                    </div>
                    <div class="row">
                        <div class="hr-line-dashed"></div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- <button type="button" onclick="EditFormSubmit()" class="btn btn-primary float-end">Update</button> -->
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                        </div>
                    </div>
                </form>



            </div>
        </div>

    </div>
</div>
<script>
    function imageName(input) {
        var dpShowLabel = document.getElementById('dpShowLabel');
        console.log(input.files[0]);
        dpShowLabel.src = URL.createObjectURL(input.files[0]);
    }
</script>
<script>
</script>
@endsection