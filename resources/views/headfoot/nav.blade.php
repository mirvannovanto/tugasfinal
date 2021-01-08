
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

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar navbar-light fixed-top" style="background-color: #0ca5e7;">
    <div class="container">
      <a class="navbar-brand text-white" href="/home">SanberNews</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="/home">Home
              <span class="sr-only">(current)</span>
            </a>
            <li class="nav-item">
              <a class="nav-link" href="/Berita/create">Input Berita</a>
            </li>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/login">Sign Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  @yield('navigation')
</body>

</html>
