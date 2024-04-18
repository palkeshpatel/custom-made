@extends('layouts.default')
@section('content')

		<!--End Main Header -->

		<!--Page Title-->
		<section class="page-title" style="background-image:url({{ url('images/banners/select-template.jpg') }});">
			<div class="auto-container">
				<div class="content">
					<h1>Select <span> Template</span></h1>
					<ul class="page-breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>Select Template</li>
					</ul>
				</div>
			</div>
		</section>
		<!--End Page Title-->

		<!-- Portfolio Section Two-->
		<section class="portfolio-section-two">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="title">Portfolio</div>
					<h2>We are very happy for our <br> Project <span>done</span></h2>
				</div>

                @include('pages.templates')
			</div>
		</section>

		<!-- Call To Action Section -->
		<section class="call-to-action-section">
			<div class="auto-container">
				<div class="sec-title centered">
					<h2>You are interested <br> to hire our <span>team ?</span></h2>
				</div>
				<div class="inner-container wow bounce" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="clearfix">

						<div class="pull-left">
							<div class="text">Send us your email address, we will contact!</div>
						</div>

						<div class="pull-right">
							<a href="contact.html" class="theme-btn btn-style-one">Send Today!</a>
						</div>

					</div>
				</div>
			</div>
		</section>
        <div class="select-template-pop">
			<div class="select-template-pop-top">
				<div class="select-template-pop-left">
					<h5 id="template_title">Content Strategy</h5>
					<div class="designation" id="template_category" >DIGITAL marketing</div>
				</div>
				<div class="select-template-pop-right">
					<a id='order-now' href='{{ url('order-now') }}' type="button" class="select-template-btn" >Order Now!</a>
					<div class="close-template" onclick='$(".select-template-pop").hide()'>X</div>
				</div>
			</div>
			<div class="select-template-pop-bottom">
				<iframe id="show-template-iframe" src="" /></iframe>
			</div>
		</div>
		<!-- End Call To Action Section -->

@stop
