@extends('layouts.app')
@section('title', 'Notre Produits')

@section('content')

   <!-- Heading page -->
        <section class="heading-page">
            <img src="/images/product/banner/background-comming-soon.jpg" alt="">
            <div class="heading-page-content position-center">
                <div class="page-title">
                    <h1>Produits</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produits</li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- Projects -->
        <section class="projects p-t-80 p-b-80">
            <h4 class="heading-section">Heading section</h4>
            <div class="container">
                <div class="projects-content">
                    <ul class="filter-projects display-flex-center">
                        <li><span class="is-checked" data-filter="*">All</span></li>
                        @foreach($product as $myprdcode)
                        <li><span data-filter=".{{$myprdcode->prd_code}}">{{$myprdcode->marson_name}}</span></li>
                        @endforeach
                    </ul>
                    
                    <div class="grid">
                        <div class="row">
                            @foreach($product as $myproduct)
                            <article class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12  item element-item  {{$myproduct->prd_code}}">
                                <figure class="figure-hover">
                                    <a href="/products/{{$myproduct->slug}}">
                                        <img src="/storage/{{$myproduct->image}}" style="width: 100%" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                </figure>
                                <div class="info position-center">
                                    <div class="title">
                                        <h3 class="title-bold-white title-bold">
                                            {{$myproduct->name}}
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        {!! str_limit($myproduct->description,80) !!}
                                    </div>
                                </div>
                                <a href="/products/{{$myproduct->slug}}" class="view-more">View more</a>
                            </article>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- Partner 
        <section class="partner background-grey p-t-70 p-b-70">
            <h4 class="heading-section">Heading section</h4>
            <div class="container">
                <div class="partner-content">
                    <div class="row">
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="images/home/partner-1.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="images/home/partner-2.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="images/home/partner-3.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="images/home/partner-4.png" alt="">
                                </a>
                            </figure>
                        </article>
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="images/home/partner-1.png" alt="">
                                </a>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </section>-->
    </main>


@endsection