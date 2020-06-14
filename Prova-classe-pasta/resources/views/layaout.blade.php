<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prova pasta classe</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
  </head>
  <body>
    @include('header')
    {{-- <header>
        <img src="/img/icon.png" alt="">
        <p>CiaoBelli</p>
        <a href= "{{route ('welcome') }}">Welcome</a>
        <a href= "{{route ('home20') }}">Home20</a>
    </header> --}}


      @yield('pasta')
      @yield('pastaLungaLayout')



    @include ('footer')

    {{-- <footer>
      <p>ciao ciao</p>
    </footer> --}}

  </body>
</html>
