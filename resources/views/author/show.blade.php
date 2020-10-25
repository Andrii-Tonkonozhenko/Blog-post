@extends('layout')

@section('title', $author->name)

@section('content')
    <h1>{{ $author->name }}</h1>

    <p>Added {{ $author->created_at->diffForHumans() }}</p>

@endsection('content')
