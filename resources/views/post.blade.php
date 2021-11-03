@extends('layouts.main')

@section('konten')

  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h2 class="mb-3">{{ $post->title }}</h2> 

      <p>by: <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">

      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>

      <a href="/posts" class="d-block mt-5">Back</a>
    </div>
  </div>


  

  


@endsection