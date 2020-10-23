@extends('layout')

@section('title', $book->title)

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>{{ $book->content }}</p>

    <p>Added {{ $book->created_at->diffForHumans() }}</p>

@endsection('content')
