<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body style="padding-top: 56px;">

<!-- Navigation -->
@include('client.includes.navbar')


<!-- Page Content -->
<div class="container">

    <div class="row">

        @yield('content')

        @include('client.includes.sidebar')

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
