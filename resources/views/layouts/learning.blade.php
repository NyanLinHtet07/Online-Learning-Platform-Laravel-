<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Learning</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('web/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('web/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('web/css/style.css') }}" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">OL</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/learning">Home</a></li>
          <li><a href="#goals">Learning Center</a></li>
       
          <li> <form method="POST" action="{{ route('logout') }}">
                        @csrf
                   <button class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('Are you sure you want to logout')">
                         <i class="fa fa-power-off"></i>
                        Log Out
                    </button> 
            </form>
        </li>
         
        
         
        
        
      
                     
                   
      </nav><!-- .nav-menu -->

      

      
          
        
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 
  <section id="hero" class="d-flex align-items-center">
       
    
    <div class="container">
     
      <div class="row">
       
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{ asset('images/group_learning.gif') }}" class="img-fluid animated" alt="">
        </div>

         <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Elegant and creative solutions</h1>
          <h2>We are team of talanted designers making websites with Bootstrap</h2>
          <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Top Up Here</a>
           
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">    
      @yield('content')<!-- End #main -->

  </main> 
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>eNno</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
          </div>
        </div>

        

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>eNno</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="#">Infinnity</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('web/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('web/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('web/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('web/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('web/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('web/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('web/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('web/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('web/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('web/js/main.js') }}"></script>

</body>

</html>