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

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{url('')}}/villa/css/style.css">
    @yield('scriptheader')
    <style>
.scrolldown{ position:absolute; width:200px; bottom:10px; left:50%; margin-left:-100px; z-index:3000; font-size:20px; text-align:center;}
    </style>
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

    <section class="site-hero overlay" style="background-image: url('{{url('')}}/gallery/3.jpg')">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">AGA <em>Villa</em></h1>
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
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Help</a></li>
             <li><a href="#">Rooms</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">Our Location</a></li>
              <li><a href="#">The Hosts</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Restaurant</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <p><span class="d-block">Address:</span> <span> 98 West 21th Street, Suite 721 New York NY 10016</span></p>
            <p><span class="d-block">Phone:</span> <span> (+1) 435 3533</span></p>
            <p><span class="d-block">Email:</span> <span> info@yourdomain.com</span></p>
          </div>
          <div class="col-md-3 mb-5">
            <p>Sign up for our newsletter</p>
            <form action="#" class="footer-newsletter">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your email...">
                <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
              </div>
            </form>
          </div>
        </div>
        <div class="row bordertop pt-5">
          <p class="col-md-6 text-left">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            
          <p class="col-md-6 text-right social">
            <a href="#"><span class="fa fa-tripadvisor"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
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