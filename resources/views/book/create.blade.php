@extends('layout')

@section('title') Add Book @endsection

@section('content')
    <h1>Add Book</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('book.store') }}">
        @csrf
        <input type="text" name="title" id="title" placeholder="Write your title" class="form-control"><br>
        <textarea name="content" id="content" class="form-control" placeholder="Write your message"></textarea><br>
        <button type="submit" class="btn btn-success">To send</button>
    </form>
    <br>
@endsection
