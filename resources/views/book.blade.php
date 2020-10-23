@extends('layout')

@section('title') Library @endsection

@section('content')
    <h1>Library</h1>
    <a href="{{ route('book.create') }}" class="btn btn-success">Add book</a>
    <h3>Our books:</h3>
    <br>


    @foreach($books as $book)
        <div class="alert alert-warning">
            <h3><a href="{{ route('book.show', $book) }}" class="text-reset">{{ $book->title }}</a>
                <a href="{{ route('book.edit', $book) }}"
                   style="margin-left: 100px" class="btn btn-primary">Edit</a>
                <form method="POST">
                    <a href="{{ route('book.destroy', $book) }}" class="btn btn-danger">Delete</a>
                    @csrf
                    @method('DELETE')
                </form>
            </h3>
            <p>{{ $book->message }}</p>
        </div>
    @endforeach


@endsection

