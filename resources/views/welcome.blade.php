<!DOCTYPE html>
<html lang="en">

<head>
  @include('plantilla.head');
  <title>PANADERIA</title>
</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      @include('plantilla.header')
      @include('plantilla.presentacion')
  
  @yield('main')
  <!--/ event -->

  <!-- menu -->


  @include('secciones')

  @yield('menu')
  <!--/ menu -->
  <!-- contact -->
  @yield('contacto')
  <!-- / contact -->
  <!-- footer -->

  @include('plantilla.footer')
  @yield('footer')
  <!-- / footer -->

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('contactform/contactform.js') }}"></script>

</body>

</html>