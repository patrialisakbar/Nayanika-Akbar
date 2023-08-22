@extends('mainapps')
@section('title') createstts @endsection
@section('content')
<div class="container py-3">
    <h3 class="fw-bold">Tambahkan Blog</h3>
    <div class="card">
        <div class="card-body">
            <form method="post" action="/saveblog" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" placeholder="nama penulis">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Post</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul post">
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Post</label>
                <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">

            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Post</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection