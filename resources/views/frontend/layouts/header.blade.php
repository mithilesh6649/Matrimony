		<!--- Header Section Start -->
		@guest
		
		<div class="row xs-padd0">
			<div class="col-md-3 col-4 xs-logo-new">
				<a href="{{ url('/') }}" rel="noreferrer">
				<img class="desktop-none" src="{{asset('frontend/revamp-images/elite-logo-new.svg')}}" alt="Elite Matrimony">
				<img class="mobile-none" src="{{asset('frontend/revamp-images/elite-logo-mobile-new.svg')}}" alt="Elite Matrimony">
				</a>
			</div>
			<div class="col-md-9 col-8 text-right pt-4 xs-small-text xs-padd0 xs-header tablet-header">
				<!-- <span class="xs-font-white">Call us</span> -->
				<span>
				{{-- <span class="already-membertext">Already registered?</span>  --}}
				
				<a class="login-btn" href="{{ route('register') }}">Register</a>
				<a class="login-btn" href="{{ route('login') }}"  >Login</a>
				
			   </span>
				<span>
					<div class="dropdown1 d-inline-block mx-2">
					  <div class="dropdown-toggle1 dropdown-flag-new">
						<span class="tell-number"><a href="tel: +91 709 206 6066">Call : +91-7092066066</a></span>
					  </div>
					   <div>
					 
						
					  </div>
					</div>
				</span>
				
				<span>
				 <input type="checkbox" class="openSidebarMenu" menuToggle="false" id="openSidebarMenu">
				  <label for="openSidebarMenu" class="sidebarIconToggle">
					<div class="spinner diagonal part-1"></div>
					<div class="spinner horizontal"></div>
					<div class="spinner diagonal part-2"></div>
					</label>
				  <div id="sidebarMenu">
					<ul class="sidebarMenuInner">
					  <li><a href="why-elite-matrimony.html" target="_blank" rel="noreferrer">Why Elite?</a></li>
					  <li><a href="how-it-works/index.html" target="_blank" rel="noreferrer">How Elite works?</a></li>
					  <li><a href="success-story.html" target="_blank" rel="noreferrer">Success Stories</a></li>
					  <li><a href="elite-packages.html" target="_blank" rel="noreferrer">Elite Packages</a></li>
					  <li class="flag-list flag-cont-list">
							<a href="contact-us1.html" target="_blank" rel="noreferrer">Call us at</a>
						  <span><a href="tel: +91 709 206 6066">IND 709 206 6066</a></span>

					  </li>
					</ul>
				  </div>
				  </span>
				
			</div>
		</div>

		@endguest



		@auth

		<div class="row xs-padd0">
			<div class="col-md-3 col-4 xs-logo-new">
				<a href="index.html" rel="noreferrer">
				<img class="desktop-none" src="{{asset('frontend/revamp-images/elite-logo-new.svg')}}" alt="Elite Matrimony">
				<img class="mobile-none" src="{{asset('frontend/revamp-images/elite-logo-mobile-new.svg')}}" alt="Elite Matrimony">
				</a>
			</div>
			<div class="col-md-9 col-8 text-right pt-4 xs-small-text xs-padd0 xs-header tablet-header">
				<!-- <span class="xs-font-white">Call us</span> -->
				<span>
				{{-- <span class="already-membertext">Already registered?</span>  --}}
				
				 
				 

				<a class=" login-btn" href="{{ route('logout') }}"
				onclick="event.preventDefault();
							  document.getElementById('logout-form').submit();">
				 {{ __('Logout') }}
			 </a>

			 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				 @csrf
			 </form> 
				
			   </span>


			   
			 
				
		 
			</div>
		</div>
			
		@endauth
		
		<!--- Header Section End -->
		