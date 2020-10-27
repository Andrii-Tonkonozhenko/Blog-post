@extends('layout')

@section('title') Author @endsection

@section('content')
        <h2>Authors</h2>
    @foreach($authors as $author)
        <div class="alert alert-warning">
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
                <h3 class="my-0 mr-md-auto font-weight-normal">
                    <a href="{{ route('author.show', ['author'=>$author->id]) }}" class="text-reset">{{ $author->name }}</a>
                </h3>
            </div>
        </div>
    @endforeach

@endsection('content')
