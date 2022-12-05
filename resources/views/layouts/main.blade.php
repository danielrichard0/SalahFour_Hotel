<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Salah Four</title>
    <!--ICON HOTEL-->
    <link rel="icon" type="image/png" href="{{asset('/image/iconkcil.png')}}">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" >
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <link href="{{asset('/frontendmania.css')}}" rel="stylesheet" >
    <script src="https://kit.fontawesome.com/9b545c0800.js" crossorigin="anonymous"></script>
  </head>
  <body>
      @include('partials.navbar')
    <div>
      @yield('container') 
    </div>
  </body>
</html>