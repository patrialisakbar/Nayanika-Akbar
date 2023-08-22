@extends('mainapps')
@section('title') edit @endsection
@section('content')
<div class="container py-3">
    <h3 class="fw-bold">Edit Blog</h3>
    <div class="card">
        <div class="card-body">
            <form method="post" action="/updateblog/{{ $posts->id }}"enctype="multipart/form-data">
                @method('PUT')
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $posts->penulis }}">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Post</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $posts->judul }}">
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Post</label>
                <textarea class="form-control" name="isi" id="isi" cols="30" rows="10" value="{{ $posts->isi }}"></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                <input type="hidden" name="oldimage" value="{{ $posts->gambar }}">
                <img src="{{ asset('storage/' . $posts->gambar) }}" 
                class="img-thumbnail mt-3" width="40%" alt="Foto">
            </div>
            <div class="text-end">
                <a href="/home" class="btn btn-primary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection