<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('book', ['books' => Book::all()]);
    }

    public function create()
    {
        return view('book.create');
    }

    public function show($id)
    {
        return view('book.show', ['book'=> Book::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('book.edit', ['book'=> Book::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'title' => 'required|min:2|max:15',
            'content' => 'required|min:10|max:500'
        ]);

        $book = Book::findOrFail($id);
        $book->title = $request->get('title');
        $book->content = $request->get('content');

        $book->save();

        return redirect()->route('book');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('book')->with('success', 'Book deleted');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|min:2|max:15',
            'content' => 'required|min:10|max:500'
        ]);

        $book = new Book();
        $book->title = $request->get('title');
        $book->content = $request->get('content');

        $book->save();

        return redirect()->route('book')->with('success', 'Book was added');
    }
}
