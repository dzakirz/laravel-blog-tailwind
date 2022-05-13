@extends('layouts.main')

@section('container')
  <h1 class="py-6 text-3xl font-light text-center sm:text-4xl">{{ $post->title }}</h1>
  <div class="flex items-center justify-between w-full my-6 ">
    <h2 class="text-lg italic sm:text-2xl">
      <a href="#">by. {{ $post->user->name }}</a>
    </h2>
    <a href="/categories/{{ $post->category->slug }}" class="h-full px-2 py-1 text-sm text-white bg-black cursor-pointer rounded-xl hover:bg-slate-700 sm:text-lg">Category: {{ $post->category->name }}</a>
  </div>
    <p class="mb-12 text-sm font-light text-justify sm:text-base">{{ $post->body }}</p>
    <div class="flex justify-end w-full">
      <a href="/posts" class="text-xl font-semibold underline">Back</a>
    </div>
@endsection



{{-- Post::create([
  'title' => 'Python For Data Science',
  'category_id' => 1,
  'slug' => 'python-for-data-science',
  'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates ea corporis eligendi deleniti ratione omnis laudantium? Maiores temporibus numquam corporis nemo recusandae sequi accusamus? Blanditiis, dolorem. Placeat, praesentium distinctio veniam eos maxime sint adipisci modi reprehenderit, esse sed itaque deserunt ipsum officiis, ratione hic. Quisquam voluptas sapiente, fuga et nesciunt quis ullam temporibus assumenda pariatur quod cupiditate, sequi, illum accusamus? Inventore repudiandae necessitatibus eos corporis excepturi ab officiis repellat aliquid distinctio in possimus optio.',
  'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptates ea corporis eligendi deleniti ratione omnis laudantium? Maiores temporibus numquam corporis nemo recusandae sequi accusamus? Blanditiis, dolorem. Placeat, praesentium distinctio veniam eos maxime sint adipisci modi reprehenderit, esse sed itaque deserunt ipsum officiis, ratione hic. Quisquam voluptas sapiente, fuga et nesciunt quis ullam temporibus assumenda pariatur quod cupiditate, sequi, illum accusamus? Inventore repudiandae necessitatibus eos corporis excepturi ab officiis repellat aliquid distinctio in possimus optio, et ex consectetur accusantium voluptatibus iusto accusamus modi alias, dolores quidem provident veniam vel. Quos enim reprehenderit a dolor quod unde quibusdam, consequatur illo earum est obcaecati voluptate ad libero, voluptas cupiditate optio repellat ipsa pariatur, reiciendis ea blanditiis odio quae quo! Atque corporis quasi aliquam excepturi itaque nemo autem earum tenetur, inventore, asperiores, praesentium pariatur quo tempore quos! Deserunt repudiandae repellendus enim dolor ex quod in adipisci consequatur earum dolores velit ullam, sed sint corporis doloribus explicabo consequuntur. Nesciunt quaerat quam amet, harum commodi.'
]); --}}


{{-- Category::create([
  'name' => 'Personal',
  'slug' => 'personal'
]) --}}