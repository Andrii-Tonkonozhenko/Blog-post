@extends('layout')

@section('title') Library @endsection

@section('content')
    <h1>Library</h1>
    <h3>Our books:</h3>
    <br>


    @foreach($books as $book)
        <div class="alert alert-warning">
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
                <h3 class="my-0 mr-md-auto font-weight-normal">
                    <a href="{{ route('book.show', ['book'=>$book->id]) }}" class="text-reset">{{ $book->title }}</a>
                </h3>
                <p>Author: <a href="#" class="text-reset">{{ $book->author->name }}</a></p>
            </div>
        </div>
    @endforeach
@endsection

