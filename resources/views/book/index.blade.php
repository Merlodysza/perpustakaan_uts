@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')

<div class="table-responsive">

    <table class="table table-bordered border-dark table-striped align-middle">>
        <thead class="bg-primary text-white">>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th width="220">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $book->judul }}</td>

                <td>{{ $book->penulis }}</td>

                <td>{{ $book->penerbit }}</td>

                <td>{{ $book->tahun_terbit }}</td>

                <td>

                    <a href="/book/{{ $book->id }}"
                       class="btn btn-primary btn-sm">
                        Detail
                    </a>

                    <a href="/book/{{ $book->id }}/edit"
                       class="btn btn-dark btn-sm">
                        Edit
                    </a>

                    <form action="/book/{{ $book->id }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus buku ini?')">
                        Hapus
                    </button>

                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection