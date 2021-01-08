<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SanberNews - Create News</title>

  
  <!-- Bootstrap core CSS -->
  <link href="{{asset('portalberita/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('portalberita/css/blog-home.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @extends('headfoot.nav')
  @section('navigation')
  @endsection

 <!-- posting berita Form -->

 <div class="mx-auto" style="height: 30px;"></div>
    <h5 class="text-center">Insert News</h5>
<div class="row justify-content-center">
    <div class="col-lg-5">
    <div class="card-body">
        <form role="form" action="/Berita/{{$berita->id}}" method="POST" >
          @method('PUT')
            @csrf
            <div class="card-body">
            <!-- bagian judul berita-->
            <div class="form-group">
              <label for="judul">Judul Berita</label>
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul berita"  value="{{old('judul', $berita->judul)}}">
              @error('judul')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <!-- bagian isi berita -->
            <div class="form-group">
              <label for="isi">Isi Berita</label>
              <textarea class="form-control" id="isi" name="isi"  rows="10" cols="50">
                {{old('isi', $berita->isi)}}
              </textarea>
              @error('pertanyaan')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <!-- bagian kategori -->
              <div class="form-group">
                <label for="kategori">Category</label>  
            
                <select class="form-control" name="kategori">
                    <option>Technology</option>
                    <option>Politic</option>
                    <option>Sport</option>
                </select>
            
                @error('pertanyaan')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Simpan Editan</button>
            </div>       
          </form>
    </div>
</div>
</div>
 
  <!-- /.container -->

  <!-- Footer -->
  @include('headfoot.footer')
  {{-- @section('foot')
  @endsection
      
    <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

</body>

</html>
