@extends("admin.layouts.app")



@section('content')


    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('category.store') }}" method="post" role="form" enctype="multipart/form-data">
                <legend>Add New Post</legend>
                @csrf

                <div class="form-group">
                    <label for="post_title">Category Title</label>
                    <input type="text" class="form-control" name="category_title" id="category_title" >
                </div>

                <button type="submit" class="btn btn-primary" name="add_Category" id="add_Category">Add Category</button>
            </form>
        </div>
    </div>
    <div class="mb-2"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_title }}</td>
                            <td><a href="" class="btn btn-outline-info "><span class="fa fa-edit"></span></a></td>
                            <td><a href="" class="btn btn-outline-danger "><span class="fa fa-trash"></span></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


