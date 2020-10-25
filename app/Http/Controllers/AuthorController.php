<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('author.index', ['authors' => Author::all()]);
    }

    public function show($id)
    {
        return view('author.show', ['author'=> Author::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('author.edit', ['author'=> Author::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'name' => 'required|min:2|max:15',
        ]);

        $author = Author::findOrFail($id);
        $author->name = $request->get('name');

        $author->save();

        return redirect('/author');
    }

    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();

        return redirect('/author')->with('success', 'Book deleted');
    }
}
