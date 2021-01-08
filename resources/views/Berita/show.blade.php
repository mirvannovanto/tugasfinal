@extends('master')
@section('content')
<div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{$berita->judul}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{$berita->judul}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>{{$berita->created_at}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- Post Content -->
        <p>{{$berita->isi}}</p>
        <hr>

        <!-- Comments Form -->
            

        <div class="card my-4">
          <h5 class="card-header">Berikan Komentar</h5>
          <div class="card-body">
            <form role="form" action="/Berita" method="POST" >
              <div class="form-group">
                <textarea class="form-control"  name="judul" rows="3"></textarea>
                @error('judul')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                      

          </div>
        </div>

      </div>
    
@endsection