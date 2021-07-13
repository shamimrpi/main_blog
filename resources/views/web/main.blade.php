<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Laravel Practics</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('web/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('web/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('web/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('web')}}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{asset('web')}}/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="{{asset('web')}}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{asset('web')}}/assets/vendor/aos/aos.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{asset('web')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Serenity - v2.2.1
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('web.header')

  @yield('content')



  @include('web.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('web')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('web')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('web')}}//vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{asset('web')}}//vendor/php-email-form/validate.js"></script>
  <script src="{{asset('web')}}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{asset('web')}}/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{asset('web')}}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{asset('web')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{asset('web')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('web')}}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('web')}}/assets/js/main.js"></script>
 
</body>

</html>