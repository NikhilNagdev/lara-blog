@extends("admin.layouts.app")



@section('content')

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