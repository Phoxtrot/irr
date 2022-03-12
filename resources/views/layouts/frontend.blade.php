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
  <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('frontend/img/irr-logo.png')}}"/>
  <link rel="manifest" href="{{asset('frontend/favicon_io/site.webmanifest')}}"/>
</head>
<body>
    <nav class="navbar section">
        <a href="{{route('welcome')}}" class="logo">
            <img src="{{ asset('frontend/img/irr-logo.png') }}" alt="ibadulrrahman logo" class="logo">
        </a>
     <ul class="nav-menu" >
         <li class="nav-item">
             <a href="{{route('welcome')}}" class="nav-link">Home</a>
         </li>
         <li class="nav-item">
             <a href="{{route('eacademy')}}" class="nav-link">E-Academy</a>
         </li>
         <li class="nav-item">
             <a href="{{route('ramadan')}}" class="nav-link">The Noble Journey</a>
         </li>
         <li class="nav-item">
             <a href="#contact" class="nav-link">Zakat* (Coming Soon)</a>
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
            <a href="{{route('ramadan')}}" class="nav-link">The Noble Journey</a>
        </li>
        <li class="mobile-item">
            <a href="#contact" class="nav-link">Zakat</a>
        </li>      
    </ul>
    </nav>
    @yield("content")
    <section class="footer section" id="contact">

        <div class="footer-links">
            <div class="footer-link">
                <a href="#home" class="logo">
                    <img src="{{ asset('frontend/img/irr-logo.png') }}" alt="ibadulrrahman logo" class="logo">
                </a>

            </div>
            <div class="footer-link">
                <h4>Links</h4>
                <a href="{{route('eacademy')}}">E-Academy</a>
                <a href="{{route('ramadan')}}">The Noble Journey</a>
                <a href="#contact">Zakat* (Coming Soon)</a>
            </div>
            <div class="footer-link">
                <h4>Socials</h4>
                <div class="row">
                    <div class="col-md-6">
                        <p class="social">
                            <a href="https://wa.link/hd8r8b">
                                <i class="fab fa-whatsapp fa-2x"></i>
                            </a>
                        </p>
                        <p class="social">
                            <a href="https://www.instagram.com/ir_institute/">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </p>
                        <p class="social">
                            <a href="mailto:appform@irinstitute-ng.org ">
                                <i class="fas fa-envelope-square fa-2x" ></i>
                            </a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="social">
                            <a href="https://web.facebook.com/irinstitute">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                        </p>
                        <p class="social">
                            <a href="https://www.youtube.com/channel/UCAYITCyoYlXxyN8BGhpem6A">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <p class="copyright">&copy;2022 IRInstitute all rights reserved </p>
    </section>

    @yield("js")

</body>
