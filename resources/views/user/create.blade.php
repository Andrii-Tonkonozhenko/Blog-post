@extends('layout')

@section('title') Register @endsection

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
    <form method="post" action="{{ route('user.store') }}">
        @csrf
        <input type="text" name="name" id="name" placeholder="Write your name" class="form-control"><br>
        <input type="email" name="email" id="email" placeholder="Write your email" class="form-control"><br>
        <input type="password" name="password" id="password" placeholder="Write your password" class="form-control"><br>
        <button type="submit" class="btn btn-success">To send</button>
    </form>
    </div>
    <br>
@endsection
