<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') / {{ config('app.name', 'Hospital System') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <!-- navbar starts -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info py-0">
            <div class="container">
                <a class="navbar-brand py-0" href="{{ route('home') }}">
                    <img src="images/logo.jpg" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase oswald-reg fs-16 text-white" aria-current="page"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase oswald-reg fs-16 text-white"
                                href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase oswald-reg fs-16 text-white"
                                href="{{ route('schedule') }}">Doctor's Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase oswald-reg fs-16 text-white"
                                href="{{ route('record') }}">Medical Record</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase oswald-reg fs-16 text-white"
                                href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase oswald-reg fs-16 text-white"
                                href="{{ route('patient-dashboard') }}">Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase oswald-reg fs-16 text-white"
                                href="{{ route('contact') }}">Contact Us</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        <!-- navbar ends -->


        <main class="py-4">
            @yield('content')
        </main>

        <!-- footer starts -->

        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="footer-bottom">
                            <p class="mb-0 open-reg fs-14 text-center">Copyright &copy; All rights reserved by
                                <span>HSGP</span>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer ends -->

    </div>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
