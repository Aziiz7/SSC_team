<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--headerIncludes-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">
 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	<!-- css files -->
	<link rel="stylesheet" href="/bundles/css/style.css" type="text/css" media="all"> <!-- Style-CSS -->
	<link href="/bundles/css/style.css"rel="stylesheet" type="text/css" media="all">
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
	<!-- //google fonts -->
	
</head>

<body>
 
    <div id="page" class="page">

    <section class="main bg bg1">
		<div class="layer">
			
			<div class="bottom-grid">
				<div class="logo">
					<h1> <a href="index.html" class="editContent" style="outline: none; cursor: inherit;"><img src="\bundles\images\logo.png" alt="SSC" height="19%" ><span class="fa fa-key" style="outline: none; cursor: inherit;"></span> </a></h1>
				</div>
				<div class="links">
					<ul class="links-unordered-list">
						<li class="">
                        <a href="/register" class="editContent" style="outline: none; cursor: inherit;">Register</a>
						</li>
						<li class="">
							<a href="/about" class="editContent" style="outline: none; cursor: inherit;">About Us</a>
						</li>
						<li class="">
							<a href="/SendEmailForGuest" class="editContent" style="outline: none; cursor: inherit;">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="content-w3ls">
				<div class="text-center icon">
					<span class="fa fa-html5" style="outline: none; cursor: inherit;"></span>
				</div>
				<!-- <div class="content-bottom"> -->
                <div class="container-lg mt-3 border">
                 <h1>Contact US</h1>

				 <form method="post" action="{{ url('/SendEmailForGuest') }}">
    {{ csrf_field() }}
    @if(isset(Auth::user()->email))
    <script>window.location="/dashboard";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif
						<div class="field-group editContent">
							<div class="icon-field">
								<span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
							</div>
							<div class="wthree-field">
								<input name="name" id="text1" type="name" value="" placeholder="Your Name" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
							</div>
						     @error('name')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                             @enderror
						</div>
						<div class="field-group editContent">
							<div class="icon-field">
								<span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
							</div>
							<div class="wthree-field">
								<input name="email" id="email" type="email" value="" placeholder="example@example.com" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
							</div>
						     @error('email')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                             @enderror 
					    </div>
						<div class="field-group editContent">
							<div class="icon-field">
								<span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
							</div>
							<div class="wthree-field">
								<input name="subject" id="text1" type="subject" value="" placeholder="Your Subject" @error('subject') is-invalid @enderror" name="subject" required autocomplete="subject" />
							</div>
						     @error('subject')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                             @enderror
					    </div>
						<div class="field-group editContent">
							<div class="icon-field">
								<span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
							</div>
							<div class="wthree-field">
								<input name="body" id="body" type="body" value="" placeholder="Your Message" @error('body') is-invalid @enderror" name="body" required autocomplete="body"/>
							</div>
						     @error('body')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                             @enderror
					    </div>
						<!--<div class="field-group editContent">
							<div class="icon-field">
								<span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
							</div>
							<div class="wthree-field">
								<input name="Univarsity" id="text1" type="Univarsity" value="" placeholder="Your Univarsity" @error('Univarsity') is-invalid @enderror" name="Univarsity" value="{{ old('Univarsity') }}" required autocomplete="Univarsity" />
							</div>
						     @error('Univarsity')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                             @enderror
					    </div>
						<div class="field-group editContent">
							<div class="icon-field">
								<span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
							</div>
							<div class="wthree-field">
								<input name="univarsityemail" id="text1" type="univarsityemail" value="" placeholder="Your Univarsity Email" @error('univarsityemail') is-invalid @enderror" name="univarsityemail" value="{{ old('univarsityemail') }}" required autocomplete="univarsityemail" />
							</div>
						     @error('univarsityemail')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                             @enderror
					    </div>
						<div class="field-group editContent">
							<div class="icon-field">
								<span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
							</div>
							<div class="wthree-field">
								<input name="grade" id="grade" type="numeric" value="" placeholder="Your Grade" @error('grade') is-invalid @enderror" name="grade" value="{{ old('grade') }}" required autocomplete="grade" />
							</div>
						     @error('grade')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                             @enderror
					    </div>
						<div class="field-group editContent">
							<div class="icon-field">
								<span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
							</div>
							<div class="wthree-field">
								<input name="semster" id="semster" type="text1" value="" placeholder="Your Semster" @error('semster') is-invalid @enderror" name="semster" value="{{ old('semster') }}" required autocomplete="semster" />
							</div>
						     @error('semster')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                             @enderror
					    </div> -->

						<div class="wthree-field">
							<button type="submit" name="sendemail" class="btn" style="outline: none; cursor: inherit;">Send</button>
						</div>

						<ul class="list-login-bottom">

							<li class="clearfix"></li>
						</ul>
					</form>
				</div>
			</div>
			<div class="bottom-grid1">
				<div class="links">
					<ul class="links-unordered-list">
						<li class="">
							<a href="#" class="editContent" style="outline: none; cursor: inherit;">About Us</a>
						</li>
						<li class="">
							<a href="#" class="editContent" style="outline: none; cursor: inherit;">Privacy Policy</a>
						</li>
						<li class="">
							<a href="#" class="editContent" style="outline: none; cursor: inherit;">Terms of Use</a>
						</li>
					</ul>
				</div>
				<div class="copyright">
					<p>© 2019 Key. All rights reserved | Design by
						<a href="http://w3layouts.com">W3layouts</a>
					</p>
				</div>
			</div>
		</div>
	</section></div>
	


</body></html>