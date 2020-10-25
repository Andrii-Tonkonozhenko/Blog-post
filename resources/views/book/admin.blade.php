@extends('layout')

@section('title') Library @endsection

@section('content')
    <h1>Library</h1>
    <a href="{{ route('book.create') }}" class="btn btn-success">Add book</a>
    <h3>Our books:</h3>
    <br>


    @foreach($books as $book)
        <div class="alert alert-warning">
            <div
                class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
                <h3 class="my-0 mr-md-auto font-weight-normal"><a href="{{ route('book.show', ['book'=>$book->id]) }}"
                                                                  class="text-reset">{{ $book->title }}</a></h3>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 text-white btn btn-primary"
                       href={{ route('book.edit', ['book'=>$book->id]) }}>Edit</a>
                </nav>
                <form method="POST" action="{{ route('book.destroy', ['book'=>$book->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash">DELETE</i>
                    </button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
