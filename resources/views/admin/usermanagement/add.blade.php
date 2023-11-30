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
    @if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Alert!</strong> {{ Session::get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="col-md-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Add New User</h5>
            </div>
            <div class="ibox-content">
                <form id="" action="{{route('create-new-user')}}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="" required id="name" name="name">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Email</label>
                            <small>(Please use an authentic email address to receive login credentials)</small>
                            <input type="email" class="form-control" placeholder="" required id="email" name="email">
                        </div>
                    </div>
                    <div class="row mb-2">

                        <fieldset class="row mb-2 mt-4">
                            <legend class="mb-4">Assign Permissions</legend>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked id="MainModule" name="MainModule">
                                    <label class="form-check-label" for="MainModule">
                                        iHub Main Module
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked id="TrainingModule" name="TrainingModule">
                                    <label class="form-check-label" for="TrainingModule">
                                        Training and Courses Module
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked id="StartupsModule" name="StartupsModule">
                                    <label class="form-check-label" for="StartupsModule">
                                        Startups Module
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked id="blogModule" name="blogModule">
                                    <label class="form-check-label" for="blogModule">
                                        Blog Module
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked id="fellowshipModule" name="fellowshipModule">
                                    <label class="form-check-label" for="fellowshipModule">
                                        Fellowship Module
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked id="ConsultancyModule" name="ConsultancyModule">
                                    <label class="form-check-label" for="ConsultancyModule">
                                        Consultancy Module
                                    </label>
                                </div>
                            </div>

                        </fieldset>
                    </div>


                    <div class="row">
                        <div class="hr-line-dashed"></div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary float-end">Create</button>
                        </div>
                    </div>
                </form>



            </div>
        </div>

    </div>
</div>
@endsection