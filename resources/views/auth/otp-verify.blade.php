@extends('frontend.layouts.main')
@section('content')
 

        <!-- Matchmaking Banner Section Start -->
        <div class="row pt-5 mt-0 xs-top-banner">
           <div class="col-md-5 col-12 mt-0 xs-padd0 exclusive-width-left xs-exc-text1 xs-top-left-banner">
            <div class="col-md-12 col-12 pt-3 font-great-vibes">
                Submit OTP
            </div>
            
            {{-- <div class="float-left icon-border"> --}}
                <div class="col-md-12 col-12">
                <p>  Please enter the 4-digit code sent to your number</p>
            </div>

            <div class="col-md-12 col-12 pt-3 font-great-vibess ">
                           
                    <div class="col-md-12 col-12 text-left swiper-slide card-width">
                     
                     
          
                         
            <form method="POST" action="{{ route('otp.login.send.msg') }}" class="mb-3">
                @csrf

                            <div class="form-group">
                              <label for="otp">OTP :</label>
                              <input type="otp" class="form-control @error('otp') is-invalid @enderror" id="otp" placeholder="Enter 4 digit OTP" name="otp">
                              @error('otp')
                                    <span class="invalid-feedback-validation" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group h6">
                                Don’t got an  OTP ?
                              <a  href="{{ route('register') }}">
                                  {{ __('Resend OTP') }}
                              </a>
                            
                          </div>
                            
                      
                            <button type="submit" class="btn btn-danger">Submit</button>
                          </form>
                        
                         
                          
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