<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @extends('headfoot.nav')
  @section('navigation')
  @endsection


  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="mx-auto" style="height: 50px;"></div>
        <h1 class="mt-5">SANBERNEWS</h1>
        <div class="mx-auto" style="height: 20px;"></div>
        <p class="lead">Read the news with us!</p>
        <div class="mx-auto" style="height: 20px;"></div>
        <ul class="list-unstyled">
          <li>Read all the news available in our sites</li>
          <li>Trustworthy information from many sources across Indonesia</li>
        </ul>
      </div>
    </div>
    <!-- /.row -->
    <div class="mx-auto" style="height: 187px;"></div>
    
    
  </div>
  <!-- /.container -->

  <!-- Footer -->
  @extends('headfoot.footer')
  @section('foot')
  @endsection
      
    <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
