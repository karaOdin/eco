<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ecochaudière - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/css-hamburgers/dist/hamburgers.min.css">
    <link rel="stylesheet" href="/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="/vendor/slick/slick.css">
    <link rel="stylesheet" href="/fonts/font-awesome-5/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">   
    <link rel="stylesheet" href="/vendor/revolution/layers.css">
    <link rel="stylesheet" href="/vendor/revolution/navigation.css">
    <link rel="stylesheet" href="/vendor/revolution/settings.css">
    <link rel="stylesheet" href="/vendor/revolution/settings-source.css">
    <link rel="stylesheet" href="/vendor/revolution/tp-color-picker.css">
    <link rel="stylesheet" href="/vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/plugins/slick/slick.css">
    <link rel="shortcut icon" href="/storage/logo/favicon.ico" type="image/x-icon" />


    <!--slider -->
        <link rel="stylesheet"  href="/css/lightslider.css"/>

    <style>
        ul{
            list-style: none outside none;
            padding-left: 0;
            margin: 0;
        }
        .demo .item{
            margin-bottom: 60px;
        }
        .content-slider li{
            background-color: #ed3020;
            text-align: center;
            color: #FFF;
        }
        .content-slider h3 {
            margin: 0;
            padding: 70px 0;
        }
        .demo{
            width: 800px;
        }
    </style>
   
</head>
<body>
  <!-- page load-->
    <div class="images-preloader">
        <div id="preloader_1" class="rectangle-bounce">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <header class="header header-1">
        <div class="hidden-tablet-landscape-up header-mobile">
            <div class="header-top-mobile">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="/">
                            <img src="/storage/{{setting('site.logo')}}" alt="Consulting" />
                        </a>
                    </div>
                    <div class="search-box">
                        <form method="POST">
                            <input type="text" placeholder="Tìm kiếm" id="search-box" name="s" value="">
                            <div class="search-icon font-color-white display-flex-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </form>
                    </div>
                    <button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="au-nav-mobile">
                <nav class="menu-mobile">
                    <div>
                        <ul class="au-navbar-menu">
                            <li class="menu-item curent-menu-item">
                                <a href="/" class="font-color-black">Accueil</a>
                                
                            </li>
                            <li class="menu-item">
                                <a href="/products" class="font-color-black">Produits</a>
                                
                            </li>
                           
                            <li class="menu-item">
                                <a href="/aboutus" class="font-color-black">A Propos</a>
                            </li>
                           
                            <li class="menu-item">
                                <a href="/contactus" class="font-color-black">Contact Nous</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- <div class="clear"></div> -->
            <div class="header-top">
                <div class="container-fluid">
                    <div class="header-top-content display-flex">
                        <div class="header-top-desc">
                            Un monde des chaudieres et d'un univer chaud!
                        </div>
                        <div class="header-top-info">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>+213 (0) 35365196</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>ecochaudiere@yahoo.fr</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Sarl ECOCHAUDIERE, Zone industrielle  BP 596, M'sila 28000; Algerie</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="hidden-tablet-landscape header-top">
            <div class="container">
                <div class="header-top-content display-flex">
                    <div class="header-top-desc">
                        Un monde des chaudieres et d'un univer chaud!
                    </div>
                    <div class="header-top-info">
                        <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>+213 (0) 35365196</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>ecochaudiere@yahoo.fr</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>ECOCHAUDIERE, Zone industrielle BP 596, M'sila 28000, Algerie</span>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-tablet-landscape header-bottom" id="js-navbar-fixed">
            <div class="container">
                <div class="header-bottom-content display-flex">
                    <div class="logo">
                        <a href="/"><img src="/storage/{{setting('site.logo')}}" alt=""></a>
                    </div>
                    <nav class="menu">
                        <div>
                            <ul class="au-navbar-menu">
                                <li class="menu-item curent-menu-item">
                                    <a href="/" class="font-color-black">Accueil</a>
                                    
                                </li>
                                <li class="menu-item">
                                    <a href="/products" class="font-color-black">Produits</a>
                                    
                                </li>
                               
                                <li class="menu-item">
                                    <a href="/aboutus" class="font-color-black">A Propos</a>
                                </li>
                               
                                <li class="menu-item">
                                    <a href="/contactus" class="font-color-black">Contact us</a>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>  

    <main>
        @yield('content')
    </main>     
        
    
<footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-top-content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 footer-info">
                            <div class="footer-logo">
                                <a href="#"><img src="/storage/{{setting('site.logo')}}" alt=""></a>
                            </div>
                            <div class="info-desc">
                                Fondée en 1998, Ecochaudière avait pour l'objectif de fabriquer des chaudières fiables, peu bruyantes et d'entretien facile pour un sevice en continu.
                            </div>
                            <div class="socials">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-drupal" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 footer-links">
                            <div class="footer-title">
                                <h3>Liens utiles</h3>
                            </div>
                            <div class="footer-links-menu">
                                <ul>
                                    <li><a href="/">Accueil</a></li>
                                    
                                    <li><a href="/products">Produits</a></li>
                                    <li><a href="/aboutus">A Propos</a></li>
                                </ul>
                                <ul>
                                    <li><a href="/contactus">Contact nous</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 footer-contact">
                            <div class="footer-title">
                                <h3>Contact nous</h3>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>+213(0)35365196</span>
                                </li>
                                <li>
                                        <i class="fa fa-fax" aria-hidden="true"></i>
                                    <span>+213(0)35365196</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>ecochaudiere@yahoo.fr</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span> ECOCHAUDIERE, Zone industrielle BP 596, M'sila 28000, Algerie</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 footer-work-time">
                            <div class="footer-title">
                                <h3>HEURES DE TRAVAIL</h3>
                            </div>
                            <div class="work-time-desc">
                                Notre soutien est disponible pour vous aider 24 heures par jour, sept jours par semaine.
                            </div>
                            <div class="work-time">
                                <span class="display-flex">
                                    <span>Dimanche-Jeudi:</span>
                                    <span>7.30 to 15.30</span>
                                </span>
                                <span class="display-flex">
                                    <span>Vendredi:</span>
                                    <span>Fermée</span>
                                </span>
                                <span class="display-flex">
                                    <span>Samedi:</span>
                                    <span>Fermée</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content display-flex">
                    <div class="copyright">
                            Copyright © 2019 Ecochaudiere - Thème par <span>ClickMarketing</span>
                    </div>
                    <div class="footer-bottom-menu">
                        <ul>
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/products">Produits</a></li>
                            <li><a href="/aboutus">A Proposs</a></li>
                            <li><a href="/contactus">Contact nous</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div id="back-to-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- JS -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/slick/slick.min.js"></script>
    <script src="/js/masonry.pkgd.min.js"></script>
    <script src="/js/imagesloaded.pkgd.js"></script>
    <script src="/js/isotope-docs.min.js"></script>
    <script src="/vendor/nouislider/nouislider.min.js"></script>
    <script src="/vendor/sweetalert/sweetalert.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw"></script>
    <script src="/js/theme-map.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="/js/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="/js/revolution/jquery.themepunch.revolution.min.js"></script>

    <!-- SLICEY ADD-ON FILES -->
    <script src='js/revolution/revolution.addon.slicey.min.js?ver=1.0.0'></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="/js/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/js/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/js/revolution/extensions/revolution.extension.video.min.js"></script> 
    <script src="/plugins/slick/slick.min.js"></script>

    <script src="/js/config-contact.js"></script>
    <script src="/js/main.js"></script>
    
     <script src="/js/lightslider.js"></script> 
    <script>
         $(document).ready(function() {
            $("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
        });
    </script>  
    
</body>
</html>
