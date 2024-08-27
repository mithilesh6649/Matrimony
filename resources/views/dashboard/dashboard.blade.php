<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.animatedheadline.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/dark.css"> -->

    <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.png')}}" type="image/x-icon">

    <title>Hi</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    {{-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> --}}
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    {{-- <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== --> --}}

    <!-- ==========Header-Section========== -->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="index.html">
                    <img src="{{asset('frontend/revamp-images/elite-logo-new.svg')}}" alt="logo">
                </a>
            </div>
            <ul class="menu">

                <li>
                    <a href="#">My Dashboard</a>
                </li>
                <li>
                    <a href="#">My Profile</a>
                    <ul class="submenu">
                        <li>
                            <a href="index.html">Home One</a>
                        </li>
                        <li>
                            <a href="index2.html">Home Two</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="community.html">Community</a>
                </li>
                <li>
                    <a href="membership.html">Membership</a>
                </li>
                <li>
                    <a href="shop2.html">Shop</a>
                </li>
               
               
                <li class="separator">
                    <span>|</span>
                </li>
                {{-- <li>
                    <div class="serch-icon">
                        <i class="fas fa-search"></i>
                    </div>
                </li> --}}
                {{-- <li>
                    <div class="language-select">
                        <select class="select-bar">
                            <option value="">EN</option>
                            <option value="">IN</option>
                            <option value="">BN</option>
                        </select>
                    </div>
                </li> --}}
                <li class="user-profile">
                    <a href="#">
                        <img src="{{asset('frontend/assets/images/user-demo.png')}}" alt="">
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <a href="#">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
    {{-- <div class="search-overlay">
        <div class="close"><i class="fas fa-times"></i></div>
        <form action="#">
            <input type="text"  placeholder="Write what you want..">
        </form>
    </div> --}}
    <!-- ==========Header-Section========== -->

    <!-- ==========Breadcrumb-Section========== -->
    <section class="breadcrumb-area profile-bc-area">
        {{-- <div class="container">
            <div class="content">
                <h2 class="title extra-padding">
                    Setting
                </h2>
                <ul class="breadcrumb-list extra-padding">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li>
                        Setting
                    </li>
                </ul>
            </div>
        </div> --}}
    </section>
    <!-- ==========Breadcrumb-Section========== -->


    <!-- ========= Profile Section Start -->

    <section class="user-setting-section">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-4 col-md-5">

                    {{--  --}}

                    <div class="col-md-12 mb-2">
                        <div class="profile-about-box">
                            <div class="top-bg"></div>
                            <div class="p-inner-content">
                                <div class="profile-img">
                                    <img src="{{asset('frontend/assets/images/profile/profile-user.png')}}" alt="">
                                    <div class="active-online"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                        
                       
                         
                       
                    

                    {{--  --}}
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                              <button class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div> 
                                <span>My Profile</span>
                                <div class="t-icon">
                                    <i class="fas fa-plus"></i>
                                    <i class="fas fa-minus"></i>
                                </div>
                              </button>
                          </div>

                          
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul class="links">
                                  <li>
                                      <a  class="active" href="user-setting.html">Profile Info</a>

                                      
                                  </li>
                                  <li>
                                      <a href="user-notification.html">Notifications</a>
                                  </li>
                                  <li>
                                      <a href="user-friend-request.html">Friend Requests</a>
                                  </li>
                                  <li>
                                      <a href="user-badges.html">Badges</a>
                                  </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                              <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="icon">
                                    <i class="fas fa-cogs"></i>
                                </div> 
                                <span>
                                    Account
                                </span>
                                <div class="t-icon">
                                    <i class="fas fa-plus"></i>
                                    <i class="fas fa-minus"></i>
                                </div>
                              </button>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="links">
                                    <li>
                                        <a href="user-account-info.html">Account Info</a>
                                    </li>
                                    <li>
                                        <a href="user-change-pass.html">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="user-privicy-setting.html">Privacy Settings</a>
                                    </li>
                                    <li>
                                        <a href="user-verify-account.html">Verified account</a>
                                    </li>
                                    <li>
                                        <a href="user-close-account.html">Close Account</a>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                              <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="icon">
                                    <i class="far fa-credit-card"></i>
                                </div> 
                                <span>
                                    Subscriptions & Payments
                                </span>
                                <div class="t-icon">
                                    <i class="fas fa-plus"></i>
                                    <i class="fas fa-minus"></i>
                                </div>
                              </button>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="links">
                                    <li>
                                        <a href="user-billing.html">Billing & Payout</a>
                                    </li>
                                    <li>
                                        <a href="user-plan.html">Upgrade Membership Plan</a>
                                    </li>
                                    <li>
                                        <a href="user-purchase.html">View Purchase History</a>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-xl-8 col-md-7 ">
                    <div class="page-title">
                        Profile Completeness 10%
                        
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="profile-about-box">
                                <div class="top-bg"></div>
                                <div class="p-inner-content">
                                    <div class="profile-img">
                                        <img src="{{asset('frontend/assets/images/profile/profile-user.png')}}" alt="">
                                        <div class="active-online"></div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="up-photo-card mb-30">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="content">
                                    <h4>
                                        Change Avatar
                                    </h4>
                                    <span>
                                        120x120p size minimum
                                    </span>
                                </div>
                            </div>
                            <div class="up-photo-card">
                                <div class="icon">
                                    <i class="fas fa-image"></i>
                                </div>
                                <div class="content">
                                    <h4>
                                        Change Cover
                                    </h4>
                                    <span>
                                        1200x300p size minimum
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--  --}}
                      
                   

                    {{--  --}}


                    {{--  --}}

                    <div class="faq-area">
                        <div class="faq-wrapper">
                            <div class="faq-item">
                                <div class="faq-title">
                                    <h6 class="title">Basic Details (IMMATRI1)</h6>
                                    <span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                 
                                    {{--  --}}
                                       
                                    <div class="row mt-2 mt-lg-3 mt-md-3 mt-sm-3">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-2 mb-lg-3 mb-md-3">
