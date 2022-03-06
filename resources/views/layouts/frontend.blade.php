<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link id="custom" href="{{asset('frontend/css/bootstrap5.css')}}" rel="stylesheet" />
    <link id="custom" href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
    @yield('css')
    <!-- Font awesome -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
  />
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180"  href="{{asset('frontend/favicon_io/apple-touch-icon.png')}}"/>
  <link rel="icon" type="image/png" sizes="32x32"  href="{{asset('frontend/favicon_io/favicon-32x32.png')}}"/>
  <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('frontend/favicon_io/favicon-16x16.png')}}"/>
  <link rel="manifest" href="{{asset('frontend/favicon_io/site.webmanifest')}}"/>
</head>
<body>
    <nav class="navbar section">
        <a href="{{route('welcome')}}" class="logo">
            <img src="{{ asset('frontend/img/ibadulrahman-logo.png') }}" alt="ibadulrrahman logo" class="logo">
        </a>
     <ul class="nav-menu" >
         <li class="nav-item">
             <a href="{{route('welcome')}}" class="nav-link">Home</a>
         </li>
         <li class="nav-item">
             <a href="{{route('eacademy')}}" class="nav-link">E-Academy</a>
         </li>
         <li class="nav-item">
             <a href="{{route('ramadan')}}" class="nav-link">The Noble Journey with Al-Qur'an</a>
         </li>
         <li class="nav-item">
             <a href="#contact" class="nav-link">Zakat</a>
         </li>
     </ul>
     @yield('navbar')
     {{-- <div class="nav-btn">
         <a href="{{route('form')}}" class="register-btn" >Apply</a>
     </div> --}}

    <button class="bar-icon">
        <div><i class='fas fa-bars fa-2x ' ></i></div>
    </button>
    <ul class="mobile-menu " >
        <li class="mobile-item">
            <a href="{{route('welcome')}}" class="nav-link">Home</a>
        </li>
        <li class="mobile-item">
            <a href="{{route('eacademy')}}" class="nav-link">E-Academy</a>
        </li>
        <li class="mobile-item">
            <a href="{{route('ramadan')}}" class="nav-link">The Noble Journey with Al-Qur'an</a>
        </li>
        <li class="mobile-item">
            <a href="#contact" class="nav-link">Zakat</a>
        </li>
        <div class="btn-container">

            <a href="{{route('form')}}" class="register-btn">Apply</a>
        </div>
    </ul>
    </nav>
    @yield("content")
    <section class="footer section" id="contact">

        <div class="footer-links">
            <div class="footer-link">
                <a href="#home" class="logo">
                    <img src="{{ asset('frontend/img/ibadulrahman-logo.png') }}" alt="ibadulrrahman logo" class="logo">
                </a>
                <p>IRInstitute E-Academy</p>
            </div>
            <div class="footer-link">
                <h4>Links</h4>
                <a href="#about">about</a>
                <a href="#courses">courses</a>
                <a href="#contact">contact</a>
            </div>
            <div class="footer-link">
                <h4>Socials</h4>
                <p class="social">
                    <i class="fab fa-whatsapp"></i>
                    <a href="https://wa.link/hd8r8b">Whatsapp</a>
                </p>
                <p class="social">
                    <i class="fas fa-envelope-square"></i>
                    <a href="mailto:appform@irinstitute-ng.org">Email</a>
                </p>
            </div>
        </div>
        <p class="copyright">&copy;2021 IRInstitute E-Academy all rights reserved </p>
    </section>

    @yield("js")

</body>
