@extends('layouts.main')

@section('konten')
  <h2>{{ $post->title }}</h2>

  <p>by: Mina in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

  {!! $post->body !!}

  <a href="/posts">Back</a>


@endsection