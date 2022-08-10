<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous">

    <link
      href="{{ asset('/css/styles.css') }}"
      rel="stylesheet">

    <script
      src="{{ asset('/js/scripts.js') }}"
      type="text/javascript">
    </script>
  </head>
  <body>
    @yield('content')
    <footer>
      <p>HDC Events &copy; 2020</p>
    </footer>
  </body>
</html>
