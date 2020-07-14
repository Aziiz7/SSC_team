<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<title>Raleway - Creative Animated Template</title>
<!--
Raleway Template 
http://www.templatemo.com/preview/templatemo_421_raleway
-->
	<link rel="stylesheet" href="{{ asset('NewTemplate') }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('NewTemplate') }}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('NewTemplate') }}/css/simple-line-icons.css">
	<link rel="stylesheet" href="{{ asset('NewTemplate') }}/css/animate.css">
	<link rel="stylesheet" href="{{ asset('NewTemplate') }}/css/templatemo_style.css">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="site-header container animated fadeInDown">
		<div class="header-wrapper">
			<div class="row">
				<div class="col-md-3">
					<div class="site-branding">
						<a href="{{url('/home')}}"><h1><span class="blue">Raleway</span></h1></a>
					</div>
				</div>
				<a href="#" class="toggle-nav hidden-md hidden-lg">
					<i class="fa fa-bars"></i>
				</a>
				<div class="col-md-8">
					<nav id="nav" class="main-navigation hidden-xs hidden-sm">
						<ul class="main-menu">
						<li class="nav-item dropdown"><a href="{{ route('home') }}">Home</a></li>
							<li><a href="{{ route('about') }}">About Us</a></li>
							<li><a href="{{ url('dashboard') }}">Dashboard</a></li>
							<li><a href="{{ url('newrequest') }}">New Message</a></li>
							<li><a href="{{ url('SendEmail') }}">Contact Us</a></li>
							<li><div class="dropdown">
                                 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> {{ Auth::user()->name }}
                                    <span class="caret"></span></button>
								    <ul class="dropdown-menu">
                                         <li><a href="{{ url('/logout') }}">Logout</a></li>
                                         <li><a href="{{ url('/students') }}">Students</a></li>
                                         <li> <a href="{{ route('admin.users.index') }}">User Management</a></li>
									</ul>
                                 </div>
							</li>
						</ul>
					</nav>
					<nav class="main-navigation menu-responsive hidden-md hidden-lg">
						<ul class="main-menu">
						<li><a href="{{ route('home') }}">Home</a></li>
							<li><a href="{{ route('about') }}">About Us</a></li>
							<li><a href="{{ url('dashboard') }}">Dashboard</a></li>
							<li><a href="{{ url('newrequest') }}">New Message</a></li>
							<li><a href="{{ url('SendEmail') }}">Contact Us</a></li>
							<li><div class="dropdown">
                                 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> {{ Auth::user()->name }}
                                    <span class="caret"></span></button>
								    <ul class="dropdown-menu">
                                         <li><a href="{{ url('/logout') }}">Logout</a></li>
                                         <li><a href="{{ url('/students') }}">Students</a></li>
                                         <li> <a href="{{ route('admin.users.index') }}">User Management</a></li>
									</ul>
                                 </div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	@yield('content')

    <footer class="site-footer container text-center">
		<div class="row">
			<div class="col-md-12">
				<div class="main-footer">
					<ul class="social">
						<li><a href="https://www.facebook.com/SaudiElectronicUniversity/">Facebook</a></li>
						<li><a href="https://twitter.com/Saudi_EUni?">Twitter</a></li>
						<li><a href="#">Instagram</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 copyright">
				<p>Copyright &copy; 2084 <a href="https://www.seu.edu.sa/">SEU</a></p>
			</div>
		</div>
	</footer>
	<!-- templatemo 421 raleway -->
	<span class="border-top"></span>
	<span class="border-left"></span>
	<span class="border-right"></span>
	<span class="border-bottom"></span>
	<span class="shape-1"></span>
	<span class="shape-2"></span>

	<script src="{{ asset('NewTemplate') }}/js/jquery.min.js"></script>
	<script src="{{ asset('NewTemplate') }}/js/templatemo_custom.js"></script>
</body>
</html>