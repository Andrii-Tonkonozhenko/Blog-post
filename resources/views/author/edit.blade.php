@extends('layout')

@section('title', $author->name)

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

    <form method="POST" action="{{ route('author.update', ['author'=>$author->id]) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="name" placeholder="Write book's title" value="{{ $author->name }}" class="form-control"><br>
        <button type="submit" class="btn btn-success">To send</button>
    </form>
    <br>
@endsection
