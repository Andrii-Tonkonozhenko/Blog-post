<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('book', ['books' => Book::all()]);
    }
}
