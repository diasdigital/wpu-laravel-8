@extends('layouts.main')

@section('konten')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="250" class="img-thumbnail rounded-circle">
@endsection