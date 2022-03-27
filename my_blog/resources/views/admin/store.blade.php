@extends('layouts.app')

@section('content')
    <h1>Create New Blog</h1>
    <form action="{{ route('movies.store') }}" method="post">
        @csrf
        @error('content')
            {{ $message }}
            <br>
        @enderror
        <div>title</div>
        <textarea name="title" cols="30" rows="5"></textarea>
        <br>
        <div>image_url</div>
        <textarea name="image_url" cols="30" rows="5"></textarea>
        <input type="submit" value="保存">
    </form>
@endsection
