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
    @section('presentacion')
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">Panaderia</h1>
            <h2>El mejor pan dulce en Guadalajara, Jalisco desde 1964, somos ¡Tradición que Llega al Corazón!</h2>
            <!-- <p>¡¡Visitanos!!</p> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- / banner -->
  <!--about-->
 
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Conoce a Panadería Equipo 1</h1>
          <p class="header-p">Horneamos gran variedad de piezas de pan para todos los gustos por lo que estamos seguros de que encontrarás uno de tu agrado.
             Es importante destacar que seguimos estrictas normas de higiene por lo que podrás degustar tu pan de manera segura </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">La mas sabrosa </h2>
              <p>En Panadería Magallanes tenemos 50 años horneando pan casero. Somos una empresa familiar con amplia experiencia en la venta de pan con un sabor único el cual se obtiene gracias a que utilizamos
                materia prima de primera y hornos especiales que nos permiten ofrecer un producto de gran calidad.</p>
              <div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i>Excelente calidad</li>
                  <li><i class="fa fa-check"></i>Gran variedad</li>
                  <li><i class="fa fa-check"></i>Contamos con todas las medidas de salubridad </li>
                  <li><i class="fa fa-check"></i>Precio accecible</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="img/pan1.jpg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">Tenemos multiples servicos </h1>
            <p class="header-p">Confia en nuestra palabra</p>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="img/pan2.jpg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2>Conoce el sabor del buen pan</h2>
                  <p>Venta y elaboracion</p>
                  <address>
                              <strong>Lugar: </strong>
                              Guadalajra , Jalisco #1556
                              <br>
                              <strong>Horario: </strong>
                              08:30 AM - 05:00 PM
                            </address>
                  <a class="btn btn-imfo btn-read-more" href="Por agregar la Api">¡¡Conocenos!!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
  @yield('presentacion')
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
