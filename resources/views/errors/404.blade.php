@extends('layouts.app')
@section('title', 'A Propos')

@section('content')


    <main>
        <!-- 404 -->
        <section class="error">
            <div class="container">
                <div class="error-content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 error-content-img">
                            <img src="/images/404error.png" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 error-content-info">
                            <div class="error-title">
                                <h1>404</h1>
                            </div>
                            <div class="error-desc">Quelque chose s'est mal passé!</div>
                            <a href="/" class="back-to-home btn-regular">Retour à l'accueil</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partner -->
        <section class="partner background-grey p-t-70 p-b-70">
            <div class="container">
                <div class="partner-content">
                    <div class="row">
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="/images/home/partner-1.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="/images/home/partner-2.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="/images/home/partner-3.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="/images/home/partner-4.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
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
    </main>

@endsection