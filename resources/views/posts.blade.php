@extends('layout')

@section('title') Posts @endsection

@section('content')
        <h1>Our Posts</h1>
        <br>
            @foreach($blogPosts as $post)
                <div class="alert alert-warning">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->message }}</p>
                </div>
            @endforeach
@endsection
