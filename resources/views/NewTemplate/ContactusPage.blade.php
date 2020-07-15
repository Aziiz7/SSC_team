@extends('layouts.appnew')

    @section('content')
	{{ csrf_field() }}
		
		 <form method="post" action="{{ url('/SendEmail') }}">
		 {{ csrf_field() }}
		 <div id="menu-1" class="homepage home-section container"> 
			<div class="contact-header text-center">
				<h1 class="animated fadeInLeft"><span class="blue">Get in Touch</span></h1>
				<p class="animated fadeInRight">Feel free to talk to us about anything.</p>
				<ul class="contact-social animated fadeInUp">
					<li><a href="https://twitter.com/Saudi_EUni?"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.seu.edu.sa/"><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
				</ul>
			</div>
			<div class="contact-holder">
				<div class="row">
					<div class="col-md-6 col-sm-12">
			            <div class="googlemap-wrapper animated fadeInLeft">
                            <div id="map_canvas" class="map-canvas"></div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7244.093962422627!2d46.680823883517704!3d24.793844737631026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfac352db76330a57!2z2KfZhNis2KfZhdi52Kkg2KfZhNiz2LnZiNiv2YrYqSDYp9mE2KfZhNmD2KrYsdmI2YbZitipINin2YTYp9iv2KfYsdipINmI2YLYs9mFINin2YTYt9mE2KfYqA!5e0!3m2!1sar!2ssa!4v1594624161378!5m2!1sar!2ssa" width="1090" height="530" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
					</div>		
					
					<div class="col-md-6 col-sm-12">
						<div class="contact-form animated fadeInUp">
							<h4>Send us a Message</h4>
							<div class="row">
								<fieldset class="col-md-6">
								<input name="name" id="text1" type="name" value="" placeholder="Your Name" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"/>
								@error('name')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
								</fieldset>
								<fieldset class="col-md-6">
								<input name="email" id="email" type="email" value="" placeholder="example@example.com" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
								@error('email')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
								</fieldset>
								<fieldset class="col-md-12">
								<input name="subject" id="text1" type="subject" value="" placeholder="Your Subject" @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject"/>
								 @error('subject')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror 
								</fieldset>
								<fieldset class="col-md-12">
									<textarea name="body" id="body" type="body" value="" placeholder="Your Message" @error('body') is-invalid @enderror" name="body" value="{{ old('body') }}" required autocomplete="body"></textarea>
									@error('body')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
								</fieldset>
								<fieldset class="col-md-12">
								    <button type="submit" class="btn btn-primary">
                                       Send Email
                                    </button>
								</fieldset>
							</div>
						</div>
					</div>
				</div>
			</div>
		 </div>
	     </div>
	     </form>

	@endsection