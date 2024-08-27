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
       
       <div class="row md-none md-none-edge xs-list-service-margin">
           <div class="xs-list-service">
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
   <div class="row topright-hide">
         <!-- <img src="revamp-images/bottomleft.png" class="bottom-left"  alt="Elite Arrow"> -->
       </div>
</div>

<div class="row topright-hide">
 <img src="{{asset('frontend/revamp-images/whyelite-right.png')}}" class="whyelite-bottom" alt="Elite Arrow">
</div>

<div class="container-fluid ">
<div class="row topright-hide">
     <img src="{{asset('frontend/revamp-images/whyelite-left.svg')}}" class="whyelite-left-img" alt="Elite Arrow">
   </div>
       <div class="mx-auto overlays" id="thankyouIdv" style="display:none;">
               <div class="paddt10 txt-center form-popup">
               <div class="form-success">
                   <span aria-hidden="true" class="thank-you-cross">&times;</span>
                   <img src="{{asset('frontend/revamp-images/thankyou-msg.svg')}}"	class="responsive" alt="Elite Message">
                   <span class="thank-you-msg">Thank you for your interest.</span><br>
                   <h5 class="thank-popup">Our executives  will contact you shortly.</h5>
                   </div>
               </div>
           </div> 
           <div class="mx-auto" id="errordiv" style="border: 1px solid #b30c0c;margin-top: 5px;width: 85%;text-align: center;display:none;">
           <div class="paddt10 txt-center" style="padding: 5px;">
               <div class="form-success" style="font-size: 16px;color: #000000;"></div>
           </div>
               </div>
               </div>
                
       <div class="container-min " >
           <!--- Why Elite Matrimony Section Start -->
           @include('frontend.partials.why') 
           <!--- Why Elite Matrimony Section End --> 
       </div>
       <div class="row topright-hide">
     <img src="{{asset('frontend/revamp-images/whyelite-right.png')}}" class="whyelite-bottom" alt="Elite Arrow">
   </div>
   </div>
   
   <div class="row topright-hide">
     <img src="{{asset('frontend/revamp-images/whyelite-left.svg')}}" class="whyelite-left-img" alt="Elite Arrow">
   </div>
   <div class="container-fluid bg-banner-1">
   <div class="row topright-hide">
     <!-- <img src="revamp-images/topright.png" class="how-it-banner" alt="Elite Arrow"> -->
   </div>
       <div class="container-min">
           <!--- How it works? Section Start -->
           @include('frontend.partials.how-works') 
           <!--- How it works Section End -->
       
           
       </div>
   </div>
   
   <div class="row topright-hide">
     <img src="{{asset('frontend/revamp-images/whyelite-right.png')}}" class="whyelite-bottom" alt="Elite Arrow">
   </div>
   

