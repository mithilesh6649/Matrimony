@extends('frontend.layouts.main')
@section('content')
 

        <!-- Matchmaking Banner Section Start -->
        <div class="row pt-5 mt-0 xs-top-banner">
           <div class="col-md-5 col-12 mt-0 xs-padd0 exclusive-width-left xs-exc-text1 xs-top-left-banner">
               <!-- <div class="xs-none1 mb-10 title-font-text">Introducing India's First-ever</div> -->
               <div class="col-md-12 col-12 pl-0 header-title">The largest and most successful matchmaking service for Elite from Matrimony.com  (BharatMatrimony) group</div>
               <!-- <div class="col-md-12 col-12 pl-0 header-subtitle">Powered by Matrimony.com - The Leader in online Matchmaking</div> -->
               
               <div class="xs-none1">
               <div class="tag-img" style="display: none;">
                   <img src="{{asset('frontend/revamp-images/elite-icon-tag.svg')}}" class="xs-none" alt="Tag Border Image">
                   <img src="{{asset('frontend/revamp-images/elite-icon-tag-mobile.svg')}}" class="md-none md-none-edge" alt="Tag Border Image">
               </div>
               <div class="col-md-12 col-12 pl-0 float-left mt-3 exc-list-margin xs-none">
                   <div class="float-left icon-border">
                       <img src="{{asset('frontend/revamp-images/elite-usp-icon-1.svg')}}" alt="Elite Icon">
                       <p>Serviced over <br> 25,000 Elite <br> Customers</p>
                   </div>
                   
                   <div class="usp-border"></div>
                   
                   <div class="float-left icon-border">
                       <img src="{{asset('frontend/revamp-images/elite-usp-icon-2.svg')}}" alt="Elite Icon">
                       <p>Largest pool <br> of Elite Profiles</p>
                   </div>
                   
                   <div class="usp-border"></div>
                   
                   <div class="float-left icon-border">
                       <img src="{{asset('frontend/revamp-images/elite-usp-icon-3.svg')}}" alt="Elite Icon">
                       <p>Dedicated <br> Relationship <br> Manager</p>
                   </div>
                
               </div>
               
               
               </div>
           </div>
           
           <div class="col-md-7 col-12 text-right pt-0 xs-none1 exclusive-width-right xs-top-right-banner">
               <div class="xs-none right-side-img"><img src="{{asset('frontend/revamp-images/elite-matchmaking-banner-1-new.png')}}" class="img-fluid banner-img-ml" alt="Elite Matchmaking"></div>
               
               <div class="md-none md-none-edge"><img src="{{asset('frontend/revamp-images/elite-matchmaking-mobilebanner-1.png')}}" class="img-fluid banner-img-ml" alt="Elite Matchmaking"></div>
           </div>
       </div>
       <!-- Matchmaking Banner Section End -->
       
       
       

       
    <div>
        
   </div>
   
</div>

 
 
                
       
      
   </div>
   
   
   <div class="container-fluid bg-banner-1">
   <div class="row topright-hide">
     <!-- <img src="revamp-images/topright.png" class="how-it-banner" alt="Elite Arrow"> -->
   </div>
       <div class="container-min ">
        
           <!--- How it works? Section Start -->
           @include('frontend.partials.how-works') 
           <!--- How it works Section End -->
       
           
       </div>
   </div>
   
  
   

 

 


@endsection