@extends('mainapps')
@section('title') Home @endsection
@section('content')
<section id="header" class="header">
    <div>
  <div class="text-white" ><h1>Selamat Datang Di blog Mata-Mata</h1></div>
 </div>
</section>
<section id="blog" class="py-5">
  <div class="container">
    <a href="create" class="btn btn-secondary fw-bold">Tambahkan Blog Anda</a>
  @foreach ($posts as $post)
  <div class="card mb-3 mt-3" style="">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('storage/' . $post->gambar) }}" width="100%" 
      class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <div class="d-flex justify-content-end">
  <div class="btn-group" role="group">
    <button type="button" class="" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-text-left"></i>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="edit/{{ $post->id }}">Edit</a></li>
      <li><a class="dropdown-item" href="delete/{{ $post->id }}">Delete</a></li>
    </ul>
  </div>
</div>
        <h4 class="card-title fw-bold">{{ $post->judul }}</h4>
        <p class="card-text">{{ $post->isi }}</p>
        <p class="card-text"><small class="text-body-secondary">{{ $post->penulis }}</small>
        <a href="" class="btn"><i class="bi bi-hand-thumbs-up"></i>Like</a>
        <a href="" class="btn"><i class="bi bi-chat-left-dots"></i>Coment</a></p>
      </div>
    </div>
  </div>@endforeach
  </div>
</div>

</section>
@endsection