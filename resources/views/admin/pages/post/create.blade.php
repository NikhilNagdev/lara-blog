@extends("admin.layouts.app")



@section('content')

    <?php
//    if (isset($_POST['published_post'])){
//        $post_author = $_SESSION['user_id'];
//        $post_title = $_POST['post_title'];
//        $post_cat_id = $_POST['post_cat_id'];
//        $post_status = $_POST['post_status'];
//
//        $post_image = $_FILES['post_image']['name'];
//        $post_image_temp = $_FILES['post_image']['tmp_name'];
//
//        $post_tags = $_POST['post_tags'];
//        $post_content= $_POST['post_content'];
//        $post_date =date("Y-m-d");
//
//        move_uploaded_file($post_image_temp,"../images/$post_image");
//
//        //insert values
////        include_once ("../includes/connection.php");
//        $query = "INSERT INTO posts (post_cat_id, post_title, post_author, post_date, post_image, post_content, post_tags,  post_status) VALUES (?,?,?,?,?,?,?,?)";
//
//        $ps= mysqli_prepare($connection,$query);
//
//        mysqli_stmt_bind_param($ps,"dsssssss",$post_cat_id, $post_title, $post_author, $post_date, $post_image, $post_content, $post_tags, $post_status);
//
//        mysqli_stmt_execute($ps);
//
//        if (mysqli_errno($connection)){
//            die(mysqli_error($connection));
//        }else{
//            header("Location: post.php");
//        }
//    }
    ?>


    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('post.store') }}" method="post" role="form" enctype="multipart/form-data">
                <legend>Add New Post</legend>
                @csrf

                <div class="form-group">
                    <label for="post_title">Post Title</label>
                    <input type="text" class="form-control" name="post_title" id="post_title" >
                </div>


                <div class="form-group">
                    <label for="post_cat_id">Post Category</label>
                    <select  class="form-control" name="category_id" id="category_id" >
                        <option value="" disabled selected>Select category here</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{ $category->category_title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="post_status">Post Status</label>
                    <select name="post_status" id="post_status" class="form-control">
                        <option value="draft">Draft</option>
                        <option value="Published">Published</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="post_image">Post Image</label>
                    <input type="file" class="form-control-file" name="post_image" id="post_image" >
                </div>

                <div class="form-group">
                    <label for="post_tags">Post Tags</label>
                    <input type="text" class="form-control" name="post_tags" id="post_tags" >
                </div>
                <div class="form-group">
                    <label for="post_content">Post Contents</label>
                    <textarea name="post_content" id="post_content" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" name="published_post" id="published_post">Published Post</button>
            </form>
        </div>
    </div>

@endsection


