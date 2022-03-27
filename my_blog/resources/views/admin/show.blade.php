@extends('layouts.app')

@section('content')
    <div class="w-100 d-flex justify-content-between align-items-center flex-column gap-4">
        <div class="w-100 d-flex justify-content-between align-items-end">
            <h1>{{ $blog_info->title }}</h1>
            <nav class="d-flex justify-content-center align-items-center gap-2">
                <a class="btn border border-primary text-primary"
                    href="{{ route('blogs.edit', ['blog_id' => $blog_info->id]) }}">
                    編集
                </a>
                <a href="{{ route('blogs.delete', ['blog_id' => $blog_info->id]) }}">削除</a>
            </nav>
        </div>
        <div>{{ $blog_info->body }}</div>
    </div>
@endsection
