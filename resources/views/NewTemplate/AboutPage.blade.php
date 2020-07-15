@extends('layouts.appnew')

    @section('content')

		<div id="menu-container">
		<div id="menu-1" class="homepage home-section container">
			<div class="our-story">
				<div class="story-bg animated fadeIn"></div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="inner-story animated fadeInRight text-center">
							<h2>ABOUT US</h2>
							<p>This web page made by SEU students, it's about communication system between students university, SEU and scholarship university. This project was made using Laravel</p>
						</div>
					</div>
				</div>
			</div>
			<div class="our-offers">
				<div class="offer-bg animated fadeIn"></div>
				<div class="offer-header">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<div class="offer-title animated fadeInDown">
								<h2>OUR WORK</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="offer-holder">
						<div class="col-md-6">
							<div class="offer-item offer-1 animated fadeInLeft">
								<figure>
									<img src="{{ asset('NewTemplate') }}/img/14.jpg" alt="">
								</figure>
								<div class="offer-content text-center">
									<h4> Programming language , frameworks and libraies  </h4>
									<p> PHP, HTML, CSS and Ajax </p>
							
										<p> Laravel, Bootstrab </p>
									<span class="offer-left"><i></i></span>
									<span class="offer-right"><i></i></span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="offer-item offer-2 animated fadeInRight">
								<figure>
									<img src="{{ asset('NewTemplate') }}/img/10.png" alt="">
								</figure>
								<div class="offer-content text-center">
									<h4>Documnation</h4>
									<p>Contain on the Diagrams thats helps us to develop this system Please Click here <a class="blue" href="Documnation"  >Documnation</a></p>
									<span class="offer-left"><i></i></span>
									<span class="offer-right"><i></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

    @endsection