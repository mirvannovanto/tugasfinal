@extends('master')
@section('content')
     <!-- posting berita Form -->
     <div class="card my-4">
        <h5 class="card-header">Insert News</h5>
        <div class="card-body">
            <form role="form" action="/Berita" method="POST" >
                @csrf
                <div class="card-body">
                <!-- bagian judul berita-->
                  <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul berita">
                    @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <!-- bagian isi berita -->
                  <div class="form-group">
                    <label for="isi">Isi Berita</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="ketikkan berita atau salin disini">
                    @error('pertanyaan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <!-- bagian kategori -->
                  <div class="form-group">
                    <label for="kategori">kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" placeholder=" pilih kategori berita">
                    @error('pertanyaan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Posting Berita</button>
                </div>
              </form>
        </div>
      </div>
@endsection