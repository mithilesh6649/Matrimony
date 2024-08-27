@extends('frontend.layouts.main')
@section('content')
@php
 $profile_for_whom = \DB::table('proflie_for_dd')->where('status',0)->get();
 
@endphp

 

        <!-- Matchmaking Banner Section Start -->
        <div class="row pt-5 mt-0 xs-top-banner">
           <div class="col-2">
        </div>
            <div class="col-8 mt-0 xs-padd0 exclusive-width-left xs-exc-text1 xs-top-left-banner">
            <div class="col-md-12 col-12 pt-3 font-great-vibes">
                Verify Your Email Address
            </div>
            
          

            <div class="col-md-12 col-12 pt-3 font-great-vibess ">
                           
                    <div class="col-12">
                     
                  
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    Hi {{ Auth::user()->name }}  ,
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-danger" style="font-size:23px;">{{ __('click here to request another') }}</button>.
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