<div class="p2 gray4-color-L break-word">Full Name</div>
<div class="h6 gray4-color-L mt-lg-1 mt-md-1 break-word">
narjis test
</div>
</div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-2 mb-lg-3 mb-md-3">
<div class="p2 gray4-color-L break-word">Email Id</div>
<div class="h6 gray4-color-L mt-lg-1 mt-md-1 break-word">
votaret465@mfyax.com
</div>
</div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-2 mb-lg-3 mb-md-3">
<div class="p2 gray4-color-L break-word">Mobile Number</div>
<div class="h6 gray4-color-L mt-lg-1 mt-md-1 break-word">
+91-9328583326
</div>
</div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-2 mb-lg-3 mb-md-3">
<div class="p2 gray4-color-L break-word">Mother Tongue</div>
<div class="h6 gray4-color-L mt-lg-1 mt-md-1 break-word">
Tamil
</div>
</div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-2 mb-lg-3 mb-md-3">
<div class="p2 gray4-color-L break-word">Birthdate</div>
<div class="h6 gray4-color-L mt-lg-1 mt-md-1 break-word">
8 January, 2000 (24 Years)
</div>
</div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-2 mb-lg-3 mb-md-3">
<div class="p2 gray4-color-L break-word">Marital Status</div>
<div class="h6 gray4-color-L mt-lg-1 mt-md-1 break-word">
Unmarried
</div>
</div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-2 mb-lg-3 mb-md-3">
<div class="p2 gray4-color-L break-word">Aadhar Number</div>
<div class="h6 gray4-color-L mt-lg-1 mt-md-1 break-word">
N/A
</div>
</div>
                                                                    </div>

                                    {{--  --}}

                                </div>
                            </div>
                            <div class="faq-item active open">
                                <div class="faq-title">
                                    <h6 class="title">Religious Information </h6>
                                    <span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                  
                                    {{--  --}}
                                    <div class="input-info-box mt-30">
                                        
                                        <div class="content" >
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="my-input-box">
                                                        <label for="">Title or Place</label>
                                                        <input type="text" placeholder="Title or Place">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="my-input-box">
                                                        <label for="">Year Started</label>
                                                        <select name="" id="">
                                                            <option value="">2014</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="my-input-box">
                                                        <label for="">Year End</label>
                                                        <select name="" id="">
                                                            <option value="">2017</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="my-input-box">
                                                        <label for="">Description</label>
                                                        <textarea name="" id="" placeholder="Description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="my-input-box">
                                                        <label for="">Title or Place</label>
                                                        <input type="text" placeholder="Title or Place">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="my-input-box">
                                                        <label for="">Year Started</label>
                                                        <select name="" id="">
                                                            <option value="">2014</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="my-input-box">
                                                        <label for="">Year End</label>
                                                        <select name="" id="">
                                                            <option value="">2017</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="my-input-box">
                                                        <label for="">Description</label>
                                                        <textarea name="" id="" placeholder="Description"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--  --}}
                                
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-title">
                                    <h6 class="title">Location Details</h6>
                                    <span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>Being that Tickto does not own any of the tickets sold on our site, we do not have the ability to exchange or replace tickets with other inventory. </p>
                                    <p>If you would like to "upgrade" or change the location of your seats, you can relist your current tickets for sale here and purchase other tickets of your choice. </p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-title">
                                    <h6 class="title">Education & Other                                    </h6>
                                    <span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>Being that Tickto does not own any of the tickets sold on our site, we do not have the ability to exchange or replace tickets with other inventory. </p>
                                    <p>If you would like to "upgrade" or change the location of your seats, you can relist your current tickets for sale here and purchase other tickets of your choice. </p>
                                </div>
                            </div>
                            {{-- <div class="faq-item">
                                <div class="faq-title">
                                    <h6 class="title"> About Us</h6>
                                    <span class="right-icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>Being that Tickto does not own any of the tickets sold on our site, we do not have the ability to exchange or replace tickets with other inventory. </p>
                                    <p>If you would like to "upgrade" or change the location of your seats, you can relist your current tickets for sale here and purchase other tickets of your choice. </p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
 

                    
                </div>
            </div>
        </div>
    </section>

    <!-- ========= Profile Section Start -->


   


    <script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/heandline.js')}}"></script>
    <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/countdown.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/viewport.jquery.js')}}"></script>
    <script src="{{asset('frontend/assets/js/nice-select.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>