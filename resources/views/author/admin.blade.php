@extends('layout')

@section('title') Author @endsection

@section('content')
    @foreach($authors as $author)
        <div class="alert alert-warning">
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
                <h3 class="my-0 mr-md-auto font-weight-normal">
                    <a href="{{ route('author.show', ['author'=>$author->id]) }}" class="text-reset">{{ $author->name }}</a>
                </h3>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 text-white btn btn-primary" href={{ route('author.edit', ['author'=>$author->id]) }}>Edit</a>
                </nav>
                <form method="POST" action="{{ route('author.destroy', ['author' =>$author->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash">DELETE</i>
                    </button>
                </form>
            </div>
        </div>
    @endforeach

@endsection('content')
