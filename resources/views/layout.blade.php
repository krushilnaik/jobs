<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>Jobs</title>
</head>

<body class="p-2 transition-colors flex flex-col items-center min-h-screen">
  <header class="flex max-w-main w-full justify-between items-center">
    <h1 class="text-3xl font-semibold aspect-square w-[1.3em] center bg-sky-500 rounded-full">
      J
    </h1>

    <nav class="w-fit text-lg">
      <ul class="flex gap-4">
        <li><a class="nav-link" href="/">Home</a></li>
        <li><a class="nav-link" href="/listings">Listings</a></li>
        <li><a class="nav-link" href="/register">Login</a></li>
      </ul>
    </nav>
  </header>


  {{-- Inject Blade Content --}}
  <main class="max-w-main w-full grow center">@yield('content')</main>

  <footer class="text-slate-300">&copy; Krushil Naik 2022</footer>

  <x-flash-message />
</body>

</html>
