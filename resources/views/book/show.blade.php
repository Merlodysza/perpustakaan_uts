@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')

<div class="card">
    <div class="card-header">
        Detail Buku
    </div>

    <div class="card-body">

        <p><b>Judul:</b> {{ $book->judul }}</p>

        <p><b>Penulis:</b> {{ $book->penulis }}</p>

        <p><b>Penerbit:</b> {{ $book->penerbit }}</p>

        <p><b>Tahun Terbit:</b> {{ $book->tahun_terbit }}</p>

        <p><b>Deskripsi:</b></p>

        <p>{{ $book->deskripsi }}</p>

        <a href="/book"
           class="btn btn-secondary">
           Kembali
        </a>

    </div>
</div>

@endsection