@extends('layouts.adminpanel')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title d-flex justify-content-between align-items-center">
                <h5>Edit Blog</h5>
                <a class="btn btn-primary" href="{{route('blogs')}}"><i class="fa fa-arrow-left"> </i> All Blogs</a>

            </div>
            <div class="ibox-content">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success') }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{ session('error') }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{ route('blogs-update') }}" novalidate method="post" id="addRecord" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" value="{{$blog->id}}" hidden>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">
                                    <h4>Title</h4>
                                </label>
                                <input type="text" class="form-control" name="title" id="title" value="{{$blog->title}}" required />
                                <div class="invalid-feedback">Title is required.</div>
                            </div>
                            <div class="mb-3">
                                <label for="subtitle" class="form-label">
                                    <h4>Short Description</h4>
                                </label>
                                <textarea class="form-control" required name="subtitle" placeholder="Enter the Short Description" rows="2">{{$blog->subtitle}}</textarea>
                                <div class="invalid-feedback">Short Description is required.</div>

                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">
                                    <h4>Featured Image</h4>
                                </label>
                                <input type="file" class="form-control" name="image" id="editImage" accept=".png, .svg, .jpg, .jpeg, .gif" required>
                                <div class="invalid-feedback">Image is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6 my-auto">
                            <label for="editImage" style="cursor: pointer;" class="form-label">
                                <h4>Featured Image Preview</h4>
                                <div id="cropContainer my-auto">
                                    <img id="imageView" src="/public/uploads/blog/{{$blog->image}}" style=" width:450px; height: auto;" alt="Image View">
                                </div>
                        </div>
                        </label>
                    </div>
                    <div class="row mb-3">
                        <div class="mb-3">
                            <div class="row">

                                <div class="row">
                                    <div class="col-10">
                                        <label for="categories" class="form-label">
                                            <h4>Categories</h4>
                                        </label>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-sm btn-success mx-0" style="margin-left: none;" type="button" data-toggle="modal" data-target="#newCategory">Add New Category</button>
                                    </div>
                                </div>
                                <select class="form-select" name="categories[]" id="categories" multiple aria-label="multiple select example" required>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if(in_array($category->id, $blogCategories)) selected @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                <h4>Blog Description</h4>
                            </label>
                            <textarea class="form-control summernote" required name="description" placeholder="Enter the Description" rows="10">{!! $blog->description !!}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="newCategory" tabindex="-1" role="dialog" aria-labelledby="newCategoryTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Add New Category</h3>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories-management-add') }}" method="post" id="addCat">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            <h4>Category Name</h4>
                        </label>
                        <input class="form-control" id="name" name="name" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="closeCategory" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            tabsize: 2,
            height: 250,
            toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(document).ready(function() {
            $('#categories').select2();
        });
        $('#editImage').change(function() {
            // show the uploaded image in div with id - imageView
            $('#imageView').show();
            $('#imageView').attr('src', URL.createObjectURL(event.target.files[0]));
        });
        $('#addCat').submit(function(e) {
            e.preventDefault();
            var selectedCategories = $('#categories').val();
            // console.log(selectedCategories);
            var formData = new FormData(this);
            formData.append('selected_categories', selectedCategories);
            // console.log(formData);
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#categories').html(response.html);
                    $('#closeCategory').trigger('click');
                    $('#addCat').trigger('reset');
                },
                error: function(response) {
                    console.log(response);
                }
            });
        });
    });
</script>
<script>
    ClassicEditor.create(document.querySelector('#content'), {
            ckfinder: {
                uploadUrl: "{{ route('ckeditor.upload').'?_token='.csrf_token() }}"
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>

@endsection