@extends('layouts.main')

@section('konten')

    <h2 class="mb-5">Category Post: {{ $category }}</h2>

    @foreach ($posts as $post)
    <article>
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach

    
@endsection