<div class="container-fluid bg-banner-1" id="popup-view-btm" style="display: none;">
<div class="row topright-hide">
     {{-- <img src="{{asset('frontend/revamp-images/topright.png')}}" class="match-img" alt="Elite Arrow"> --}}
       </div>
       <a name="experienceelite"></a>
   <div class="container-min container-max1">
       
       <!-- Matchmaking Banner Section Start -->
       <div class="row pt-2 mt-2">
           <div class="col-md-12 col-12 pt-3 text-center font-great-vibes">
               Experience truly Elite Matchmaking!  
           </div>
       </div>
       <div class="row pt-4 mt-2 d-align-items-center">
           <div class="col-md-6 col-12 text-right pt-0 xs-none banner-img-width">
               <img src="{{asset('frontend/revamp-images/elite-matchmaking-banner-2.png')}}" class="img-fluid img-width-mm" alt="Elite Matchmaking">
           </div>
           
           <div class="col-md-5 col-12 register-form-bg" id="getinv2hh">
               <div class="col-md-12 col-12 md-none xs-padd0 md-none-edge">
                   <img src="{{asset('frontend/revamp-images/elite-matchmaking-mobile-banner-2.png')}}" class="img-fluid img-width-mm1"  alt="Elite Matchmaking">
               </div>
               
               <div class="col-md-12 col-md-offset-0 col-sm-offset-0 col-xs-offset-4 banner-txt" id="getinv2" style="display:none;">
               <!--<script language="javascript">document.write(btntext[btnindex]);document.getElementById('getinv').value=btntext[btnindex];</script>-->
               Over 14 years of exclusive matchmaking service  <br/> for the upper crust of society!
               </div>
               
               
               <div class="mx-auto" id=" " style="border: 1px solid #b30c0c;margin-top: 5px;width: 85%;text-align: center;display:none;">
               <div class="paddt10 txt-center" style="padding: 5px;">
                   <div class="form-success" style="font-size: 16px;color: #000000;"></div>
               </div>
               </div> 
               <!--2nd form-->
               <div class="col-md-12 col-12 share-text" >
                   Share your details, and we'll connect with you
               </div>
               <div class="col-md-12 col-12 text-center pt-3 xs-form-pad">
               <form name="eliteentryFrm" class="elite-invite-form" method="post" action="https://www.elitematrimony.com/?s=3">
                  <div class="form-group form-group-cust e-inline-label-div">
                       <label id="error-message-name3" class="e-inline-label" style="display:none">Please enter your name</label>
                       <input type="text" maxlength="40" name="name" class="form-control input-name" placeholder="Enter Your Name" id="elite-invite-fm-name"/>
                  </div>	
                  <div class="form-group float-left form-group-cust e-inline-label-div">
                   <select class="form-control1 custom-select col-md-3 float-left select-option-ctry" name="countryCode"  id="countryCodeSel">
                     <optgroup id='country-optgroup-Frequently-Used' label='Top countries'> </optgroup><option data-text="Australia (+61)" data-value="+61"  value="61" >Australia (+61)</option><option data-text="India (+91)" data-value="+91"  value="91" >India (+91)</option><option data-text="Malaysia (+60)" data-value="+60"  value="60" >Malaysia (+60)</option><option data-text="New Zealand (+64)" data-value="+64"  value="64" >New Zealand (+64)</option><option data-text="Singapore (+65)" data-value="+65"  value="65" >Singapore (+65)</option><option data-text="United Arab Emirates (+971)" data-value="+971"  value="971" >United Arab Emirates (+971)</option><option data-text="United Kingdom (+44)" data-value="+44"  value="44" >United Kingdom (+44)</option><option data-text="United States of America (+1)" data-value="+1"  value="1" >United States of America (+1)</option><option data-text="Canada (+1)" data-value="+1"  value="1" >Canada (+1)</option><optgroup id='country-optgroup-More-Used' label='All countries'> </optgroup><option data-text="Afghanistan (+93)" data-value="+93"  value="93" >Afghanistan (+93)</option><option data-text="Albania (+355)" data-value="+355"  value="355" >Albania (+355)</option><option data-text="Algeria (+213)" data-value="+213"  value="213" >Algeria (+213)</option><option data-text="American Samoa (+684)" data-value="+684"  value="684" >American Samoa (+684)</option><option data-text="Andorra (+376)" data-value="+376"  value="376" >Andorra (+376)</option><option data-text="Angola (+244)" data-value="+244"  value="244" >Angola (+244)</option><option data-text="Anguilla (+1264)" data-value="+1264"  value="1264" >Anguilla (+1264)</option><option data-text="Antigua and Barbuda (+1268)" data-value="+1268"  value="1268" >Antigua and Barbuda (+1268)</option><option data-text="Argentine (+54)" data-value="+54"  value="54" >Argentine (+54)</option><option data-text="Armenia (+374)" data-value="+374"  value="374" >Armenia (+374)</option><option data-text="Aruba (+297)" data-value="+297"  value="297" >Aruba (+297)</option><option data-text="Ascension (+247)" data-value="+247"  value="247" >Ascension (+247)</option><option data-text="Australia (+61)" data-value="+61"  value="61" >Australia (+61)</option><option data-text="Austria (+43)" data-value="+43"  value="43" >Austria (+43)</option><option data-text="Azerbaijani (+994)" data-value="+994"  value="994" >Azerbaijani (+994)</option><option data-text="Bahamas (+1242)" data-value="+1242"  value="1242" >Bahamas (+1242)</option><option data-text="Bahrain (+973)" data-value="+973"  value="973" >Bahrain (+973)</option><option data-text="Bangladesh (+880)" data-value="+880"  value="880" >Bangladesh (+880)</option><option data-text="Barbados (+246)" data-value="+246"  value="246" >Barbados (+246)</option><option data-text="Belarus (+375)" data-value="+375"  value="375" >Belarus (+375)</option><option data-text="Belgium (+32)" data-value="+32"  value="32" >Belgium (+32)</option><option data-text="Belize (+501)" data-value="+501"  value="501" >Belize (+501)</option><option data-text="Benin (+229)" data-value="+229"  value="229" >Benin (+229)</option><option data-text="Bermuda (+441)" data-value="+441"  value="441" >Bermuda (+441)</option><option data-text="Bhutan (+975)" data-value="+975"  value="975" >Bhutan (+975)</option><option data-text="Bolivia (+591)" data-value="+591"  value="591" >Bolivia (+591)</option><option data-text="Bosnia and Herzegovina (+387)" data-value="+387"  value="387" >Bosnia and Herzegovina (+387)</option><option data-text="Botswana (+267)" data-value="+267"  value="267" >Botswana (+267)</option><option data-text="Brazil (+55)" data-value="+55"  value="55" >Brazil (+55)</option><option data-text="British Virgin Islands (+284)" data-value="+284"  value="284" >British Virgin Islands (+284)</option><option data-text="Brunei (+673)" data-value="+673"  value="673" >Brunei (+673)</option><option data-text="Bulgaria (+359)" data-value="+359"  value="359" >Bulgaria (+359)</option><option data-text="Burkina Faso (+226)" data-value="+226"  value="226" >Burkina Faso (+226)</option><option data-text="Burundi (+257)" data-value="+257"  value="257" >Burundi (+257)</option><option data-text="Cambodia (+855)" data-value="+855"  value="855" >Cambodia (+855)</option><option data-text="Cameroon (+237)" data-value="+237"  value="237" >Cameroon (+237)</option><option data-text="United States of America (+1)" data-value="+1"  value="1" >United States of America (+1)</option><option data-text="Cape Verde (+238)" data-value="+238"  value="238" >Cape Verde (+238)</option><option data-text="Cayman Islands (+345)" data-value="+345"  value="345" >Cayman Islands (+345)</option><option data-text="Central African Republic (+236)" data-value="+236"  value="236" >Central African Republic (+236)</option><option data-text="Chad (+235)" data-value="+235"  value="235" >Chad (+235)</option><option data-text="Chile (+56)" data-value="+56"  value="56" >Chile (+56)</option><option data-text="China (+86)" data-value="+86"  value="86" >China (+86)</option><option data-text="Colombia (+57)" data-value="+57"  value="57" >Colombia (+57)</option><option data-text="Comoros (+269)" data-value="+269"  value="269" >Comoros (+269)</option><option data-text="Congo (+242)" data-value="+242"  value="242" >Congo (+242)</option><option data-text="Cook Islands (+682)" data-value="+682"  value="682" >Cook Islands (+682)</option><option data-text="Costa Rica (+506)" data-value="+506"  value="506" >Costa Rica (+506)</option><option data-text="Croatia (+385)" data-value="+385"  value="385" >Croatia (+385)</option><option data-text="Cuba (+53)" data-value="+53"  value="53" >Cuba (+53)</option><option data-text="Cyprus (+357)" data-value="+357"  value="357" >Cyprus (+357)</option><option data-text="Czech Republic (+420)" data-value="+420"  value="420" >Czech Republic (+420)</option><option data-text="Denmark (+45)" data-value="+45"  value="45" >Denmark (+45)</option><option data-text="Djibouti (+253)" data-value="+253"  value="253" >Djibouti (+253)</option><option data-text="Dominica (+767)" data-value="+767"  value="767" >Dominica (+767)</option><option data-text="Dominican Republic (+809)" data-value="+809"  value="809" >Dominican Republic (+809)</option><option data-text="East Timor (+670)" data-value="+670"  value="670" >East Timor (+670)</option><option data-text="Ecuador (+593)" data-value="+593"  value="593" >Ecuador (+593)</option><option data-text="Egypt (+20)" data-value="+20"  value="20" >Egypt (+20)</option><option data-text="El Salvador (+503)" data-value="+503"  value="503" >El Salvador (+503)</option><option data-text="Equatorial Guinea (+240)" data-value="+240"  value="240" >Equatorial Guinea (+240)</option><option data-text="Eritrea (+291)" data-value="+291"  value="291" >Eritrea (+291)</option><option data-text="Estonia (+372)" data-value="+372"  value="372" >Estonia (+372)</option><option data-text="Ethiopia (+251)" data-value="+251"  value="251" >Ethiopia (+251)</option><option data-text="Falkland Islands (+500)" data-value="+500"  value="500" >Falkland Islands (+500)</option><option data-text="Faroe Islands (+298)" data-value="+298"  value="298" >Faroe Islands (+298)</option><option data-text="Fiji (+679)" data-value="+679"  value="679" >Fiji (+679)</option><option data-text="Finland (+358)" data-value="+358"  value="358" >Finland (+358)</option><option data-text="France (+33)" data-value="+33"  value="33" >France (+33)</option><option data-text="French Guiana (+594)" data-value="+594"  value="594" >French Guiana (+594)</option><option data-text="French Polynesia (+689)" data-value="+689"  value="689" >French Polynesia (+689)</option><option data-text="Gabonese (+241)" data-value="+241"  value="241" >Gabonese (+241)</option><option data-text="Gambia (+220)" data-value="+220"  value="220" >Gambia (+220)</option><option data-text="Georgia (+995)" data-value="+995"  value="995" >Georgia (+995)</option><option data-text="Germany (+49)" data-value="+49"  value="49" >Germany (+49)</option><option data-text="Ghana (+233)" data-value="+233"  value="233" >Ghana (+233)</option><option data-text="Gibraltar (+350)" data-value="+350"  value="350" >Gibraltar (+350)</option><option data-text="Greece (+30)" data-value="+30"  value="30" >Greece (+30)</option><option data-text="Greenland (+299)" data-value="+299"  value="299" >Greenland (+299)</option><option data-text="Grenada (+473)" data-value="+473"  value="473" >Grenada (+473)</option><option data-text="Guadeloupe (+590)" data-value="+590"  value="590" >Guadeloupe (+590)</option><option data-text="Guam (+671)" data-value="+671"  value="671" >Guam (+671)</option><option data-text="Guatemala (+502)" data-value="+502"  value="502" >Guatemala (+502)</option><option data-text="Guinea (+224)" data-value="+224"  value="224" >Guinea (+224)</option><option data-text="Guinea-Bissau (+245)" data-value="+245"  value="245" >Guinea-Bissau (+245)</option><option data-text="Guyana (+592)" data-value="+592"  value="592" >Guyana (+592)</option><option data-text="Haiti (+509)" data-value="+509"  value="509" >Haiti (+509)</option><option data-text="Honduras (+504)" data-value="+504"  value="504" >Honduras (+504)</option><option data-text="HongKong (+852)" data-value="+852"  value="852" >HongKong (+852)</option><option data-text="Hungary (+36)" data-value="+36"  value="36" >Hungary (+36)</option><option data-text="Iceland (+354)" data-value="+354"  value="354" >Iceland (+354)</option><option data-text="India (+91)" data-value="+91"  value="91" Selected>India (+91)</option><option data-text="Indonesia (+62)" data-value="+62"  value="62" >Indonesia (+62)</option><option data-text="Iran (+98)" data-value="+98"  value="98" >Iran (+98)</option><option data-text="Iraq (+964)" data-value="+964"  value="964" >Iraq (+964)</option><option data-text="Ireland (+353)" data-value="+353"  value="353" >Ireland (+353)</option><option data-text="Israel (+972)" data-value="+972"  value="972" >Israel (+972)</option><option data-text="Italy (+39)" data-value="+39"  value="39" >Italy (+39)</option><option data-text="Jamaica (+876)" data-value="+876"  value="876" >Jamaica (+876)</option><option data-text="Japan (+81)" data-value="+81"  value="81" >Japan (+81)</option><option data-text="Jordan (+962)" data-value="+962"  value="962" >Jordan (+962)</option><option data-text="Kenya (+254)" data-value="+254"  value="254" >Kenya (+254)</option><option data-text="Kiribati (+686)" data-value="+686"  value="686" >Kiribati (+686)</option><option data-text="Korea (+82)" data-value="+82"  value="82" >Korea (+82)</option><option data-text="Kuwait (+965)" data-value="+965"  value="965" >Kuwait (+965)</option><option data-text="Kyrgyz (+996)" data-value="+996"  value="996" >Kyrgyz (+996)</option><option data-text="Laos (+856)" data-value="+856"  value="856" >Laos (+856)</option><option data-text="Latvia (+371)" data-value="+371"  value="371" >Latvia (+371)</option><option data-text="Lebanon (+961)" data-value="+961"  value="961" >Lebanon (+961)</option><option data-text="Lesotho (Kingdom of) (+266)" data-value="+266"  value="266" >Lesotho (Kingdom of) (+266)</option><option data-text="Liberia (+231)" data-value="+231"  value="231" >Liberia (+231)</option><option data-text="Libya (+218)" data-value="+218"  value="218" >Libya (+218)</option><option data-text="Liechtenstein (+423)" data-value="+423"  value="423" >Liechtenstein (+423)</option><option data-text="Lithuania (+370)" data-value="+370"  value="370" >Lithuania (+370)</option><option data-text="Luxembourg (+352)" data-value="+352"  value="352" >Luxembourg (+352)</option><option data-text="Macau (+853)" data-value="+853"  value="853" >Macau (+853)</option><option data-text="Madagascar (+261)" data-value="+261"  value="261" >Madagascar (+261)</option><option data-text="Malawi (+265)" data-value="+265"  value="265" >Malawi (+265)</option><option data-text="Malaysia (+60)" data-value="+60"  value="60" >Malaysia (+60)</option><option data-text="Maldives (+960)" data-value="+960"  value="960" >Maldives (+960)</option><option data-text="Mali (+223)" data-value="+223"  value="223" >Mali (+223)</option><option data-text="Malta (+356)" data-value="+356"  value="356" >Malta (+356)</option><option data-text="Marshall Islands (+692)" data-value="+692"  value="692" >Marshall Islands (+692)</option><option data-text="Martinique (+596)" data-value="+596"  value="596" >Martinique (+596)</option><option data-text="Mauritania (+222)" data-value="+222"  value="222" >Mauritania (+222)</option><option data-text="Mauritius (+230)" data-value="+230"  value="230" >Mauritius (+230)</option><option data-text="Mexico (+52)" data-value="+52"  value="52" >Mexico (+52)</option><option data-text="Micronesia (+691)" data-value="+691"  value="691" >Micronesia (+691)</option><option data-text="Moldova (+373)" data-value="+373"  value="373" >Moldova (+373)</option><option data-text="Monaco (+377)" data-value="+377"  value="377" >Monaco (+377)</option><option data-text="Mongolia (+976)" data-value="+976"  value="976" >Mongolia (+976)</option><option data-text="Montserrat (+664)" data-value="+664"  value="664" >Montserrat (+664)</option><option data-text="Morocco (+212)" data-value="+212"  value="212" >Morocco (+212)</option><option data-text="Mozambique (+258)" data-value="+258"  value="258" >Mozambique (+258)</option><option data-text="Myanmar (+95)" data-value="+95"  value="95" >Myanmar (+95)</option><option data-text="Namibia (+264)" data-value="+264"  value="264" >Namibia (+264)</option><option data-text="Nauru (+674)" data-value="+674"  value="674" >Nauru (+674)</option><option data-text="Nepal (+977)" data-value="+977"  value="977" >Nepal (+977)</option><option data-text="Netherlands (+31)" data-value="+31"  value="31" >Netherlands (+31)</option><option data-text="Netherlands Antilles (+599)" data-value="+599"  value="599" >Netherlands Antilles (+599)</option><option data-text="New Caledonia (+687)" data-value="+687"  value="687" >New Caledonia (+687)</option><option data-text="New Zealand (+64)" data-value="+64"  value="64" >New Zealand (+64)</option><option data-text="Nicaragua (+505)" data-value="+505"  value="505" >Nicaragua (+505)</option><option data-text="Niger (+227)" data-value="+227"  value="227" >Niger (+227)</option><option data-text="Nigeria (+234)" data-value="+234"  value="234" >Nigeria (+234)</option><option data-text="Niue (+683)" data-value="+683"  value="683" >Niue (+683)</option><option data-text="Northern Mariana Islands (+1670)" data-value="+1670"  value="1670" >Northern Mariana Islands (+1670)</option><option data-text="Norway (+47)" data-value="+47"  value="47" >Norway (+47)</option><option data-text="Oman (+968)" data-value="+968"  value="968" >Oman (+968)</option><option data-text="Palau (+680)" data-value="+680"  value="680" >Palau (+680)</option><option data-text="Panama (+507)" data-value="+507"  value="507" >Panama (+507)</option><option data-text="Papua New Guinea (+675)" data-value="+675"  value="675" >Papua New Guinea (+675)</option><option data-text="Paraguay (+595)" data-value="+595"  value="595" >Paraguay (+595)</option><option data-text="Peru (+51)" data-value="+51"  value="51" >Peru (+51)</option><option data-text="Philippines (+63)" data-value="+63"  value="63" >Philippines (+63)</option><option data-text="Poland (+48)" data-value="+48"  value="48" >Poland (+48)</option><option data-text="Portugal (+351)" data-value="+351"  value="351" >Portugal (+351)</option><option data-text="Puerto Rico (+787)" data-value="+787"  value="787" >Puerto Rico (+787)</option><option data-text="Qatar (+974)" data-value="+974"  value="974" >Qatar (+974)</option><option data-text="Reunion (+262)" data-value="+262"  value="262" >Reunion (+262)</option><option data-text="Romania (+40)" data-value="+40"  value="40" >Romania (+40)</option><option data-text="Russian (+7)" data-value="+7"  value="7" >Russian (+7)</option><option data-text="Rwandese (+250)" data-value="+250"  value="250" >Rwandese (+250)</option><option data-text="Saint Helena (+290)" data-value="+290"  value="290" >Saint Helena (+290)</option><option data-text="Saint Kitts & Nevis (+869)" data-value="+869"  value="869" >Saint Kitts & Nevis (+869)</option><option data-text="Saint Lucia (+758)" data-value="+758"  value="758" >Saint Lucia (+758)</option><option data-text="Saint Vincent and the Grenadines (+784)" data-value="+784"  value="784" >Saint Vincent and the Grenadines (+784)</option><option data-text="Samoa (+685)" data-value="+685"  value="685" >Samoa (+685)</option><option data-text="San Marino (+378)" data-value="+378"  value="378" >San Marino (+378)</option><option data-text="Sao Tome and Principe (+239)" data-value="+239"  value="239" >Sao Tome and Principe (+239)</option><option data-text="Saudi Arabia (+966)" data-value="+966"  value="966" >Saudi Arabia (+966)</option><option data-text="Senegal (+221)" data-value="+221"  value="221" >Senegal (+221)</option><option data-text="Seychelles (+248)" data-value="+248"  value="248" >Seychelles (+248)</option><option data-text="Sierra Leone (+232)" data-value="+232"  value="232" >Sierra Leone (+232)</option><option data-text="Singapore (+65)" data-value="+65"  value="65" >Singapore (+65)</option><option data-text="Slovakia (+421)" data-value="+421"  value="421" >Slovakia (+421)</option><option data-text="Slovenia (+386)" data-value="+386"  value="386" >Slovenia (+386)</option><option data-text="Somalia (+252)" data-value="+252"  value="252" >Somalia (+252)</option><option data-text="South Africa (+27)" data-value="+27"  value="27" >South Africa (+27)</option><option data-text="Spain (+34)" data-value="+34"  value="34" >Spain (+34)</option><option data-text="Sri Lanka (+94)" data-value="+94"  value="94" >Sri Lanka (+94)</option><option data-text="Sudan (+249)" data-value="+249"  value="249" >Sudan (+249)</option><option data-text="Suriname (+597)" data-value="+597"  value="597" >Suriname (+597)</option><option data-text="Swaziland (+268)" data-value="+268"  value="268" >Swaziland (+268)</option><option data-text="Sweden (+46)" data-value="+46"  value="46" >Sweden (+46)</option><option data-text="Switzerland (+41)" data-value="+41"  value="41" >Switzerland (+41)</option><option data-text="Syria (+963)" data-value="+963"  value="963" >Syria (+963)</option><option data-text="Taiwan (+886)" data-value="+886"  value="886" >Taiwan (+886)</option><option data-text="Tajikistan (+992)" data-value="+992"  value="992" >Tajikistan (+992)</option><option data-text="Tanzania (+255)" data-value="+255"  value="255" >Tanzania (+255)</option><option data-text="Thailand (+66)" data-value="+66"  value="66" >Thailand (+66)</option><option data-text="Togolese (+228)" data-value="+228"  value="228" >Togolese (+228)</option><option data-text="Tokelau (+690)" data-value="+690"  value="690" >Tokelau (+690)</option><option data-text="Tonga (+676)" data-value="+676"  value="676" >Tonga (+676)</option><option data-text="Trinidad and Tobago (+868)" data-value="+868"  value="868" >Trinidad and Tobago (+868)</option><option data-text="Tunisia (+216)" data-value="+216"  value="216" >Tunisia (+216)</option><option data-text="Turkey (+90)" data-value="+90"  value="90" >Turkey (+90)</option><option data-text="Turkmenistan (+993)" data-value="+993"  value="993" >Turkmenistan (+993)</option><option data-text="Turks and Caicos Islands (+649)" data-value="+649"  value="649" >Turks and Caicos Islands (+649)</option><option data-text="Tuvalu (+688)" data-value="+688"  value="688" >Tuvalu (+688)</option><option data-text="Uganda (+256)" data-value="+256"  value="256" >Uganda (+256)</option><option data-text="Ukraine (+380)" data-value="+380"  value="380" >Ukraine (+380)</option><option data-text="United Arab Emirates (+971)" data-value="+971"  value="971" >United Arab Emirates (+971)</option><option data-text="United Kingdom (+44)" data-value="+44"  value="44" >United Kingdom (+44)</option><option data-text="Uruguay (+598)" data-value="+598"  value="598" >Uruguay (+598)</option><option data-text="Uzbekistan (+998)" data-value="+998"  value="998" >Uzbekistan (+998)</option><option data-text="Vanuatu (+678)" data-value="+678"  value="678" >Vanuatu (+678)</option><option data-text="Vatican City (+379)" data-value="+379"  value="379" >Vatican City (+379)</option><option data-text="Venezuela (+58)" data-value="+58"  value="58" >Venezuela (+58)</option><option data-text="VietNam (+84)" data-value="+84"  value="84" >VietNam (+84)</option><option data-text="Wallis and Futuna Islands (+681)" data-value="+681"  value="681" >Wallis and Futuna Islands (+681)</option><option data-text="Yemen (+967)" data-value="+967"  value="967" >Yemen (+967)</option><option data-text="Yugoslavia (+381)" data-value="+381"  value="381" >Yugoslavia (+381)</option><option data-text="Zambia (+260)" data-value="+260"  value="260" >Zambia (+260)</option><option data-text="Zimbabwe (+263)" data-value="+263"  value="263" >Zimbabwe (+263)</option>					</select>
               <label id="error-message-phone3" class="e-inline-label-number" style="display:none">Please enter mobile number</label>
                   <input type="text" class="form-control col-md-8 float-left input-country-margin" placeholder="Enter Mobile Number" id="phoneno" name="phoneNo" maxlength="15" id="elite-invite-fm-name">
                   <!-- <div id="error-message-phone3" style="display:none">Please enter phone number</div>-->
                   
                    </div> 
                    
                  <div class="form-group form-group-cust e-inline-label-div">
                  <label id="error-message-emailId" class="e-inline-label-emailId" style="display:none">Please enter emailId</label>
                   <input type="email" name="emailId" class="form-control" placeholder="Enter Email ID" id="emailId">
                    </div>
                                         <div class="form-group form-group-cust e-inline-label-div"> 
                       <label id="error-message-location3" class="location-inline-label-top2" style="display:none">Please enter location</label> 
                               <!-- <select required class="form-control custom-select horiz-form-control select-option-location2 share-location" id="countryDet2s" name="countryDet2s" onclick='showModel("#locationPopup2")'>
                                   <option hidden> Enter Location</option>
                               </select>  -->
                               <input type="text" id="locationDet2" placeholder="Enter Location" class="form-control custom-select horiz-form-control select-option-location2 share-location" id="countryDet2s" name="countryDet2s" value="India" onclick='showModel("#locationPopup2")'/>
                                   
                       </div> 
                                               <input type=hidden name="getinvite2" value='getinvite2'>
                  <input type="hidden" id="recity" name="rcity" value="-" />
                   <input type="hidden" value="English"  name="language"  id="lang">
                   <input type="hidden" name="besttimetoreach"  value="10AM"   id="besttimetoreach"/>
                   <input type="hidden" name="camsrcid" value="" id="camsrcid"/>
                   <input type="hidden" name="countryDet2" id='countryDet2' value=''/>
                   <input type="hidden" name="stateDet2" id='stateDet2' value=''/>
                   <input type="hidden" name="cityDet2" id='cityDet2' value=''/>
                   <input type="hidden" name="countryCodeDet" id='countryCodeDet' value='98'/>
                 <button type="submit" class="btn btn-register mb-4 xs-mb0 btn-register-margin" onclick="return eliteValidation('getinvite2','index');" id="getinv2">
                 <!-- <img src="revamp-images/elite-btn-img.png" class="mr-2 xs-none" alt="Elite Button"> -->
                 Get Invited</button>
               </form>
               </div>
           </div>
           
           <div id="toast-locationformtwo" class="toast-locationformtwo" style="display:none">Location added successfully</div>
           
       </div>
       <!-- Matchmaking Banner Section End -->
       
       
       <div class="row topright-hide">
         <img src="{{asset('frontend/revamp-images/bottomleft.png')}}" class="invite-btm" alt="Elite Arrow">
       </div>
   </div>
