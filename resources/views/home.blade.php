<!DOCTYPE html>
<html lang="en">

{{-- Home Registered --}}

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SanberNews - Home</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
<!-- Navigation -->
@extends('headfoot.nav')
@section('navigation')
@endsection

</head>


<body>

    
  <!-- Page Content untuk menampilkan berita dari database  -->
  
  @if (session('success'))
  <div class="alert alert-success" >
   {{session('success')}}
  </div>
  @endif
    @include('layouts.blogentries')
  <!-- /.container -->

  <!-- Footer -->
    <!-- Footer -->
    @extends('headfoot.footer')
    @section('foot')
    @endsection

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
