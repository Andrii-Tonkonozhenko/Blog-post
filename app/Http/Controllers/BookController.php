<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('book.admin', ['books' => Book::all()]);
    }

    public function create()
    {
        return view('book.create', ['authors' => Author::all()]);
    }

    public function show($id)
    {
        return view('book.show', ['book'=> Book::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('book.edit', ['book'=> Book::findOrFail($id), 'authors' => Author::all()]);
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
        $book->author_id = $request->get('author_id');

        $book->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/')->with('success', 'Book deleted');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|min:2|max:15',
            'content' => 'required|min:10|max:500'
        ]);

        $data = $request->all();
        $book = new Book();
        $book->title = $request->get('title');
        $book->content = $request->get('content');
        $book->author_id = $request->get('author_id');

        $book->save();

        return redirect('/')->with('success', 'Book was added');
    }


}
