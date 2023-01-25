<!doctype html>
<html lang="en">
  <head>
    <title>AgaVilla</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{url('')}}/villa/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('')}}/villa/css/animate.css">
    <link rel="stylesheet" href="{{url('')}}/villa/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('')}}/villa/css/aos.css">
    
    <link rel="stylesheet" href="{{url('')}}/villa/fonts/ionicons/css/ionicons.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{url('')}}/villa/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="icon" href="{{url('')}}/villa/agalogo/aga-logo-7.png">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{url('')}}/villa/css/style.css">
    <link rel="stylesheet" href="{{url('')}}/villa/css/custom.css">
    @yield('scriptheader')
  </head>
  <body>
    <div class="scroll-up-btn show">
      <ion-icon name="arrow-up-outline"></ion-icon>
    </div>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo aos-init aos-animate" data-aos="fade-up"><a href="{{url('')}}/"><ion-icon name="arrow-back-outline"></ion-icon></a></div>
          <div class="col-8">
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-gallery overlay" style="background-image: url('{{url('')}}/villa/agavillaimage/agavilla3/DSCF7466.JPG')">
      <div class="container">
        <div class="row site-gallery-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <img src="{{url('')}}/villa/agalogo/aga-logo-8.png" height="120px" width="120px" data-aos="fade-up"/>
            <p data-aos="fade-up" data-aos-delay="100" style="color: #e61c5d;">
              @yield('breadcrumb')
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
    <script>
      $(document).ready(function () {
        // $(window).scroll(function () {
        //   if (this.scrollY > 100) {
        //     $(".scroll-up-btn").addClass("show");
        //   } else {
        //     $(".scroll-up-btn").removeClass("show");
        //   }
        // });

        $(".scroll-up-btn").click(function () {
          $("html").animate({ scrollTop: 0 });
          $("html").css("scrollBehavior", "auto");
        });
      });

    </script>
    @yield('scriptfooter')
  </body>
</html>