@extends('admin.master')

@section('body')

    <div class="row mb-3">

        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4"> Manage Data </h6>
                <div class="table-responsive">
                    <p class="text-center text-success"> {{Session::get('message')}} </p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col"> SL NO </th>
                            <th scope="col"> Category Name </th>
                            <th scope="col"> Category Description </th>
                            <th scope="col"> Category Image </th>
                            <th scope="col"> Publication Status </th>
                            <th scope="col"> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td> {{$loop->iteration}} </td>
                            <td> {{$category->name}} </td>
                            <td> {{$category->description}} </td>
                            <td><img src="{{asset($category->image)}}" alt="{{$category->name}}" height="80" width="80"> </td>
                            <td> {{$category->status == 1 ? 'Published' : 'Unpublished'}} </td>
                            <td>
                                <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this!');">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
