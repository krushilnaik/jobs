<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>Jobs</title>
</head>

<body class="dark:bg-[#181820] dark:text-slate-200 transition-colors">
  <h1 class="text-5xl">Jobs</h1>

  {{-- Inject Blade Content --}}
  @yield('content')
</body>

</html>
