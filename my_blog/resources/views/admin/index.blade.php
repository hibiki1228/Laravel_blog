@extends('layouts.app')

@section('content')
    <div class="w-100 d-flex justify-content-between align-items-center flex-column gap-4">
        <div class="w-100 d-flex justify-content-between align-items-end">
            <h2>Blog一覧</h2>
            <a class="btn border border-primary text-primary" href="{{ route('blogs.create') }}">
                作成
            </a>
        </div>
        <div>
            <div class="container w-100">
                <div class="row row-cols-auto gap-4 justify-content-center">
                    @foreach ($blog_infos as $blog_info)
                        <div>{{ $blog_info->title }} |</div>
                        <div>{{ $blog_info->body }} |</div>
                        {{-- <a class="col d-flex justify-content-between align-items-center flex-column gap-2" style="text-decoration: none;" href="{{ route('blogs.show', ['blog_id' => $blog_info->id]) }}"><img class="rounded" style="width: 304px; height: 228px; object-fit: cover;" src="{{ $blog_info->title }}"/></a> --}}

                        {{-- <h3 class="text-dark">{{ $blog_info->mainScript }}</h3> --}}
                        <br>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