</div>

{{-- 
<div class="container-fluid bg-banner-2 payment-border-top" id="payment-revamp">
<div class="row topright-hide">
     <img src="{{asset('frontend/revamp-images/whyelite-left.svg')}}" class="package-top" alt="Elite Arrow">
   </div>
   <div class="container-min container-max mac-width-container">
       <!--- Elite Packages Section Start -->
       <!-- <form name="packages" id="packageDet" method="post" action="//www.elitematrimony.com/elitepaymentaction.php"> -->
       <div class="row text-center">
           <div class="col-md-12 col-12 pt-3 pb-4">
                               <div class="font-great-vibes">Elite Packages</div>
                               <!-- <div class="package-border-img"><img src="revamp-images/elite-package-border.png" alt="Elite Arrow"></div> -->
           </div>
           
           <div class="mx-auto package-padding">
               
               <ul class="nav nav-pills mb-3 justify-content-center package-tabs-text" id="pills-tab" role="tablist">
                     <li class="nav-item">
                       <a class="nav-link active" id="pills-standard-tab" data-toggle="pill" href="#pills-standard" role="tab" aria-controls="pills-standard" aria-selected="true">Standard <span class="xs-none">packs</span> <span class="package-tabs-networth">(Net worth upto 50 Cr.)</span></a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" id="pills-ultimate-tab" data-toggle="pill" href="#pills-ultimate" role="tab" aria-controls="pills-ultimate" aria-selected="false">Ultimate <span class="xs-none">packs</span> <span class="package-tabs-networth">(Net worth 50 - 200 Cr.)</span></a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" id="pills-aristocrat-tab" data-toggle="pill" href="#pills-aristocrat" role="tab" aria-controls="pills-aristocrat" aria-selected="false">
                       
                       <span class="xs-none">Aristocrat <span class="xs-none">packs</span> <span class="package-tabs-networth">(Net worth more than 200 Cr.)</span> </span>
                       
                       <span class="desk-none">Aristocrat <span class="xs-none">packs</span> <span class="package-tabs-networth">(Net worth 200+ Cr.)</span> </span>
                       
                       </a>
                     </li>
                   </ul>
                   <div class="tab-content tabs-content-margin" id="pills-tabContent">
                     
                         <!-- Standard Tabs Section Start -->
                         <div class="tab-pane fade show active" id="pills-standard" role="tabpanel" aria-labelledby="pills-standard-tab">
                         
                           <div class="xs-mt20">
               
                               <div>
                                   <div class="service-standard-text">Standard (1) – Service Package</div>
                                   <div class="service-standard-desc">*No Additional Success Fee</div>
                               </div>
                               
                               <div class="swiper-package-new">
                                   <div class="swiper-wrapper-flex border-none-package">
                                   
                                     
                                     
                                             <div class="radiobox-width1">
                                           <div class="service-fee-tag">Service Fee Package</div>
                                           <div class="service-months">3 Months </div>
                                           <div class="service-amount">₹ 75,000</div>
                                           <div><button  onclick="location.href='payments/paymentoptionsac82.html?categoryType=269'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>
                                         
                                             <div class="radiobox-width1">
                                           <div class="service-fee-tag">Service Fee Package</div>
                                           <div class="service-months">6 Months </div>
                                           <div class="service-amount">₹ 1,25,000</div>
                                           <div><button  onclick="location.href='payments/paymentoptions78bf.html?categoryType=260'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>
                                         
                                             <div class="radiobox-width1">
                                           <div class="service-fee-tag">Service Fee Package</div>
                                           <div class="service-months">12 Months </div>
                                           <div class="service-amount">₹ 2,25,000</div>
                                           <div><button  onclick="location.href='payments/paymentoptionsb95c.html?categoryType=261'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>
                                                                             </div>
                               </div>
                           </div>
                           

                                                       
                           <div class="xs-mt20 success-fee-packmargin">
                           
                               <div>
                                   <div class="service-standard-text">Standard (2) – Success Package</div>
                                   <div class="service-standard-desc">Success fee to be paid only if you find your partner through us</div>
                               </div>
                               
                               <div class="swiper-package-new">
                                   <div class="swiper-wrapper-flex">
                                   
                                                            <div class="radiobox-width1">
                                           <div class="service-fee-tag">Success Fee Package</div>
                                           <div class="service-months">3 Months </div>
                                           <div class="service-plus-pack">
                                               <div class="service-amount"> <span class="basic-fee">Basic Fee</span> ₹ 50,000</div>
                                               <span class="service-plus"> + </span>
                                               <div class="service-amount"> <span class="basic-fee">Success Fee</span>₹ 1,00,000</div>
                                           </div>
                                           <div><button  onclick="location.href='payments/paymentoptions6bca.html?categoryType=587'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>
                                            <div class="radiobox-width1">
                                           <div class="service-fee-tag">Success Fee Package</div>
                                           <div class="service-months">6 Months </div>
                                           <div class="service-plus-pack">
                                               <div class="service-amount"> <span class="basic-fee">Basic Fee</span> ₹ 90,000</div>
                                               <span class="service-plus"> + </span>
                                               <div class="service-amount"> <span class="basic-fee">Success Fee</span>₹ 2,00,000</div>
                                           </div>
                                           <div><button  onclick="location.href='payments/paymentoptions235f.html?categoryType=579'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>
                                            <div class="radiobox-width1">
                                           <div class="service-fee-tag">Success Fee Package</div>
                                           <div class="service-months">12 Months </div>
                                           <div class="service-plus-pack">
                                               <div class="service-amount"> <span class="basic-fee">Basic Fee</span> ₹ 1,50,000</div>
                                               <span class="service-plus"> + </span>
                                               <div class="service-amount"> <span class="basic-fee">Success Fee</span>₹ 3,00,000</div>
                                           </div>
                                           <div><button  onclick="location.href='payments/paymentoptions3ff0.html?categoryType=564'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>
                                                        
                                   </div>
                               </div>
                           </div>
                                                                     <div class="xs-mt20 service-package-benefits">
                               <div class="service-pack-benefit-title">Standard  Package Benefits</div>
                               <div class="text-left list-items-tick-new">
                               <ul>
                                   <li>A minimum of 3-4 curated matches per month will be shared with you matching your preferences.</li>
                                   <li>A dedicated Relationship Manager from your own region will be shortlisting and sharing matches based on your preferences.</li>
                                   <li>Strict privacy & confidentiality ensured throughout the service.</li>
                                   <li>Increased chances of finding the right match through all our group portals & personalised ads.</li>
                               </ul>
                           </div>
                           </div>
                         
                         </div>
                         <!-- Standard Tabs Section End -->
                         
                         <!-- Ultimate Tabs Section Start -->
                         <div class="tab-pane fade" id="pills-ultimate" role="tabpanel" aria-labelledby="pills-ultimate-tab">
                           
                           <div class="xs-mt20">
               
                               <div>
                                   <div class="service-standard-text">Ultimate (1) - Service Package</div>
                                   <div class="service-standard-desc">*No Additional Success Fee</div>
                               </div>
                               
                               <div class="swiper-package-new">
                                   <div class="swiper-wrapper-flex border-none-package">
                                   
                                   
                                     
                                         <div class="radiobox-width1">
                                           <div class="service-fee-tag">Service Fee Package</div>
                                           <div class="service-months">3 Months </div>
                                           <div class="service-amount">₹ 1,50,000</div>
                                           <div><button onclick="location.href='payments/paymentoptions24ab.html?categoryType=586'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>


                                     

                                         
                                         <div class="radiobox-width1">
                                           <div class="service-fee-tag">Service Fee Package</div>
                                           <div class="service-months">6 Months </div>
                                           <div class="service-amount">₹ 2,50,000</div>
                                           <div><button onclick="location.href='payments/paymentoptions4dce.html?categoryType=284'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>


                                     

                                         
                                         <div class="radiobox-width1">
                                           <div class="service-fee-tag">Service Fee Package</div>
                                           <div class="service-months">12 Months </div>
                                           <div class="service-amount">₹ 4,50,000</div>
                                           <div><button onclick="location.href='payments/paymentoptions19c5.html?categoryType=283'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>


                                     

                                                                                 
                                       
                                       
                                   </div>
                               </div>
                           </div>
                           
                                                       <div class="xs-mt20 success-fee-packmargin">
                           
                               <div>
                                   <div class="service-standard-text">Ultimate (2) - Success Package</div>
                                   <div class="service-standard-desc">Success fee to be paid only if you find your partner through us</div>
                               </div>
                               
                               <div class="swiper-package-new">
                                   <div class="swiper-wrapper-flex">
                                                            <div class="radiobox-width1">
                                           <div class="service-fee-tag">Success Fee Package</div>
                                           <div class="service-months">3 Months </div>
                                           <div class="service-plus-pack">
                                               <div class="service-amount"> <span class="basic-fee">Basic Fee</span>₹ 1,00,000</div>
                                               <span class="service-plus"> + </span>
                                               <div class="service-amount"> <span class="basic-fee">Success Fee</span>₹ 2,00,000</div>
                                           </div>
                                           <div><button  onclick="location.href='payments/paymentoptionsf25e.html?categoryType=588'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>
                                            <div class="radiobox-width1">
                                           <div class="service-fee-tag">Success Fee Package</div>
                                           <div class="service-months">6 Months </div>
                                           <div class="service-plus-pack">
                                               <div class="service-amount"> <span class="basic-fee">Basic Fee</span>₹ 1,80,000</div>
                                               <span class="service-plus"> + </span>
                                               <div class="service-amount"> <span class="basic-fee">Success Fee</span>₹ 3,00,000</div>
                                           </div>
                                           <div><button  onclick="location.href='payments/paymentoptions0d82.html?categoryType=580'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>
                                            <div class="radiobox-width1">
                                           <div class="service-fee-tag">Success Fee Package</div>
                                           <div class="service-months">12 Months </div>
                                           <div class="service-plus-pack">
                                               <div class="service-amount"> <span class="basic-fee">Basic Fee</span>₹ 3,00,000</div>
                                               <span class="service-plus"> + </span>
                                               <div class="service-amount"> <span class="basic-fee">Success Fee</span>₹ 6,00,000</div>
                                           </div>
                                           <div><button  onclick="location.href='payments/paymentoptionsce78.html?categoryType=565'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>
                                                        </div>
                               </div>
                           </div>
                                                                                   <div class="xs-mt20 service-package-benefits">
                               <div class="service-pack-benefit-title">Ultimate  Package Benefits</div>
                               <div class="text-left list-items-tick-new">
                               <ul>
                                   <li>A minimum of 2-3 curated matches per month will be shared with you matching your preferences.</li>
                                   <li>An experienced Senior Relationship Manager from your own region will be shortlisting and sharing matches based on your preferences.</li>
                                   <li>Strict privacy & confidentiality ensured throughout the service.</li>
                                   <li>Increased chances of finding the right match through all our group portals & personalised ads.</li>
                               </ul>
                           </div>
                           </div>
                           
                         </div>
                         <!-- Ultimate Tabs Section End -->
                         
                         <!-- Aristocrat Tabs Section Start -->
                         <div class="tab-pane fade" id="pills-aristocrat" role="tabpanel" aria-labelledby="pills-aristocrat-tab">
                         
                           <div class="xs-mt20">
               
                               <div>
                                   <div class="service-standard-text">Aristocrat (1) - Service Package</div>
                                   <div class="service-standard-desc">*No Additional Success Fee</div>
                               </div>
                               
                               <div class="swiper-package-new">
                                   <div class="swiper-wrapper-flex border-none-package aristocrat-pack">
                                   
                                                                              <div class="radiobox-width1">
                                           <div class="service-fee-tag">Service Fee Package</div>
                                           <div class="service-months">6 Months </div>
                                           <div class="service-amount"> ₹ 6,00,000</div>
                                           <div><button  onclick="location.href='payments/paymentoptions98b6.html?categoryType=559'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>

                                                                                   <div class="radiobox-width1">
                                           <div class="service-fee-tag">Service Fee Package</div>
                                           <div class="service-months">12 Months </div>
                                           <div class="service-amount"> ₹ 10,00,000</div>
                                           <div><button  onclick="location.href='payments/paymentoptions5d25.html?categoryType=548'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>

                                                                             </div>
                               </div>
                           </div>
                                                       
                           <div class="xs-mt20 success-fee-packmargin">
                           
                               <div>
                                   <div class="service-standard-text">Aristocrat (2) - Success Package</div>
                                   <div class="service-standard-desc">Success fee to be paid only if you find your partner through us</div>
                               </div>
                               
                               <div class="swiper-package-new">
                                   <div class="swiper-wrapper-flex aristocrat-pack">
                                   
                                                                               
                                         
                       <div class="radiobox-width1">
                                           <div class="service-fee-tag">Success Fee Package</div>
                                           <div class="service-months">6 Months </div>
                                           <div class="service-plus-pack">
                                               <div class="service-amount"> <span class="basic-fee">Basic Fee</span>₹ 4,00,000</div>
                                               <span class="service-plus"> + </span>
                                               <div class="service-amount"> <span class="basic-fee">Success Fee</span>₹ 8,00,000</div>
                                           </div>
                                           <div><button  onclick="location.href='payments/paymentoptionsf663.html?categoryType=589'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>
                                                              
                                         
                       <div class="radiobox-width1">
                                           <div class="service-fee-tag">Success Fee Package</div>
                                           <div class="service-months">12 Months </div>
                                           <div class="service-plus-pack">
                                               <div class="service-amount"> <span class="basic-fee">Basic Fee</span>₹ 6,50,000</div>
                                               <span class="service-plus"> + </span>
                                               <div class="service-amount"> <span class="basic-fee">Success Fee</span>₹ 13,00,000</div>
                                           </div>
                                           <div><button  onclick="location.href='payments/paymentoptionsbf67.html?categoryType=590'" class="btn btn-register btn-subscribe-width"><span> Subscribe</span></button></div>
                                       </div>
                                                        </div>
                               </div>
                           </div>
                           
                                                                                   <div class="xs-mt20 service-package-benefits">
                               <div class="service-pack-benefit-title">Aristocrat  Package Benefits</div>
                               <div class="text-left list-items-tick-new">
                               <ul>
                                   <li>A minimum of 1 -2 curated matches per month will be shared with you matching your preferences.</li>
                                   <li>An expert Chief Service Manager from your own region will be shortlisting and sharing matches based on your preferences.</li>
                                   <li>Strict privacy & confidentiality ensured throughout the service.</li>
                                   <li>Increased chances of finding the right match through all our group portals & personalised ads.</li>
                               </ul>
                           </div>
                           </div>
                         
                         </div>
                         <!-- Aristocrat Tabs Section End -->
                         
                         
                   </div>
               
               <!---->
               <!---->
               
               
           </div>
       
           
                       
           
           
       </div>
       <!-- </form> -->
       <!--- Elite Packages Section End -->
       
       
       <!--- <div class="row topright-hide">
     <img src="revamp-images/whyelite-right.png" class="package-btm" alt="Elite Arrow">
   </div>
   -->
   <div class="row topright-hide" style="display: none !important;">
     <img src="{{asset('frontend/revamp-images/whyelite-right.png')}}" class="elite-services-img" alt="Elite Arrow">
   </div>
   </div>
</div> --}}







