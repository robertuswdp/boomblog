@extends('layouts.main')

@section('container')

        <h1 class="mb5">{{ $post->title }}</h1>

        <p>By. Satine Zaneta in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}

    <a href="/posts" class="d-block mt-3">Back to Posts</a>

@endsection