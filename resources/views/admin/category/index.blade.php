@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <h4 class="text-center text-success"> {{session('message')}} </h4>
        <form action="{{route('category.new')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4"> Add Category </h6>
                    <div class=" mb-3">
                        <label for="exampleInputuname3" class="col-sm-3 control-label"> Category Name <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="Category Name"/>
                    </div>

                    <div class="form-group mb-3">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label"> Category Description <span class="text-danger">*</span> </label>
                        <textarea class="form-control" name="description" id="exampleInputEmail3" placeholder="Category Description"></textarea>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="category-image" class="form-label">Category Image</label>
                        <input type="file" name="image" id="category-image" class="form-control" />
                    </div>

                    <div class="form-group row mb-lg-3">
                        <label for="inputPassword4" class="col-sm-3 control-label"> Publication Status </label>
                        <div class="col-sm-9">
                            <label class="me-3"><input type="radio" name="status" value="1" checked> Published </label>
                            <label><input type="radio" name="status" value="2"> Unpublished </label>
                        </div>
                    </div>

                    <div class="form-floating m-b-3">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white"> Create New Category </button>
                        </div>
                    </div>

                </div>
            </div>
        </form>

    </div>
@endsection


