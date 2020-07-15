<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	   
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">

	<title>SCS</title>

	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <!--headerIncludes-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="/css/app.css">

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- css files -->

  <!-- //css files -->
  
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
  <!-- //google fonts -->
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

					
						<a href="{{url('/home')}}"><h1><span class="blue">SCS</span></h1></a>
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
	<div class="container" >
	<div class ="col-mid-12 col-lg-12 " >
		@include('inc.errmessages')
		  </div>
	</div>
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
				<p>Copyright &copy; 2020 <a href="https://www.seu.edu.sa/">SEU</a></p>
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

	<script src="{{ asset('NewTemplate') }}/js/templatemo_custom.js"></script>
	<script type="text/javascript">


  
		// Show  message function
		$(document).on('click', '.show-modal', function() {
		$('#showmsg').modal('show');
		$('#i').text($(this).data('id'));
		$('#ti').text($(this).data('title'));
		$('#by').text($(this).data('message'));
		$('.modal-title').text($(this).data('title'));
	   
		});
	  
		
		// Show users function
		$(document).on('click', '.show-modal', function() {
		$('#showstd').modal('show');
		$('#i').text($(this).data('id'));
		$('#ti').text($(this).data('Univarsity'));
		$('#by0').text($(this).data('email'));
		$('#by2').text($(this).data('grade'));
		$('#by3').text($(this).data('semster'));
		$('#b1').text($(this).data('univarsityemail'));
		$('.modal-title').text($(this).data('id'));
	   
		});
		
	  </script>
</body>
</html>