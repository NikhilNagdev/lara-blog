@extends("admin.layouts.app")



@section('content')

<div class="row">
    <div class="col-md-12">
        <a type="button" href="post.php?source=add_post" class="btn btn-primary">Add post</a>
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
                    <th>Author</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Tags</th>
                    <th>Total Comments</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->user_id }}</td>
                    <td>{{ $post->post_title }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td>{{ $post->post_status }}</td>
                    <td><img src="{{ asset("images/" . $post->post_image) }}" class="img-fluid"  width="100px" alt=""></td>
                    <td>{{ $post->post_tags }}</td>
                    <td>{{ $post->post_view_count }}</td>
                    <td>{{ $post->post_date_time }}</td>
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