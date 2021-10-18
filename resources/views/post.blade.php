@extends('layouts.main')

@section('konten')
  <h2>{{ $post->title }}</h2>

  {!! $post->body !!}

  <a href="/posts">Back</a>


@endsection