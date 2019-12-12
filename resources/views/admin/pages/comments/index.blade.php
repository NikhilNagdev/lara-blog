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
                        <th>Post Title</th>
                        <th>Author</th>
                        <th>Email</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Approve</th>
                        <th>Disapprove</th>
                        <th>Delete</th>
                    </tr>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td>{{ $comment->post_title }}</td>
                            <td>{{ $comment->comment_author }}</td>
                            <td>{{ $comment->comment_email }}</td>
                            <td>{{ $comment->comment_content }}</td>
                            <td>{{ $comment->comment_status }}</td>
                            <td>{{ $comment->comment_date }}</td>
                            <td><a href="" class="btn btn-outline-success "><span class="fa fa-check-square fa-2x"></span></a></td>
                            <td><a href="" class="btn btn-outline-danger "><span class="fa fa-check-square fa-2x"></span></a></td>
                            <td><a href="" class="btn btn-outline-danger "><span class="fa fa-trash fa-2x"></span></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection