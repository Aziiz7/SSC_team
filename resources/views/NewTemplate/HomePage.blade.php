@extends('layouts.appnew')

@section('content')

		<div id="menu-1" class="homepage home-section container">
			<div class="home-intro text-center">
				<h2 class="welcome-title animated fadeInLeft">Introduction</h2>
				<p class="animated fadeInRight">Students Commnucation System is a website that developed by SEU Students which allow the students to commnuace with the univarsity and it's could be a Commnucation channel between SEU and The univarsity that the student study in .</p>
				<ul class="list-icons animated fadeInUp">
					<li><i class="icon-trophy"></i></li>
					<li><i class="icon-badge"></i></li>
					<li><i class="icon-magic-wand"></i></li>
					<li><i class="icon-screen-desktop"></i></li>
				</ul>
			</div>
			<div class="home-projects">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="project-title animated fadeInUp">
							<h2>Programming language </h2>
							<p>Students Commnucation System developed with PHP langauge and Laravel framework and Mysql database and for the User Interface we used HTML , CSS and Ajax   </p>
							
						</div>
					</div>
					<div class="project-home-holder col-md-6 col-sm-12">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="project-item one animated fadeInRight">
									<img src="{{ asset('NewTemplate') }}/img/2.jpg" alt="">
									
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="project-item two animated fadeInRight">
									<img src="{{ asset('NewTemplate') }}/img/1.jpg" alt="">
									
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="project-item three animated fadeInRight">
									<img src="{{ asset('NewTemplate') }}/img/8.jpg" alt="">
									
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="project-item four animated fadeInRight">
									<img src="{{ asset('NewTemplate') }}/img/4.jpg" alt="">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
