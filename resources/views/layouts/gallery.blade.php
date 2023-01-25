<!doctype html>
<html lang="en">
  <head>
    <title>AgaVilla</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{url('')}}/villa/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('')}}/villa/css/animate.css">
    <link rel="stylesheet" href="{{url('')}}/villa/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('')}}/villa/css/aos.css">
    
    <link rel="stylesheet" href="{{url('')}}/villa/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="{{url('')}}/villa/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="icon" href="{{url('')}}/villa/agalogo/aga-logo-7.png">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{url('')}}/villa/css/style.css">
    @yield('scriptheader')
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-8">
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay" style="background-image: url('{{url('')}}/villa/agavillaimage/agavilla3/01_06130.JPG')">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <img src="{{url('')}}/villa/agalogo/aga-logo-8.png" height="150px" width="150px" data-aos="fade-up"/>
            <p data-aos="fade-up" data-aos-delay="100" style="color:white">
              Immerse yourself in peace, serenity and chilluxe.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section visit-section">
      <div class="container" style="margin:0px;max-width: 100%;">
        @yield('content')
      </div>
    </section>
    <!-- END section -->

    <footer class="section footer-section">
      <div class="container">
        <div class="row ">
          <p class="col-md-6 text-left" data-aos="fade-up">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | TK</p>
            
          <p class="col-md-6 text-right social">
            <img src="{{url('')}}/villa/agalogo/aga-logo-8.png" height="50px" width="50px"/>
          </p>
        </div>
      </div>
    </footer>
    
    <script src="{{url('')}}/villa/js/jquery-3.2.1.min.js"></script>
    <script src="{{url('')}}/villa/js/popper.min.js"></script>
    <script src="{{url('')}}/villa/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/villa/js/owl.carousel.min.js"></script>
    <script src="{{url('')}}/villa/js/aos.js"></script>
    <script src="{{url('')}}/villa/js/main.js"></script>
    @yield('scriptfooter')
  </body>
</html>