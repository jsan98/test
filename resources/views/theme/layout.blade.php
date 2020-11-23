<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Web Playgraund</title>


    <!-- Favicons -->
    <link href={{asset("assets/img/favicon.png" )}}rel="icon">
    <link href={{asset("assets/img/apple-touch-icon.png")}} rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href={{asset("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900")}} rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}}  rel="stylesheet">
  <link href={{asset("assets/vendor/icofont/icofont.min.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/animate.css/animate.min.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/venobox/venobox.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/owl.carousel/assets/owl.carousel.min.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/aos/aos.css")}} rel="stylesheet">

<!-- Template Main CSS File -->
<link href={{asset("assets/css/style.css")}} rel="stylesheet">

</head>

<body>
<!-- ======= Header ======= -->
@include('theme.header');
<!-- End Header -->

<!-- ======= carrucel Section ======= -->
@include('theme.carrucel')
<!-- End carrucel -->

<main id="main">

<!-- =======  Seccion nosotros======= -->
@include('theme.nosotros')
<!-- seccion nosotros -->



<!-- ======= Sobre el proyecto ======= -->

<!-- sobre el proyecto -->



<!-- ======= conteo de sistema ======= -->


<!-- End conteo de sistema -->


<!-- ======= Seccion de Servicios ======= -->

<!-- Fin Seccion de Servicios -->



<!-- ======= Our Portfolio Section ======= -->
@include('theme.Portfolio')

<!-- End Our Portfolio Section -->



<!-- ======= Team Hola Mundo ======= -->
@include('theme.teamholamundo')

<!-- End Team Hola Mundo -->



<!-- ======= Frequently Asked Questions Section ======= -->

<!-- End Frequently Asked Questions Section -->



<!-- ======= Contact Us Section ======= -->

<!-- End Contact Us Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('theme.footer')
<!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src={{asset("assets/vendor/jquery/jquery.min.js")}}></script>
<script src={{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<script src={{asset("assets/vendor/jquery.easing/jquery.easing.min.js")}}></script>
<script src={{asset("assets/vendor/php-email-form/validate.js")}}></script>
<script src={{asset("assets/vendor/jquery-sticky/jquery.sticky.js")}}></script>
<script src={{asset("assets/vendor/venobox/venobox.min.js")}}></script>
<script src={{asset("assets/vendor/waypoints/jquery.waypoints.min.js")}}></script>
<script src={{asset("assets/vendor/counterup/counterup.min.js")}}></script>
<script src={{asset("assets/vendor/owl.carousel/owl.carousel.min.js")}}></script>
<script src={{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
<script src={{asset("assets/vendor/aos/aos.js")}}></script>

<!-- Template Main JS File -->
<script src={{asset("assets/js/main.js")}}></script>

</body>

</html>
