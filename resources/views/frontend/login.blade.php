@extends('frontend.layouts.main')
@section('content')
 

        <!-- Matchmaking Banner Section Start -->
        <div class="row pt-5 mt-0 xs-top-banner">
           <div class="col-md-5 col-12 mt-0 xs-padd0 exclusive-width-left xs-exc-text1 xs-top-left-banner">
            <div class="col-md-12 col-12 pt-3 font-great-vibes">
                Log in to your Account
            </div>
            
            {{-- <div class="float-left icon-border"> --}}
                <div class="col-md-12 col-12">
                <p>Welcome back! Please enter your details.</p>
            </div>

            <div class="col-md-12 col-12 pt-3 font-great-vibess ">
                           
                    <div class="col-md-12 col-12 text-left swiper-slide card-width">
                     
                        <button  class="btn btn-danger" style="width:100%">Login With OTP</button>
                        <hr>
                        <div class="or-withline-center my-lg-4 my-3 p2 gray3-color-L
                position-relative d-flex align-items-center justify-content-center">
              <span class="white-bgcolor-L">Or</span>
            </div>
            <hr>
                         
                        <form action="/action_page.php">
                            <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                            </div>

                          
                            <div class="form-group form-check d-flex align-items-center justify-content-between mb-lg-5 mb-4 ">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                              </label>
                              <div class="h6 "><a href="login/forgot-password.html" class="blue-color-L">Forgot password?</a></div>
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