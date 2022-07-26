<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eco Chaudière</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/css-hamburgers/dist/hamburgers.min.css">
    <link rel="stylesheet" href="vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">   
    <link rel="stylesheet" href="vendor/revolution/layers.css">
    <link rel="stylesheet" href="vendor/revolution/navigation.css">
    <link rel="stylesheet" href="vendor/revolution/settings.css">
    <link rel="stylesheet" href="vendor/revolution/settings-source.css">
    <link rel="stylesheet" href="vendor/revolution/tp-color-picker.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="/storage/logo/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="/css/lightslider.css"/>

    <style type="text/css">
    .menu ul li a
    {
        
    }
    /*.header-2 .fixed
    {
        background: #fff;
    }*/
    .checked {
      color: orange;
    }
</style>

<style type="text/css">
    .img-prod
    {
        margin: 20px
    }

    .content-slider li
    {
        background-color: #fff;
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
                        <a href="/"><img src="/storage/{{setting('site.logo')}}" alt=""></a>

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
                                    <span>Sarl ECOCHAUDIERE, Zone industrielle , M'sila 28000, Algerie</span>
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
                                    <span> ECOCHAUDIERE, Zone industrielle BP 596, M'sila 28000, Algerie</span>
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
                            <ul class="menu-primary">
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
        <!-- Slide show  -->
        <section class="slide-show">
            <h4 class="heading-section">Heading section</h4>
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="au_rev_slider" class="rev_slider fullscreenbanner slide-content" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-82" data-transition="slidingoverlaydown">
                        <!-- MAIN IMAGE -->
                        <img src="/images/products/June2019/3.png" alt="">

                        <!-- LAYERS -->
                        <div class="tp-caption tp-resizeme icon-home" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['110','110','50','30']" data-width="['770', '770', '770', '380']">
                            
                        </div>
                        <div class="tp-caption tp-resizeme slide-title" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','center']" data-voffset="['-43','-43','-53','-53']" data-width="['770', '770', '770', '380']"
                        data-fontsize="['30','30','20','20']" data-textalign="['left']" style="color: black ; margin:-41px ;">
                           <h3 style="line-height: 0 ; margin:-75px 0;">Génerateur d'eau chaude</h3>
                           <div style="line-height: 0 ; margin:105px 0;">
                               <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                           </div>
                        </div>
                        <div class="tp-caption tp-resizeme slide-desc" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','center']" data-voffset="['4', '4', '4', '4']" data-width="['770', '770', '770', '380']" 
                            data-height="['auto']" data-whitespace="normal" data-type="text" data-textalign="['left']" style=" color: black;margin:-41px">
                            <p style="width: 430px">
                                Le générateur d'eau chaude permet une prodution instantanée d'eau chaude pour couvrir des besoins contenus .
                                sa fabrication est faite en acier revêtu. tout générateur peut etre installé à l'interieur ou à l'exterieur de la chaufferie 
                            </p>
                        </div>
                        <div class="tp-caption tp-resizeme slide-button" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['0', '0', '0', '0']" data-y="['center','center','center','center']" data-voffset="['90', '90', '90', '90']" data-width="['770', '770', '770', '380']" data-textalign="['left']" style=" margin:-41px">
                            <a href="/contactus" class="btn-global btn-yellow">Contact Nous</a>
                            <a href="/products/Generateur-d'eau-chaude" class="btn-global btn-yellow">Apprendre Plus</a>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-83" data-transition="3dcurtain-vertical">
                        <!-- MAIN IMAGE -->
                        <img src="/images/products/June2019/1.png" alt="">

                        <!-- LAYERS -->
                        <div class="tp-caption tp-resizeme icon-home" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['110','110','50','30']" data-width="['770', '770', '770', '380']">
                            
                        </div>
                        <div class="tp-caption tp-resizeme slide-title" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','center']" data-voffset="['-43','-43','-53','-53']" 
                            data-fontsize="['30','30','20','20']" data-width="['770', '770', '770', '380']" data-textalign="['left']" style="color: black ; margin:-41px ;">
                           <h3 style="line-height: 0 ; margin:-75px 0;">Chaudière D'Eau Chaude</h3>
                           <div style="line-height: 0 ; margin:105px 0;">
                               <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                           </div>
                        </div>
                        <div class="tp-caption tp-resizeme slide-desc" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['0', '0', '0', '0']" data-y="['center','center','center','center']" data-voffset="['4', '4', '4', '4']" data-width="['770', '770', '770', '380']" 
                            data-whitespace="normal" data-height="['auto']"  data-textalign="['left']" style=" color: black;margin:-41px">
                            <p style="width: 430px">
                                Chaudiére en acier à rendement élevé robuste et robuste et silencieuse aux systémes de flamme guidée dont la chambre de combustion est cylindrique.
                                Ce système amène une circulation idéale de l'eau. la chaleur est rapidement dissipée dans toutes les parties de la chaudière  .
                            </p>
                        </div>
                        <div class="tp-caption tp-resizeme slide-button" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['0', '0', '0', '0']" data-y="['center','center','center','center']" data-voffset="['90', '90', '90', '90']" data-width="['770', '770', '770', '380']" data-textalign="['left']" style=" margin:-41px">
                            <a href="/contactus" class="btn-global btn-yellow">Contact Nous</a>
                            <a href="/products/Chaudière-d'eau-chaude" class="btn-global btn-yellow">Apprendre Plus</a>
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-84" data-transition="slidingoverlaydown">
                        <!-- MAIN IMAGE -->
                        <img src="/images/products/June2019/2.png" alt="">

                        <!-- LAYERS -->
                        <div class="tp-caption tp-resizeme icon-home" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['110','110','50','30']" data-width="['770', '770', '770', '380']">
                            
                        </div>
                        <div class="tp-caption tp-resizeme slide-title" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','center']" data-voffset="['-43','-43','-53','-53']" data-width="['770', '770', '770', '380']"
                        data-fontsize="['30','30','20','20']" data-textalign="['left']" style="color: black ; margin:-41px ;">
                           <h3 style="line-height: 0 ; margin:-75px 0;">Chaudières à vapeur</h3>
                           <div style="line-height: 0 ; margin:105px 0;">
                               <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                           </div>
                        </div>
                        <div class="tp-caption tp-resizeme slide-desc" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','center']" data-voffset="['4', '4', '4', '4']" data-width="['770', '770', '770', '380']" 
                            data-height="['auto']" data-whitespace="normal" data-type="text" data-textalign="['left']" style=" color: black;margin:-41px">
                            <p style="width: 430px">
                                Nos chaudières à vapeur fonctionnent avec les différentes énergies : Gaz, mazout.
                                Possibilité de produire de la vapeur propre. alimentaire ou stérile.
                            </p>
                        </div>
                        <div class="tp-caption tp-resizeme slide-button" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['0', '0', '0', '0']" data-y="['center','center','center','center']" data-voffset="['90', '90', '90', '90']" data-width="['770', '770', '770', '380']" data-textalign="['left']" style=" margin:-41px">
                            <a href="" class="btn-global btn-yellow">Contact Nous</a>
                            <a href="/products/Chaudières-à-vapeur" class="btn-global btn-yellow">Apprendre Plus</a>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                </ul>
                <!-- <div class="tp-bannertimer" style="height: 10px; background: rgba(255,255,255,0.25);"></div> -->
            </div>
            <!-- END REVOLUTION SLIDER -->
        </section>

        <!-- Request quote -->
        <section class="request-quote background-grey">
            <h4 class="heading-section">Heading section</h4>
            <div class="container">
                <div class="request-quote-content display-flex">
                    <div class="light display-flex">
                        <img src="/images/home/icon-light.png" alt="">
                        <div class="light-content">
                            <div class="title-bold font-color-black">Vous VOULEZ en savoir plus sur nos produits?</div>
                            <div class="light-desc">Téléchargez notre catalogue pour en savoir plus.</div>
                        </div>
                    </div>
                    <div class="request-quote-button">
                        <a href="http://www.mediafire.com/file/374k3dhgishy20w/catalogue+sarl+eco+chaudiere.pdf" class="btn-global btn-yellow btn-global-yellow-hover" data-text="Téléchargez">Téléchargez</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Services 
        <section class="services p-t-80 p-b-100">
            <h4 class="heading-section">Heading section</h4>
            <div class="container">
                <div class="services-content">
                    <div class="row">
                        <article class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item">
                            <figure class="figure-hover">
                                <a href="#">
                                    <img src="/images/home/service-1.jpg" alt="">
                                    <span class="overlay"></span>
                                </a>
                                <span>+</span>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                        <a href="#" class="font-color-black">
                                            Architecture
                                        </a>
                                    </h3>
                                </div>
                                <div class="desc">
                                    Lorem ipsum dolor sit amet, consecttur adipiscing eli ellentesque tincidunt.
                                </div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item">
                            <figure class="figure-hover">
                                <a href="#">
                                    <img src="/images/home/service-2.jpg" alt="">
                                    <span class="overlay"></span>
                                </a>
                                <span>+</span>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                        <a href="#" class="font-color-black">
                                            Construction
                                        </a>
                                    </h3>
                                </div>
                                <div class="desc">
                                    Lorem ipsum dolor sit amet, consecttur adipiscing eli ellentesque tincidunt.
                                </div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item">
                            <figure class="figure-hover">
                                <a href="#">
                                    <img src="/images/home/service-3.jpg" alt="">
                                    <span class="overlay"></span>
                                </a>
                                <span>+</span>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                        <a href="#" class="font-color-black">
                                            water Pipe
                                        </a>
                                    </h3>
                                </div>
                                <div class="desc">
                                    Lorem ipsum dolor sit amet, consecttur adipiscing eli ellentesque tincidunt.
                                </div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item">
                            <figure class="figure-hover">
                                <a href="#">
                                    <img src="/images/home/service-4.jpg" alt="">
                                    <span class="overlay"></span>
                                </a>
                                <span>+</span>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                        <a href="#" class="font-color-black">
                                            Wall Paint
                                        </a>
                                    </h3>
                                </div>
                                <div class="desc">
                                    Lorem ipsum dolor sit amet, consecttur adipiscing eli ellentesque tincidunt.
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="all-button">
                        <a href="#" class="btn-global btn-yellow btn-global-yellow-hover" data-text="All Services">All Services</a>
                    </div>
                </div>
            </div>
        </section>-->

        <!-- Our sucess 
        <section class="our-sucess background-grey p-t-80 p-b-100">
            <div class="container">
                <div class="section-title">
                    <h2>Our success</h2> 
                </div>
                <div class="our-sucess-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 sucess-item">
                            <article class="item">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="/images/home/project-1.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="title">
                                        <h3 class="title-bold">
                                            <a href="#" class="font-color-yellow">
                                                Wall Paint
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        <a href="#">Building, </a>
                                        <a href="#">Education</a>
                                    </div>
                                    <span><i class="fa fa-search" aria-hidden="true"></i></span>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 sucess-item">
                            <article class="item">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="/images/home/project-2.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="title">
                                        <h3 class="title-bold">
                                            <a href="#" class="font-color-yellow">
                                                Wall Paint
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        <a href="#">Building, </a>
                                        <a href="#">Education</a>
                                    </div>
                                    <span><i class="fa fa-search" aria-hidden="true"></i></span>
                                </div>
                            </article>
                            <article class="item">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="/images/home/project-3.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="title">
                                        <h3 class="title-bold">
                                            <a href="#" class="font-color-yellow">
                                                Wall Paint
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        <a href="#">Building, </a>
                                        <a href="#">Education</a>
                                    </div>
                                    <span><i class="fa fa-search" aria-hidden="true"></i></span>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 sucess-item">
                            <article class="item">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="/images/home/project-4.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="title">
                                        <h3 class="title-bold">
                                            <a href="#" class="font-color-yellow">
                                                Wall Paint
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        <a href="#">Building, </a>
                                        <a href="#">Education</a>
                                    </div>
                                    <span><i class="fa fa-search" aria-hidden="true"></i></span>
                                </div>
                            </article>
                            <article class="item">
                                <figure class="figure-hover">
                                    <a href="#">
                                        <img src="/images/home/project-5.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="title">
                                        <h3 class="title-bold">
                                            <a href="#" class="font-color-yellow">
                                                Wall Paint
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        <a href="#">Building, </a>
                                        <a href="#">Education</a>
                                    </div>
                                    <span><i class="fa fa-search" aria-hidden="true"></i></span>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="all-button">
                        <a href="#" class="btn-global btn-yellow btn-global-yellow-hover" data-text="All Projects">All Projects</a>
                    </div>
                </div>
            </div>
        </section>
            -->
        <!-- Our Process 
        <section class="our-process p-t-80 p-b-100">
            <div class="container">
                <div class="section-title">
                    <h2>NOTRE PROCESSUS</h2>
                </div>
                <div class="our-process-content">
                    <div class="row">
                        <article class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item">
                            <figure>
                                <a href="#">
                                    <img src="/images/home/process-1.png" alt="">
                                </a>
                            </figure>
                            <div class="info">
                                <div class="stt">01</div>
                                <div class="title">
                                    <h3 class="title-bold">
                                        <a href="#" class="font-color-black">
                                            Planning
                                        </a>
                                    </h3>
                                </div>
                                <div class="desc">
                                    Praesent sollicitudin, odio sed condimentum libero.
                                </div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item">
                            <figure>
                                <a href="#">
                                    <img src="/images/home/process-2.png" alt="">
                                </a>
                            </figure>
                            <div class="info">
                                <div class="stt">02</div>
                                <div class="title">
                                    <h3 class="title-bold">
                                        <a href="#" class="font-color-black">
                                            architecture
                                        </a>
                                    </h3>
                                </div>
                                <div class="desc">
                                    Praesent sollicitudin, odio sed condimentum libero.
                                </div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item">
                            <figure>
                                <a href="#">
                                    <img src="/images/home/process-3.png" alt="">
                                </a>
                            </figure>
                            <div class="info">
                                <div class="stt">03</div>
                                <div class="title">
                                    <h3 class="title-bold">
                                        <a href="#" class="font-color-black">
                                            architecture
                                        </a>
                                    </h3>
                                </div>
                                <div class="desc">
                                    Praesent sollicitudin, odio sed condimentum libero.
                                </div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item">
                            <figure>
                                <a href="#">
                                    <img src="/images/home/process-4.png" alt="">
                                </a>
                            </figure>
                            <div class="info">
                                <div class="stt">04</div>
                                <div class="title">
                                    <h3 class="title-bold">
                                        <a href="#" class="font-color-black">
                                            architecture
                                        </a>
                                    </h3>
                                </div>
                                <div class="desc">
                                    Praesent sollicitudin, odio sed condimentum libero.
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>-->

        <!-- Testimonials
        <section id="#testimonials" class="testimonials home1-testimonials">
            <h4 class="heading-section">Heading section</h4>
            <div class="testimonials-content">
                <article class="item">
                    <h4 class="heading-section">Heading section</h4>
                    <figure>
                        <img src="/images/home/testimonial-1.jpg" alt="">
                        <div class="info">
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 item-content">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p>
                                            Sed lacinia tincidunt enim in luctus. Ut eu dapibus diam. Pellntesque t lacus, tincidunt id lobortis sed, egestas vitae erat. Cras dapibus velit dol. Quisque id int purus. Donec lobortis commodo lectus nec molestie. Donec a neque consectetur nulla faucibus.
                                        </p>
                                        <span class="name">Crystal Peters - </span>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figure>
                </article>
                <article class="item">
                    <h4 class="heading-section">Heading section</h4>
                    <figure>
                        <img src="/images/home/testimonial-2.jpg" alt="">
                        <div class="info">
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 item-content">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p>
                                            Quisque vehicula aliquam mauris, non suscipit felis fermentum id. Quisque tempor velit neque. Fusce nec risus vitae urna interdum. Suspendisse a vehicula felis, et sodales dui. Sed bibendum lectus erat, nec imperdiet risus facilisis venenatis.
                                        </p>
                                        <span class="name">Benjamin Wagner - </span>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figure>
                </article>
                <article class="item">
                    <h4 class="heading-section">Heading section</h4>
                    <figure>
                        <img src="/images/home/testimonial-3.jpg" alt="">
                        <div class="info">
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 item-content">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p>
                                            Quisque vehicula aliquam mauris, non suscipit felis fermentum id. Quisque tempor velit neque. Fusce nec risus vitae urna interdum. Suspendisse a vehicula felis, et sodales dui. Sed bibendum lectus erat, nec imperdiet risus facilisis venenatis.
                                        </p>
                                        <span class="name">Kathleen Price - </span>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figure>
                </article>
            </div>

        </section> -->

        <!-- Our Team -->
        <section class="about-team">
            <div class="container">
                <div class="section-title">
                    <h2>NOTRE ÉQUIPE</h2>
                </div>
                <div class="our-team-content">
                    <div class="row">
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <img src="https://i.ibb.co/6Ps4tNG/default-original-profile-pic.png" alt="">
                                <div class="socials">
                                    <ul>
                                        <li><a href="https://www.facebook.com/kamel.djerad.33"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                        Kamal Djerad
                                    </h3>
                                </div>
                                <div class="desc">Directeur Genéral</div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <img src="https://i.ibb.co/6Ps4tNG/default-original-profile-pic.png" alt="">
                                <div class="socials">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                         Hamza Djerad
                                    </h3>
                                </div>
                                <div class="desc">Manager</div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <img src="https://i.ibb.co/6Ps4tNG/default-original-profile-pic.png" alt="">
                                <div class="socials">
                                    <ul>
                                        <li><a href="https://www.facebook.com/chebir"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                        Abderezzak Djerad
                                    </h3>
                                </div>
                                <div class="desc">Manager</div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <img src="https://i.ibb.co/6Ps4tNG/default-original-profile-pic.png" alt="">
                                <div class="socials">
                                    <ul>
                                        <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-bold">
                                        SId Ali Mihoub
                                    </h3>
                                </div>
                                <div class="desc">Worker</div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- prodducts -->
            <section class="img-prod">
            <div class="section-title">
                    <h2>NOTRE Produits</h2>
            </div>
            <div class="item">
                <ul id="content-slider" class="content-slider">
                    @foreach($products as $product)
                    <li>
                        <img src="/storage/{{$product->image}}">
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <!--end-->
        <!-- CTA -->
        <section class="cta p-t-100 p-b-100">
            <!-- <img src="/images/home/cta-background.jpg" alt=""> -->
            <h4 class="heading-section">Heading section</h4>
            <div class="container">
                <div class="cta-content">
                    <div class="cta-info">
                        <div class="cta-title">We Are Having A Project For You!</div>
                        <a href="#" class="btn-global btn-yellow btn-global-yellow-hover" data-text="obtenir un devis
                        ">obtenir un devis
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog
        <section class="blog p-t-80 p-b-40">
            <div class="container">
                <div class="section-title">
                    <h2>company news</h2>
                </div>
                <div class="blog-content">
                    <div class="row">
                        <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item">
                            <figure>
                                <a href="#">
                                    <img src="/images/home/company-news-1.jpg" alt="">
                                </a>
                                <div class="post-date">
                                    <span>Jun</span>
                                    <span>26</span>
                                </div>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-regular">
                                        <a href="" class="font-color-black">
                                            Sed lacinia Tincidunt Enim In Luctus.
                                        </a>
                                    </h3>
                                </div>
                                <div class="desc">
                                    Quisque vehicula aliquam mauris, non suscipit feli fermentum id. Quisque tempor velit neque. Fusce nec risus vitae urna interdum dapibus.
                                </div>
                            </div>
                            <a href="#" class="read-more-regular btn-yellow" data-text="Read more">Read more</a>
                        </article>
                        <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item">
                            <figure>
                                <a href="#">
                                    <img src="/images/home/company-news-2.jpg" alt="">
                                </a>
                                <div class="post-date">
                                    <span>Jun</span>
                                    <span>28</span>
                                </div>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-regular">
                                        <a href="" class="font-color-black">
                                            Nunc Sollicitudin Eros At Turpis Tempor
                                        </a>
                                    </h3>
                                </div>
                                <div class="desc">
                                    Quisque nunc nisi, iaculis quis ex nec gravida mauris. Curabitur cursus lectus id cursus posuere maximus neque a risus posuere, vel tempor enim iaculis gravida.
                                </div>
                            </div>
                            <a href="#" class="read-more-regular btn-yellow" data-text="Read more">Read more</a>
                        </article>
                        <article class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item">
                            <figure>
                                <a href="#">
                                    <img src="/images/home/company-news-3.jpg" alt="">
                                </a>
                                <div class="post-date">
                                    <span>Jun</span>
                                    <span>30</span>
                                </div>
                            </figure>
                            <div class="info">
                                <div class="title">
                                    <h3 class="title-regular">
                                        <a href="" class="font-color-black">
                                            Ellentesque Erat Lacus Tincidunt.
                                        </a>
                                    </h3>
                                </div>
                                <div class="desc">
                                    Nulla tempor quis leo quis auctor. Praesent cursus scelerisque purus id maximus Nunc sollicitudin eros at turpis tempor mattis.
                                </div>
                            </div>
                            <a href="#" class="read-more-regular btn-yellow" data-text="Read more">Read more</a>
                        </article>
                    </div>
                </div>
            </div>
        </section>
 -->
        <!-- Partner
        <section class="partner background-grey p-t-70 p-b-70">
            <h4 class="heading-section">Heading section</h4>
            <div class="container">
                <div class="partner-content">
                    <div class="row">
                        <article class="item">
                            <h4 class="heading-section">Heading section</h4>
                            <figure>
                                <a href="#">
                                    <img src="/images/home/partner-1.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <h4 class="heading-section">Heading section</h4>
                            <figure>
                                <a href="#">
                                    <img src="/images/home/partner-2.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <h4 class="heading-section">Heading section</h4>
                            <figure>
                                <a href="#">
                                    <img src="/images/home/partner-3.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <h4 class="heading-section">Heading section</h4>
                            <figure>
                                <a href="#">
                                    <img src="/images/home/partner-4.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <h4 class="heading-section">Heading section</h4>
                            <figure>
                                <a href="#">
                                    <img src="/images/home/partner-1.png" alt="">
                                </a>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </section>
 -->
        <a href="#" class="totop">Back to top</a>
    </main>

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-top-content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 footer-info">
                            <div class="footer-logo">
                                <a href="#"><img src="/storage/{{setting('site.logo')}}" alt="{{setting('site.logo')}}"></a>
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
                                    
                                    <li><a href="/product">Produits</a></li>
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
                            Copyright © 2019 Ecochaudiere - Thème par <span>DevZone</span>
                    </div>
                    <div class="footer-bottom-menu">
                        <ul>
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/product">Produits</a></li>
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

    <!-- JS -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/slick/slick.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.js"></script>
    <script src="js/isotope-docs.min.js"></script>
    <script src="/vendor/nouislider/nouislider.min.js"></script>
    <script src="/vendor/sweetalert/sweetalert.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw"></script>
    <script src="/js/theme-map.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="/js/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="/js/revolution/jquery.themepunch.revolution.min.js"></script>

    <!-- SLICEY ADD-ON FILES -->
    <script src='/js/revolution/revolution.addon.slicey.min.js?ver=1.0.0'></script>

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