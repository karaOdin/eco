@extends('layouts.app')
@section('title', 'Detail de produit')
@section('content')

<style type="text/css">
	.nameprd
	{
		padding: 50px
	}
	.tab
	{
		padding: 50px
	}
	.imgDiv
	{
		padding: 20px
	}

	table
	{
		display: table;
	}

	th{
		padding: 30px;
	}
	body 
	{
	    counter-reset: myCounter;
	}

	.image_det
	{
		margin-top: 10px
	}
	/*********** componant ***************/
	.componantLi> ul, ol,li{
        /*margin: 0;padding: 0;*/
        list-style: none;
    }
    .componantLi>li {
	    background: #37BC9B;
	    color: #fff;
	    counter-increment: myCounter;
	    margin: 0 0 30px 0;
	    padding: 7px;
	    position: relative;
	    top: 1em;
	    left: 2em;
	    border-radius: 0em 2px 1em 1em;
	    padding-left: 1em;
	    font-size: 1.1em;
	    font-family: Constantia;
	}
    .componantLi>li:before {
	    content: counter(myCounter, decimal-leading-zero);
	    display: inline-block;
	    text-align: center;
	    font-size: 1em;
	    line-height: 1.3em;
	    background-color: #48CFAD;
	    padding: 10px;
	    font-weight: bold;
	    position: absolute;
	    top: 0px;
	    left: -22px;
	    border-radius: 50%;
	    font-family: exo;
	}

	@media screen and (min-width: 720px) {
		.componantLi>li
		{
		   width: 90%;
		}

	}
	@media screen and (max-width: 719px) {
			.componantLi>li
			{
			   width: 90%;
			}

	}


    .componantLi>li:nth-child(even){
        background-color: #434A54;
    }
    </style>
<main>
	<!-- Heading page -->
        <section class="heading-page">
            <img src="/images/product/banner/background-comming-soon.jpg" alt="">
            <div class="heading-page-content position-center">
                <div class="page-title">
                    <h1>{{$product->name}}</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produits</li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="nameprd">
        	<div class="cotainer">
				<div class="row">
					<div class="col-sm-6 imgDiv"  data-toggle="modal" data-target="#modal-video-01">
						<img src="/storage/{{$product->image}}">
					</div>
					<div class="col-sm-6">
						<div class="section-title-left">
							<h2>{{$product->name}}</h2>	
						</div>
			        	<p>
			        		{!! $product->description !!}
			        	</p>			
					</div>
				</div>        		
        	</div>
        	
        </section>
        @isset($product->multi_image)
        
        <section style="margin: 20px">
        	 
				 <div class="item">
	                <ul id="content-slider" class="content-slider">
	                	<?php $bigImages = json_decode($product->multi_image); ?> 
						@foreach($bigImages as $bigImage)
	                    <li>
	                        <img src="/images/{{ $bigImage }}">
	                    </li>
	                   @endforeach 
			 
        </section>
        @endisset
        <!-- modal-->  <!-- Modal Video 01-->
			<div class="modal fade" id="modal-video-01">
				<div class="modal-dialog display-flex-center">
					<div class="modal-content bmd-modalContent">

						<div class="modal-body">
		          
		                    <div class="close-button">
		                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                    </div>
		                    <img src="/storage/{{$product->image}}">
		                    <div class="embed-responsive embed-responsive-16by9">
		                        <iframe class="embed-responsive-item" frameborder="0"></iframe>
		                    </div>
						</div>

					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
		<!-- /.modal -->
        <section class="container tab">
				<div class="row">
					<div class="table-responsive">
						{!! $product->tech_table !!}
					</div>
				</div>
		</section>

		<section class="container ">
            <h2>Composants</h2>
            <div class="row ">
            	
            	{!! $product->component !!}
            	<div class="col-sm-6 image_det">
            		
				    <img src="/images/{{$product->iamge_det}}">
            	</div>
            </div>
			
		    
		</section>
	
</main>

@endsection