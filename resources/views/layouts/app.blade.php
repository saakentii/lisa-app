<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <link href="{{asset('assets/img/cookaist6.png')}}" rel="icon">
    <link href="{{asset('assets/img/cookaist6.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header id="header" class="d-flex align-items-center " style="background-color: #D8C7FC;">
            <div class="container d-flex justify-content-between align-items-center">

                <div class="logo">
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <h1><a href="{{route('resumes.index')}}"><img src="{{asset('uploads/cookaist6.png')}}" alt="" class="img-fluid"><i style="text-decoration: black;">CookAist</i></a></h1>
                </div>

                <nav id="navbar" class="navbar" style="font-family: Inter;">
                    <ul>
                        <li><a href="{{route('resumes.index')}}">Басты бет</a></li>
                        <li><a href="{{route('resumes.create')}}">Резюме құру</a></li>
                        <li><a href="{{route('resumes.list')}}">Резюмелер</a></li>
                        <li><a href="{{route('contact.index')}}">Контакт</a></li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Кіру') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Тіркелу') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Шығу') }}
                                    </a>

                                    @if(\Illuminate\Support\Facades\Auth::user()->role->role == 'Admin' || \Illuminate\Support\Facades\Auth::user()->role->role == 'Moderator')
                                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                            {{ __('Басқару панельі') }}
                                        </a>
                                    @endif

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="text-center text-white bg-dark">
            <div class="container p-3">
                <!-- Section: Social media -->
                    <div class="wrap">
                        <div class="social">
                            <!-- Facebook -->
                            <a class="btn  btn-floating m-1" href="#!" role="button">
                                <img src="{{asset('assets/img/face.png')}}" style="width:30px;height:30px;" alt="insta"></a>

                            <!-- Instagram -->
                            <a class="btn  btn-floating m-1" href="https://www.instagram.com/qr/" role="button">
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
                                    <a href="{{route('resumes.list')}}" class="text-white">Резюмелер</a>
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

            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
</html>
