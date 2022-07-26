@extends('layouts.app')
@section('title', 'A Propos')


@section('content')

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
        <!-- Heading page -->
        <section class="heading-page">
            <img src="/images/product/banner/background-comming-soon.jpg" alt="">
            <div class="heading-page-content position-center">
                <div class="page-title">
                    <h1>A Propos</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">A Propos</li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- About us -->
        <section class="about-us">
            <div class="container">
                <div class="about-us-content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 about-us-info">
                            <div class="section-title-left">
                                <h2>Ecochodiere</h2>
                            </div>
                            <p>
                                Fondée en 1998, Eco chaudière avait pour l'objectif de fabriquer des chaudières fiables, peu bruyantes et d'entretien facile pour un sevice en continu.
                                De la réalisation de cet objectif a née une entreprise à succès, opérationnelle sur une gamme de produits . 
                                La concentration sur une gamme de produits délimitée, un effort de recherche de développement conséquent, et une équipe de spécialistes dotée d'une excellente formation, tout cela permet une production en série au top niveau, évidement avec l'assurance de la qualité certifiée.
                            </p>
                            <ul>
                                <li>
                                    <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <p>Générateur d'eau chaude</p>
                                </li>
                                <li>
                                    <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <p>Chaudières domestique </p>
                                </li>
                                <li>
                                    <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <p>Chaudière à vapeur et cuves à carburant </p>
                                </li>
                            </ul>
                            
                            
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 about-us-image">
                            <img src="/images/aboutus/IMG_1054.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company skills -->
        <section class="company-skills">
            <div class="company-skills-video">
                <div class="skills-video bmd-modalButton" data-toggle="modal" data-target="#modal-video-01" data-bmdSrc="https://player.vimeo.com/video/112734492" data-bmdWidth="500" data-bmdHeight="281">
                    <figure class="skills-video">
                        <img src="/images/aboutus/IMG_1033.jpg" alt="">
                        <span class="overgradient"> 
                        </span>
                        <div class="info">
                            <div class="video-title">Our Specialists Team</div>
                            <div class="video-desc">
                                <span>Russell Newman - </span>General Manager
                            </div>
                        </div>
                        <span class="icon-play"><i class="fa fa-play" aria-hidden="true"></i></span>
                    </figure>
                </div>
            </div>
            <div class="company-skills-content">
                <div class="section-title-left">
                    <h2>Compétences de l'entreprise</h2>
                </div>
                <div class="desc">
                                    Eco chaudière est un leader dans la fabrication de chaudières domestique, générateur d'eau chaude, chaudière à vapeur et cuves à carburant. En fonction de vos besoins spécifiques, nous vous fournissons des solutions sur mesure vous permettant de réaliser des économies d'énergie et offrant toutes les garantie de sécurité et de fiabilité.
                            </div>
                <div class="company-skills-list">
                    <ul>
                        <li>
                            <div class="title-regular-14 display-flex">
                                <span>Professionnel de la construction</span>
                                <span>90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width:90%"></div>
                            </div>
                        </li>
                        <li>
                            <div class="title-regular-14 display-flex">
                                <span>Travail en équipe</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width:85%"></div>   
                            </div>
                        </li>
                        
                        <li>
                            <div class="title-regular-14 display-flex">
                                <span>Expérience pratique</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width:80%"></div>
                            </div>
                        </li>
                        <li>
                            <div class="title-regular-14 display-flex">
                                <span>La satisfaction du client</span>
                                <span>100%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" style="width:100%"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </section>
        
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
        <!--
        <section class="why-choose-us">
            <div class="choose-us-content">
                <div class="choose-us-list">
                    <div class="choose-us-list-content">
                        <div class="section-title-left">
                            <h2>Pourquoi Nous Choisir</h2>
                        </div>
                        <ul id="accordion">
                            <li class="card active">
                                <div class="card-header" id="headingOne">
                                    <div class="title title-bold-16" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                                        Experience dans le domaine
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body content">
                                        Nous avons plus de 20 ans d'expérience dans ce secteur.
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card-header" id="headingTwo">
                                    <div class="title title-bold-16 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                                        Building Protection Services
                                    </div>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna  vulpuate nec felis semper, aliquam luctus metus. Vivamus blandit vestibulum viverra Pellentesque id mi lectus. Vestibulum ut ultrices sem. Suspendisse sit amet orsollicitudin, pretium ipsum consectetur, mattis quam. Etiam auctor et quam sit gravida. Sed malesuada vitae diam at volutpat.
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card-header" id="headingThree">
                                    <div class="title title-bold-16 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                                        Professional Plumbing
                                    </div>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec magna  vulpuate nec felis semper, aliquam luctus metus. Vivamus blandit vestibulum viverra Pellentesque id mi lectus. Vestibulum ut ultrices sem. Suspendisse sit amet orsollicitudin, pretium ipsum consectetur, mattis quam. Etiam auctor et quam sit gravida. Sed malesuada vitae diam at volutpat.
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="statistics-company">
                    <div class="statistics-company-content">
                        <div class="section-title-left">
                            <h2>STATISTIQUES DE L'ENTREPRISE</h2>
                        </div>
                        <div class="statistics-content our-process-content">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/aboutus/icon-people-white.png" alt="">
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="count">20+</div>
                                    <div class="title">
                                        <h3 class="title-regular-14">
                                            <a href="#" class="font-color-white">
                                                Années d'expérience
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </article>
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/aboutus/icon-door-white.png" alt="">
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="count">100+</div>
                                    <div class="title">
                                        <h3 class="title-regular-14">
                                            <a href="#" class="font-color-white">
                                                Projets achevés
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </article>
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/aboutus/icon-cup-white.png" alt="">
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="count">15+</div>
                                    <div class="title">
                                        <h3 class="title-regular-14">
                                            <a href="#" class="font-color-white">
                                                Awards Received
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </article>
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/aboutus/icon-heart-white.png" alt="">
                                    </a>
                                </figure>
                                <div class="info">
                                    <div class="count">100+</div>
                                    <div class="title">
                                        <h3 class="title-regular-14">
                                            <a href="#" class="font-color-white">
                                                clients satisfaits
                                            </a>
                                        </h3>   
                                    </div>
                                </div>
                            </article>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        -->
         <!-- Statistics -->
        <section class="statistics background-grey">
            <div class="container">
                <div class="statistics-content our-process-content">
                    <div class="row">
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <a href="#">
                                    <img src="images/service/icon-people.png" alt="">
                                </a>
                            </figure>
                            <div class="info">
                                <div class="count">20+</div>
                                <div class="title">
                                    <h3 class="title-regular-14">
                                        <a href="#" class="font-color-black">
                                            Années d'expérience
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <a href="#">
                                    <img src="images/service/icon-door.png" alt="">
                                </a>
                            </figure>
                            <div class="info">
                                <div class="count">600+</div>
                                <div class="title">
                                    <h3 class="title-regular-14">
                                        <a href="#" class="font-color-black">
                                            Projets achevés
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <a href="#">
                                    <img src="images/service/icon-cup.png" alt="">
                                </a>
                            </figure>
                            <div class="info">
                                <div class="count">15+</div>
                                <div class="title">
                                    <h3 class="title-regular-14">
                                        <a href="#" class="font-color-black">
                                            Prix reçus
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </article>
                        <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 item">
                            <figure>
                                <a href="#">
                                    <img src="images/service/icon-heart.png" alt="">
                                </a>
                            </figure>
                            <div class="info">
                                <div class="count">600+</div>
                                <div class="title">
                                    <h3 class="title-regular-14">
                                        <a href="#" class="font-color-black">
                                            Clients satisfaits
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Partner -->
        
        <section class="img-prod">
            <div class="section-title">
                    <h2>NOTRE EMPLACEMENT</h2>
            </div>
            <div class="item">
                <ul id="content-slider" class="content-slider">
                    <li>
                        <img src="/images/aboutus/IMG_0962.jpg">
                    </li>
                    
                    <li>
                        <img src="/images/aboutus/IMG_0976.jpg">
                    </li>
                    <li>
                        <img src="/images/aboutus/IMG_0987.jpg">
                    </li>
                    <li>
                        <img src="/images/aboutus/IMG_0992.jpg">
                    </li>
                    <li>
                        <img src="/images/aboutus/IMG_1000.jpg">
                    </li>
                </ul>
            </div>
        </section>
@endsection
