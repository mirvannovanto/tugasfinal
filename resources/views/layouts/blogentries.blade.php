
<div class="row">
  
    <!-- Blog Entries Column -->
    <div class="col-md-8">
     
      <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>

      <!-- Blog Post -->
      @forelse ($berita as $key=>$kolom)
      <div class="card mb-4">
        <img class="card-img-top" style="width: 20rem;" src="{{asset('portalberita/img/contoh.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">{{$kolom->judul}}</h2>
          <p class="card-text">{{$kolom->isi}}</p>
          <a href="/Berita/{{$kolom->id}}" class="btn btn-primary">liat komentar</a>
          <a href="/Berita/{{$kolom->id}}/edit" class="btn btn-primary">edit</a>

        </div>
        <div class="card-footer text-muted">
         Dibuat pada : {{$kolom->created_at}}
          <a href="#">Kelompok 10</a>
        </div>
      </div>
      @empty
      <td colspan="3" align="center"> <h3> BELUM ADA BERITA MASUK </h3> </td>
      @endforelse
        
    </div>
      
     


    @include('layouts.sidebar')
    
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
  <!-- /.row -->