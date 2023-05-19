<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/cookaist6.png')}}" rel="icon">
    <link href="{{asset('assets/img/cookaist6.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assetss/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assetss/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetss/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assetss/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetss/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetss/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assetss/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio - v3.9.1
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            @yield('photo')
            @yield('name')
            <div class="social-links mt-3 text-center">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Басты бет</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Мен туралы</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Ақпараттар</span></a></li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Рецептер</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Контакт</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
    @yield('main')
<!-- End Hero -->

<main id="main">
    @yield('content')
    <section id="about" class="about">
        <div class="container">
            @yield('about')
        </div>
    </section>

    <section id="resume" class="resume">
        <div class="container">
            @yield('resume')
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            @yield('contact')
        </div>
    </section>
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer class="text-center text-white bg-dark services">
    <div class="container p-3">
        <!-- Section: Social media -->
        <div class="wrap">
            <div class="social">
                <!-- Facebook -->
                <a class="btn  btn-floating m-1" href="#!" role="button">
                    <img src="{{asset('assets/img/face.png')}}" style="width:30px;height:30px;" alt="insta"></a>

                <!-- Instagram -->
                <a class="btn  btn-floating m-1" href="#!" role="button">
                    <img src="{{asset('assets/img/insta.png')}}" style="width:30px;height:30px;"></a>

                <!-- Linkedin -->
                <a class="btn  btn-floating m-1" href="#!" role="button"
                ><img src="{{asset('assets/img/ln.png')}}" style="width:30px;height:30px;"></a>

                <!-- Github -->
                <a class="btn  btn-floating m-1" href="#!" role="button"
                ><img src="{{asset('assets/img/git.png')}}" style="width:30px;height:30px;"></a>
            </div>
        </div>
        <!-- Section: Social media -->

        <!-- Section: Links -->
        <div class="row">
            <div class="col-lg-6 mb-md-0">
                <h5 class="text-uppercase">Барлық ақпарат</h5>

                <ul class="list-unstyled mb-0">

                    <li>
                        <a href="{{route('resumes.create')}}" class="text-white">Резюме құру</a>
                    </li>
                    <li>
                        <a href="{{route('resumes.list')}}" class="text-white">Резюмелер</a>
                    </li>
                    <li>
                        <a href="{{route('contact.index')}}" class="text-white">Контакт</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6  mb-md-0">
                <h5 class="text-uppercase">Қызметтер</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white"></a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Резюмелер</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: black;">
        © 2022 Copyright:
        <a class="text-white" href="#">DREAM HUNTERS</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assetss/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assetss/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assetss/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assetss/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assetss/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assetss/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assetss/vendor/typed.js/typed.min.js')}}"></script>
<script src="{{asset('assetss/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('assetss/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assetss/js/main.js')}}"></script>

</body>

</html>
