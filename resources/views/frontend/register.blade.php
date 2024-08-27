@extends('frontend.layouts.main')
@section('content')
 

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
                     
                  
                         
                        <form action="/action_page.php">
                            <!-- Full Name Field -->
                            <div class="form-group">
                              <label for="fullname">Full Name:</label>
                              <input type="text" class="form-control" id="fullname" placeholder="Enter full name" name="fullname">
                            </div>
                          
                            <!-- Email Field -->
                            <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                          
                            <!-- Password Field -->
                            <div class="form-group">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                            </div>
                          
                            <!-- Confirm Password Field -->
                            <div class="form-group">
                              <label for="confirm_pwd">Confirm Password:</label>
                              <input type="password" class="form-control" id="confirm_pwd" placeholder="Confirm password" name="confirm_password">
                            </div>
                          
                            <!-- Marital Status Dropdown -->
                            <div class="form-group">
                              <label for="marital_status">Marital Status:</label>
                              <select class="form-control" id="marital_status" name="marital_status">
                                <option value="">Select marital status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                              </select>
                            </div>
                          
                            <!-- Gender Radio Buttons -->
                            <div class="form-group">
                              <label>Gender:</label>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" id="gender_male" name="gender" value="male">
                                <label class="form-check-label" for="gender_male">Male</label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" id="gender_female" name="gender" value="female">
                                <label class="form-check-label" for="gender_female">Female</label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" id="gender_other" name="gender" value="other">
                                <label class="form-check-label" for="gender_other">Other</label>
                              </div>
                            </div>
                          
                            <!-- Mobile Number Field -->
                            <div class="form-group">
                              <label for="mobile">Mobile Number:</label>
                              <input type="tel" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile">
                            </div>
                          
                            <!-- Remember Me & Forgot Password -->
                            <div class="form-group form-check d-flex align-items-center justify-content-between mb-lg-5 mb-4">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                              </label>
                              
                            </div>
                          
                            <!-- Submit Button -->
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