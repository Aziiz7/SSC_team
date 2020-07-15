@extends('layouts.appnew')

@section('content')

		<div id="menu-1" class="homepage home-section container">
			<div class="home-intro text-center">
				<h1 class="welcome-title animated fadeInLeft">Introduction</h1>
				<p class="animated fadeInRight">Raleway HTML5 template is provided by <span class="blue">template</span><span class="green">mo</span>. Credit goes to <a href="http://unsplash.com">Unsplash</a> for photos. Feel free to modify and use this layout for any personal or commercial website.</p>
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
							<h2>Latest Projects</h2>
							<p>Sed eu turpis vehicula, iaculis sapien eu, molestie libero. Cras ac urna in neque commodo sodales vel et dolor. Pellentesque aliquam semper lectus, nec consequat ex lacinia nec. <br><br>Nunc eget velit nec felis ultrices vulputate venenatis interdum arcu. In ac auctor quam. </p>
							<a href="#" class="pink-button">Continue Journal</a>
						</div>
					</div>
					<div class="project-home-holder col-md-6 col-sm-12">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="project-item one animated fadeInRight">
									<img src="{{ asset('NewTemplate') }}/img/2.jpg" alt="">
									<div class="overlay">
										<h4><a href="#">Project One</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="project-item two animated fadeInRight">
									<img src="{{ asset('NewTemplate') }}/img/1.jpg" alt="">
									<div class="overlay">
										<h4><a href="#">Project Two</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="project-item three animated fadeInRight">
									<img src="{{ asset('NewTemplate') }}/img/8.jpg" alt="">
									<div class="overlay">
										<h4><a href="#">Project Three</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="project-item four animated fadeInRight">
									<img src="{{ asset('NewTemplate') }}/img/4.jpg" alt="">
									<div class="overlay">
										<h4><a href="#">Project Four</a></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
