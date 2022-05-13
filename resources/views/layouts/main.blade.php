<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>My Blog | {{ $title }}</title>
</head>
<body class="bg-slate-100">
  
  @include('partials.navbar')

  <section class="w-full pt-[60px] sm:px-14 md:px-24 lg:px-40 xl:px-64 px-10" >
    @yield('container')
  </section>
</body>
</html>