@extends('frontend.layouts.main')
@section('content')
@php
 $profile_for_whom = \DB::table('proflie_for_dd')->where('status',0)->get();
 
@endphp

 

        <!-- Matchmaking Banner Section Start -->
        <div class="row pt-5 mt-0 xs-top-banner">
           <div class="col-md-5 col-12 mt-0 xs-padd0 exclusive-width-left xs-exc-text1 xs-top-left-banner">
            <div class="col-md-12 col-12 pt-3 font-great-vibes">
                Create New Account
            </div>
            
            {{-- <div class="float-left icon-border"> --}}
                <div class="col-md-12 col-12">
                <p> We provide the best match making service
                </p>
            </div>

            <div class="col-md-12 col-12 pt-3 font-great-vibess ">
                           
                    <div class="col-md-12 col-12 text-left swiper-slide card-width">
                     
                  
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Full Name Field -->
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="Enter full name" name="name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback-validation" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <!-- Email Field -->
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback-validation" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <!-- Password Field -->
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control  @error('password') is-invalid @enderror" id="pwd" placeholder="Enter password" name="password">
                                @error('password')
                                <span class="invalid-feedback-validation" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <!-- Confirm Password Field -->
                            <div class="form-group">
                                <label for="confirm_pwd">Confirm Password:</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            
                            <!-- Marital Status Dropdown -->
                            <div class="form-group">
                                <label for="profile_for_whom">Profile For Whom:</label>
                                <select class="form-control  @error('profile_for_whom') is-invalid @enderror" id="profile_for_whom" name="profile_for_whom">
                                    <option value="">Select Profile For Whom</option>
                                    @forelse ($profile_for_whom as $item)
                                        <option value="{{ $item->id }}" {{ old('profile_for_whom') == $item->id ? 'selected' : '' }}>
                                            {{ $item->profile_for_name }}
                                        </option>
                                    @empty
                                        <option disabled>No records available</option>
                                    @endforelse
                                </select>
                                @error('profile_for_whom')
                                <span class="invalid-feedback-validation" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <!-- Mobile Number Field -->
                            <div class="form-group">
                                <label for="mobile_number">Mobile Number:</label>
                                <input type="number" class="form-control @error('mobile_number') is-invalid @enderror" id="mobile_number" placeholder="Enter mobile number" name="mobile_number" value="{{ old('mobile_number') }}">
                                @error('mobile_number')
                                <span class="invalid-feedback-validation" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <!-- Remember Me & Forgot Password -->
                            {{-- <div class="form-group form-check d-flex align-items-center justify-content-between mb-lg-5 mb-4">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                </label>
                            </div> --}}
                            
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-danger">Continue</button>
                        </form>
                        
                          <div class="p2 gray4-color-L mt-lg-4 mt-3 text-center">Already have an account?
                            <a href="{{ route('login') }}" class="pink-color-L Poppins-Medium">Log in</a></div>     
                    </div>
        
            </div>
            {{--  --}}

             
            
            

            {{--  --}}

                

            
           </div>
           
           <div class="col-md-7 col-12 text-right pt-0 xs-none1 exclusive-width-right xs-top-right-banner">
            <br>   <br>   <br> 
            <div class="xs-none right-side-img"><img src="{{asset('frontend/revamp-images/elite-matchmaking-banner-1-new.png')}}" class="img-fluid banner-img-ml" alt="Elite Matchmaking"></div>
           </div>
       </div>
       <!-- Matchmaking Banner Section End -->
       
       
       

       
    <div>
        
   </div>
   
</div>

 
 
                
       
      
   </div>
   
   
   
   
  
   

 

 


@endsection