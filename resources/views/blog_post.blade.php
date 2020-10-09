@extends('layout')

@section('title')Отзывы@endsection

@section('content')
    <h1>Add Blog Post</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/blog_post/check">
        @csrf
        <input type="text" name="title" id="title" placeholder="Write your title" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Write your message"></textarea><br>
        <button type="submit" class="btn btn-success">To send</button>
    </form>
    <br>
@endsection
