<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
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

    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('book.edit', ['book'=> $book, 'authors' => Author::all()]);
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $valid = $request->validated();

        $book->update(request()->all());
        $book->save();

        return redirect('/');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/')->with('success', 'Book deleted');
    }

    public function store(StoreBookRequest $request)
    {

        $valid = $request->validated();

        $book = new Book();
        $book->title = $request->get('title');
        $book->content = $request->get('content');
        $book->author_id = $request->get('author_id');

        $book->save();

        return redirect('/')->with('success', 'Book was added');
    }
}
