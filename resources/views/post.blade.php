@extends('layouts.main')

@section('konten')

  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h2 class="mb-3">{{ $post->title }}</h2> 

      <p>by: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

      @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar {{ $post->title }}" class="img-fluid"> 
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid"> 
      @endif

      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>

      <a href="/posts" class="d-block mt-5">Back</a>
    </div>
  </div>


  

  


@endsection