@extends('layouts.main')

@section('container')
  <h1 class="py-6 text-3xl font-light text-center sm:text-4xl">Posts</h1>
  @foreach ($posts as $post)
  <article class="border-b border-slate-400">
  <div class="flex items-center justify-between w-full my-5">
    <div class="h-full">
      <h2 class="text-lg font-semibold sm:text-2xl">
      <a class="underline" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
      <h5 class="font-normal sm:font-medium">
        <a href="/authors/{{ $post->user->id }}">by. {{ $post->user->name }}</a>
      </h5>
    </div>
    <div class="flex flex-col items-start justify-start h-full">
      <a href="/categories/{{ $post->category->slug }}" class="px-2 py-1 text-sm text-center text-white bg-black cursor-pointer rounded-xl hover:bg-slate-700 sm:text-lg">{{ $post->category->name }}</a>
    </div>
  </div>
    <p class="mb-5 text-sm font-light text-justify sm:text-base">{{ $post->excerpt }}</p>
    </article>
  @endforeach
@endsection
