<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <base href="/">
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- <link rel="stylesheet" href="assets/css/main.min.css"> -->
  @foreach($stylesheets as $stylesheet)
    <link rel="stylesheet" href="{{ $stylesheet }}.css">
  @endforeach
  <meta name="csrf" value="{{ csrf() }}">
  <meta name="keywords" value="{{ $page->keywords }}">
  <meta name="description" value="{{ $page->description }}">
  <title>{{ $page->title }}</title>
</head>
<body>

  <header>
    @include(nav) 
  </header>

  <main class="{{$page->page_name}}">
    @content
  </main>

  <footer>
    @include(footer)
  </footer>

  <script src="assets/js/core/framework.js"></script>
  <script src="assets/js/main.js"></script>
  @foreach($scripts as $script)
    <script src="assets/js/{{ $script }}.js"></script>
  @endforeach
</body>
</html>