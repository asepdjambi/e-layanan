<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

          <!--- basic page needs
    ================================================== -->
          <meta charset="utf-8">
          <title>E-LAYANAN</title>
          <meta name="description" content="">
          <meta name="author" content="">

          <!-- mobile specific metas
    ================================================== -->
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- CSS
    ================================================== -->
          <link rel="stylesheet" href="{{ asset('admin/assets/css/styles.css')}}">
          <link rel="stylesheet" href="{{ asset('admin/assets/css/vendor.css')}}">

          <!-- script
    ================================================== -->
          <script src="{{ asset('admin/assets/js/modernizr.js')}}"></script>
          <script defer src="{{ asset('admin/assets/js/fontawesome/all.min.js')}}"></script>

          <!-- favicons
    ================================================== -->
          <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/assets/img/apple-icon.png') }}">
          <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/assets/img/favicon.png') }}">
          <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/img/favicon.png') }}">

          <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


          <!-- preloader
    ================================================== -->
          <div id="preloader">
                    <div id="loader"></div>
          </div>


          <!-- header
    ================================================== -->
          <header class="s-header">
                    <div class="row">

                              <div class="s-header__logo">
                                        <a href="/layanandepan">
                                                  <img src="{{ asset('admin/assets/img/e-layanan-logo_putih.png') }}" alt="Homepage">

                                        </a>
                              </div>

                              <nav class="s-header__nav">
                                        <ul>
                                                  <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
                                                  <li><a class="smoothscroll" href="/bussimpandepan">Peminjaman Bus</a></li>
                                                  <li><a class="smoothscroll" href="#portfolio">Portfolio</a></li>
                                                  <li><a class="smoothscroll" href="#blog">Journal</a></li>
                                                  <li><a class="smoothscroll" href="#about">About Us</a></li>
                                                  <li><a class="smoothscroll" href="#contact">Contact</a></li>
                                        </ul>
                              </nav>

                              <a class="s-header__menu-toggle" href="#0" title="Menu">
                                        <span class="s-header__menu-icon"></span>
                              </a>

                    </div> <!-- end row -->
          </header> <!-- end s-header -->


          {{-- //isidepan --}}
@yield('content')
 


          <!-- footer
    ================================================== -->
          <footer class="s-footer">
                    <div class="row">
                              <div class="column large-4 medium-6 w-1000-stack s-footer__social-block">
                                        <ul class="s-footer__social">
                                                  <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                                  <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                  <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                  <li><a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                                  <li><a href="#0"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                        </ul>
                              </div>

                              <div class="column large-7 medium-6 w-1000-stack ss-copyright">
                                        <span>© Copyright Kreative 2020</span>
                                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                              </div>
                    </div>

                    <div class="ss-go-top">
                              <a class="smoothscroll" title="Back to Top" href="#top">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                  <path d="M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z" /></svg>
                              </a>
                    </div> <!-- end ss-go-top -->
          </footer>


          <!-- Java Script
    ================================================== -->
          <script src="{{ asset('admin/assets/js/jquery-3.2.1.min.js')}}"></script>

          <script src="{{ asset('admin/assets/js/plugins.js')}}"></script>

          <script src="{{ asset('admin/assets/js/main.js')}}"></script>


</body>

</html>

