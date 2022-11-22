<!DOCTYPE html>
<html lang="en">
<head>
  @include('plantilla.head');
  <title>PANADERIA</title>
</head>

<body style="background-image: url('/img/slides/index1.png')">
    <header class="top">
        <div class="fixedArea">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 noPadding">
                    <div class="content-wrapper one">
                        <header class="header">
                            @include('plantilla.header')
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </header>




    <main class="py-4" style="background-image: url('/img/slider/index1.png')">

        @yield('content')

        <br><br><br><br><br><br><br>
    </main>




    </div>

    @include('plantilla.footer')
</body>



