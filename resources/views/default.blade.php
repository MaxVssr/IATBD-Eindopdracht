<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/master.css">
    <script src="https://kit.fontawesome.com/3524fdec76.js" crossorigin="anonymous"></script>
    <script src="/js/main.js" defer></script>
    <title>Time2Share</title>
    @yield('head-extra')
</head>
<body>

  @include('components.navigation')

  <main class="main">
    @yield('content')
    @yield('footer')
  </main>
</body>
</html>