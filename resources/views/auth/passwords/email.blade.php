@extends('frontend.layouts.main')
@section('content')
 

 

        <!-- Matchmaking Banner Section Start -->
        <div class="row pt-5 mt-0 xs-top-banner">
           <div class="col-2">
        </div>
            <div class="col-8 mt-0 xs-padd0 exclusive-width-left xs-exc-text1 xs-top-left-banner">
            <div class="col-md-12 col-12 pt-3 font-great-vibes">
                Reset Password
            </div>
            
          

            <div class="col-md-12 col-12 pt-3 font-great-vibess ">
                           
                    <div class="col-12">
                     
                  
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                          <!-- Email Field -->
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback-validation" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-danger">  {{ __('Send Password Reset Link') }}</button>
                    </form>
                           
                         
                          
                        
                    </div>
        
            </div>
            {{--  --}}

             
            
            

            {{--  --}}

                

            
        </div>
           
          
       </div>
       <!-- Matchmaking Banner Section End -->
       
       
       

       
    
 
</div>

    
   </div>
   

@endsection