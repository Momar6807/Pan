<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Dashboard</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">



    <style>
      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('dashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    
  @include('dashboard.nav')

<div class="container-fluid">
  <div class="row">
    @include('dashboard.sidebar')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      
      @yield('content')
      
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="{{asset('dashboard.js')}}"></script>
  </body>
</html>
