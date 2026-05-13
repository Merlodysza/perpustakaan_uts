@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/book/{{ $book->id }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Judul</label>
        <input type="text"
               name="judul"
               class="form-control"
               value="{{ $book->judul }}">
    </div>

    <div class="mb-3">
        <label>Penulis</label>
        <input type="text"
               name="penulis"
               class="form-control"
               value="{{ $book->penulis }}">
    </div>

    <div class="mb-3">
        <label>Penerbit</label>
        <input type="text"
               name="penerbit"
               class="form-control"
               value="{{ $book->penerbit }}">
    </div>

    <div class="mb-3">
        <label>Tahun Terbit</label>
        <input type="number"
               name="tahun_terbit"
               class="form-control"
               value="{{ $book->tahun_terbit }}">
    </div>
    <div class="mb-3">
        <label>Deskripsi Buku</label>

        <textarea name="deskripsi"
                class="form-control"
                rows="5">{{ $book->deskripsi }}</textarea>
    </div>
    <button type="submit"
            class="btn btn-warning">
        Update
    </button>

    <a href="/book"
       class="btn btn-secondary">
       Kembali
    </a>

</form>

@endsection