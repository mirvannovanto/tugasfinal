@extends('master')
@section('content')
@if (session('success'))
  <div class="alert alert-success" >
   {{session('success')}}
  </div>
  @endif
    @include('layouts.blogentries')
    
@endsection