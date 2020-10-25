@extends('layout')

@section('title', $book->title)

@section('content')
    <h1>Edit</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('book.update', ['book'=>$book->id]) }}">
        @csrf
        @method('PUT')
        <label>Author</label>
        <select class="form-control" name="author_id">
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{$author->name}}</option>
            @endforeach
        </select><br>
        <input type="text" name="title" id="title" placeholder="Write book's title" value="{{ $book->title }}" class="form-control"><br>
        <textarea name="content" id="content" class="form-control" placeholder="Write your book">{{ $book->content }}</textarea><br>
        <button type="submit" class="btn btn-success">To send</button>
    </form>
    <br>
@endsection

