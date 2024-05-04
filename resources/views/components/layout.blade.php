<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="bg-black text-white">
    <div class="px-10">
      <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
          <a href="/">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
          </a>
        </div>
        <div class="space-x-6 font-bold">
          <a href="#">Jobs</a>
          <a href="#">Careers</a>
          <a href="#">Salaries</a>
          <a href="#">Companies</a>
        </div>
        <div>
          <a href="">Post a Job</a>
        </div>
      </nav>

      <main class="mt-10">
        {{ $slot }}
      </main>
    </div>
  </body>
</html>