<div class="container-fluid bg-banner-2">

<!--  Experience Centers -->

 <div class="row topright-hide" style="display: none !important;">
     <img src="{{asset('frontend/revamp-images/whyelite-left.svg')}}" class="success-left-img" alt="Elite Arrow">
   </div>
   <div class="container-min container-max1 container-min-ss">
       <!--- Elite Experience Centers Section Start -->
       
       <div class="row">
           <div class="col-md-12 col-12 pt-3 pb-3 text-center font-great-vibes xs-pb0">
           Elite Matrimony - Experience Centers
           </div>
       </div>
       
       <div class="row pb-3 xs-pt0 xs-mt0 xs-pb5">
           <div class="col-md-10 col-12 mx-auto text-center xs-mt15">
               <div class="pb-3 ss-title-text-new">Elite Matrimony is the most premium Matrimony brand with presence at all major Airports across India</div>
               <div></div>
           </div>
       </div>
       
       
       <!-- Slider main container -->
       <div class="swiper-container swiper-container-cus">
           <div class="swiper-wrapper">
                           
           <div class=" text-left swiper-slide ec-new-card-width">
               <div class="text-center">
                   <img src="{{asset('frontend/revamp-images/hyderabadc20a.jpg?12')}}" alt="Elite Matrimony - Experience Centers Image">
               </div>
               <div class="ec-new-card-width-text">
                   <div class="mt-2 xs-small-text1 xs-mt10">Hyderabad Airport Experience Center</div>
               </div>
           </div>
           <div class=" text-left swiper-slide ec-new-card-width">
               <div class="text-center">
                   <img src="{{asset('frontend/revamp-images/mumbaic20a.jpg?12')}}" alt="Elite Matrimony - Experience Centers Image">
               </div>
               <div class="ec-new-card-width-text">
                   <div class="mt-2 xs-small-text1 xs-mt10">Mumbai Airport Experience Center</div>
               </div>
           </div>
           <div class="text-left swiper-slide ec-new-card-width">
               <div class="text-center">
                   <img src="{{asset('frontend/revamp-images/bengalaruc20a.jpg?12')}}" alt="Elite Matrimony - Experience Centers Image">
               </div>
               <div class="ec-new-card-width-text">
                   <div class="mt-2 xs-small-text1 xs-mt10">Bengalaru Airport Experience Center</div>
               </div>
           </div>
           
           <div class="text-left swiper-slide ec-new-card-width">
               <div class="text-center">
                   <img src="{{asset('frontend/revamp-images/chennaic20a.jpg?12')}}" alt="Elite Matrimony - Experience Centers Image">
               </div>
               <div class="ec-new-card-width-text">
                   <div class="mt-2 xs-small-text1 xs-mt10">Chennai Airport Experience Center</div>
               </div>
           </div>
           
           <div class="text-left swiper-slide ec-new-card-width">
               <div class="text-center">
                   <img src="{{asset('frontend/revamp-images/delhic20a.jpg?12')}}" alt="Elite Matrimony - Experience Centers Image">
               </div>
               <div class="ec-new-card-width-text">
                   <div class="mt-2 xs-small-text1 xs-mt10">Delhi Airport Experience Center</div>
               </div>
           </div>

           </div>
           
           <div class="xs-none">
               <!-- swipper button -->
            <div class="swiper-button-prev swiper-button-prev-cus experience-center-swiper"></div>
            <div class="swiper-button-next swiper-button-next-cus experience-center-swiper"></div>
           </div>

           </div>


       
         <div class="row pt-4 xs-pt0 ss-chat-section xs-mt0">
           <div class="col-md-10 col-12 mx-auto text-center xs-mt20">
               <div class="pb-3">Want to find the life partner of your dreams with our Elite service?</div>
               <div><button type="submit" class="btn btn-register btn-chat-success" onclick="triggergamooga(1);">Chat with us</button></div>
           </div>
       </div>  
       
        
       <!--- Elite Success Stories Section End -->
        <div class="row topright-hide">
     <img src="{{asset('frontend/revamp-images/whyelite-right.png')}}" class="elite-services-img" alt="Elite Arrow">
   </div>  

       <div class="row topright-hide" style="display: none !important;">
            <img src="{{asset('frontend/revamp-images/bottomleft.png')}}" class="bottom-left"  alt="Elite Arrow"> 
       </div> 
       
   
       
   </div>
</div> 

  {{-- Success Story Start --}}
  @include('frontend.partials.success-story')
  {{-- Success Story End --}}


<!--   -->

    {{-- Brand Start --}}
    @include('frontend.partials.brand')
    {{-- Brand End --}} 




@endsection