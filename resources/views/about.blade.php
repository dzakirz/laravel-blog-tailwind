
@extends('layouts.main')

@section('container')
  <h1 class="py-6 text-3xl font-light text-center sm:text-4xl">About</h1>
  <div class="flex flex-col items-center w-full">
    <img class="w-40 h-auto rounded-full" src="images/{{ $gambar }}" alt="dzaki">
    <h3 class="mt-5 text-lg font-medium">{{ $nama }}</h3>
    <p>{{ $email }}</p>
  </div>
@endsection
