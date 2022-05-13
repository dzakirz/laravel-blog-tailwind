@extends('layouts.main')

@section('container')
  <h1 class="py-6 text-3xl font-light text-center sm:text-4xl">Post Categories</h1>
  @foreach ($categories as $category)
    <h2 class="mt-5 text-2xl font-semibold">
      <a class="underline" href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
    </h2>
  @endforeach 
@endsection
