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

    
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Trending Topics</h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="https://akcdn.detik.net.id/community/media/visual/2020/11/20/evolusi-desain-microsoft-windows-10_169.webp?w=700&q=90/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Waduh! Kode Program Microsoft Dibobol Hacker</h2>
            <p class="card-text">Jakarta - Peretas (hacker) di balik SolarWinds berhasil membobol pertahanan Microsoft Corp hingga bisa mengakses sejumlah kode program (source code) perusahaan teknologi itu.</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on Jumat, 01 Jan 2021 by 
            <a href="#">Soraya Novika</a>
            News Source by
            <a href="https://www.okezone.com/">okezone.com</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="https://akcdn.detik.net.id/community/media/visual/2018/03/21/5ebca4d5-7920-44b8-8338-2101250eee5e_169.png?w=700&q=90/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Rekomendasi Film Kulik Sisi Lain Medsos dan Teknologi, Merinding!</h2>
            <p class="card-text">Jakarta - Sedang mencari rekomendasi film Netflix untuk menemani kamu menghabiskan malam tahun baru? Ini dia film yang menguak sisi lain internet rekomendasi detikINET.</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on Jumat, 01 Jan 2021 by
            <a href="#">Aisyah Kamaliah</a>
            News Source by
            <a href="https://www.detik.com/">detik.com</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="https://akcdn.detik.net.id/community/media/visual/2018/10/22/8ea327e7-576a-44f8-9fcd-d98f205094cf.jpeg?w=700&q=90t/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Sosok di Balik Isu Merger Gojek-Tokopedia, Punya Kisah Hidup Dramatis</h2>
            <p class="card-text">Jakarta - CEO Softbank Masayoshi Son disebut-sebut berada di balik kabar kemungkinan merger Gojek-Tokopedia. Sosoknya selalu menarik diperbincangkan, apalagi jika melihat dulu hidupnya penuh perjuangan.</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Rachmatunnisa</a>
            News Source by
            <a href="https://www.kompas.com/">kompas.com</a>
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search News</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search news...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Find!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">News Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Technologies</a>
                  </li>
                  <li>
                    <a href="#">Sport</a>
                  </li>
                  <li>
                    <a href="#">Automotive</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Health</a>
                  </li>
                  <li>
                    <a href="#">Travel</a>
                  </li>
                  <li>
                    <a href="#">Food</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
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
