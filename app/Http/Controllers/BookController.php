<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('book.index', compact('books'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required|integer|min:1945'
    ]);

        Book::create($request->all());

        return redirect('/book');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('book.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('book.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required|integer|min:1945'
    ]);

        $book = Book::findOrFail($id);

        $book->update($request->all());

        return redirect('/book');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        return redirect('/book');
    }
}