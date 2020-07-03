
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Title here</title>

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

    <section class="main bg bg1 logo">
		<div class="layer">
			
			<div class="bottom-grid">
				<div class="logo">
					
					<h1 > <a href="index.html"  class="editContent" style="outline: none; cursor: inherit;" > <img src="\bundles\images\logo.png" alt="SSC" height="19%" > <span class="fa fa-key" style="outline: none; cursor: inherit;"></span> </a></h1>
				</div>
				<div class="links">
					<ul class="links-unordered-list">
						<li class="">
							<a href="#" class="editContent" style="outline: none; cursor: inherit;">Login</a>
						</li>
						<li class="">
							<a href="#" class="editContent" style="outline: none; cursor: inherit;">About Us</a>
						</li>
						<li class="">
							<a href="/register" class="editContent" style="outline: none; cursor: inherit;">Register</a>
						</li>
						<li class="">
							<a href="#" class="editContent" style="outline: none; cursor: inherit;">Contact</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="content-w3ls">
				<div class="text-center icon">
					<span class="fa fa-html5" style="outline: none; cursor: inherit;"></span>
				</div>
				<div class="content-bottom">
                    <form method="POST" action="/register">
                        @csrf <!-- {{ csrf_field() }} -->
                     
                        <div class="field-group editContent">
							<div class="icon-field">
								<span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
							</div>
							<div class="wthree-field">
                          <input name="name" placeholder="Your Name" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
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
                          <input  type="email" name="email" class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"  placeholder="Your Email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
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
                          <input type="password" name="password" ria-hidden="true" style="outline: none; cursor: inherit;" placeholder="Your Password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                         </div>   
                          @error('password')
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
                          <input type="password" name="password_confirmation"  placeholder="Confirm Password" required autocomplete="new-password"/>
                         </div>
                
                       
                         </div>
						 
						                
						 <div class="field-group editContent">
							<div class="icon-field">
								<span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
							</div>
							<div class="wthree-field">
									  <input type="text" name="Univarsity" aria-hidden="true" style="outline: none; cursor: inherit;" placeholder="Your Univarsity" @error('Univarsity') is-invalid @enderror" name="Univarsity" />
									 </div>   
									  @error('password')
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
												  <input type="email" name="univarsityemail" ria-hidden="true" style="outline: none; cursor: inherit;" placeholder="Your Univarsity Email" @error('univarsityemail') is-invalid @enderror" name="univarsityemail" />
												 </div>   
												  @error('password')
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
                          <input type="text" name="grade" ria-hidden="true" style="outline: none; cursor: inherit;" placeholder="Your grade" @error('grade') is-invalid @enderror" name="grade" />
                         </div>   
                          @error('grade')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                              @enderror
                    
						 </div>
						 
						                
						
                
						<ul class="list-login-bottom">
 
							<li class="clearfix"></li>
						</ul>
						<div class="wthree-field">
							<button type="submit" name="login" class="btn" style="outline: none; cursor: inherit;">Login</button>
						</div>
					</form>
				</div>
			</div>
			
			</div><div class="bottom-grid1">
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
				</div></div>
		</div>
	
	</section></div>
	


</body></html>
