<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Sistem Pakar, Forward Chaining, Penyakit Tanaman Cabai">
    <meta name="description"
        content="Sistem pakar untuk mendeteksi/mendiagnosis penyakit pada tanaman cabai dengan algoritma forward chaining">

    <link rel="icon" href="{{ asset('favicon-cabai.ico') }}">
    <title>@yield('title') {{ config('app.name') }}</title>

    <!-- Preconnect & Preload Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preload" as="style" href="{{ asset('/assets/css/user/splash-screen.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/user/splash-screen.css') }}">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="preload"
        as="style" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- Custom & Library Styles -->
    <link rel="preload" as="style" href="{{ asset('/assets/css/user/style.css') }}">
    @stack('styleLibraries')
    <link rel="stylesheet" href="{{ asset('/assets/css/user/style.css') }}">
    <link rel="preload" as="style" href="{{ asset('/assets/vendor/aos/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/aos/aos.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/chocolat/chocolat.css') }}" type="text/css" media="screen">
    @stack('stylePerPage')

    <!-- Custom Style Overrides -->
    <style>
        :root {
            --primary-color:rgb(209, 216, 223); 
            --primary-hover:rgb(80, 18, 42);
            --secondary-color: #2f9e44;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            position: relative;
        }
        
        .navbar {
            transition: var(--transition);
            padding: 1rem 0;
            background-color: var(--primary-color);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-scrolled {
            padding: 0.5rem 0;
            background-color: var(--primary-color) !important;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-custom1 {
            background-color: var(--primary-color);
            color: white;
            border: none;
            transition: var(--transition);
            font-weight: 500;
        }
        
        .btn-custom1:hover {
            background-color: var(--primary-hover);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(233, 72, 34, 0.3);
        }
        
        .section {
            padding: 5rem 0;
        }
        
        .card {
            border-radius: 12px;
            overflow: hidden;
            transition: var(--transition);
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .navbar .nav-link, .navbar .navbar-brand {
            color: white !important;
        }


        .navbar .nav-link:hover {
            color: rgba(255, 255, 255, 0.85) !important;
        }
                        
        .nav-pills .nav-link {
            margin: 0.25rem;
            border-radius: 8px;
            color: var(--dark-color);
            transition: var(--transition);
        }
        
        .nav-pills .nav-link.active {
            background-color: var(--primary-color);
        }
        
        .nav-pills .nav-link:hover:not(.active) {
            background-color: rgba(233, 72, 34, 0.1);
        }
        
        #upScroll {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            transition: var(--transition);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 999;
        }
        
        #upScroll:hover {
            background-color: var(--primary-hover);
            transform: translateY(-3px);
        }
        
        #upScroll.show {
            opacity: 1;
        }
        
        .font-bold {
            font-weight: 700;
        }
        
        .font-semibold {
            font-weight: 600;
        }
        
        .container-image-penyakit {
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .chocolat-image {
            transition: var(--transition);
        }
        
        .chocolat-image:hover {
            transform: scale(1.03);
        }
        
        .splash-screen {
            background-color: white;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Splash Screen -->
    <div class="splash-screen">
        <div class="la-timer la-dark la-3x">
            <div></div>
        </div>
    </div>
    <main>
        <section>
            @include('layouts.user.navbar')
            <div class="overflow-hidden" id="containerContent">
                @yield('content')
            </div>
        </section>
    </main>
    
    @include('layouts.user.footer')
    
    <!-- Scroll to Top Button -->
    <div class="rounded-circle shadow-lg" id="upScroll">
        <i class="fas fa-chevron-up fa-lg"></i>
    </div>

    <!-- Scripts -->
    <script defer src="https://kit.fontawesome.com/06b8a1e79b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js" async
        type="text/javascript"></script>
    <script src="{{ asset('/assets/vendor/aos/aos.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script async type="text/javascript" src="{{ asset('/assets/vendor/chocolat/chocolat.js') }}"></script>

    @stack('scriptPerPage')

    <script type="text/javascript" src="{{ asset('/assets/js/user/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/user/diagnosis.js') }}"></script>
</body>

</html>