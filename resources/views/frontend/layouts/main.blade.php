  
<!DOCTYPE html>
<html>
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
<head>
<meta charset="UTF-8">
<title>Elite Matrimony - Most successful matchmaking service for Elite</title>
<meta name="description" content="EliteMatrimony is an Exclusive Matchmaking Service from BharatMatrimony that caters to the matrimonial needs of rich and famous Indians and Indians living abroad. Call 1800-572-6611" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<!-- <link href="css/bootstrap.min.ui.css" rel="stylesheet"> -->
<link href="{{asset('frontend/css/custom-elite1b26.css?v2')}}" rel="stylesheet">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.ui.css')}}">
   	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.min.css')}}">
		
    <link rel="stylesheet" href="{{asset('frontend/css/elite-revampa3ea.css?id=30062022')}}">
	
    <link rel="stylesheet" href="{{asset('frontend/css/elite-packages-new.css')}}">
		
	<link rel="stylesheet" href="{{asset('frontend/css/swiper-bundle.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
	

<script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
<!-- <script src="js/bootstrap.min.ui.js"></script> -->
<script src="{{asset('frontend/js/exitpopup.js')}}"></script>
<script src="{{asset('frontend/js/elitevalidation-uid202.js?rand=22072024')}}"></script>
{{-- <script src='../cdn.freshmarketer.com/384416/994594.js'></script> --}}

<script>
$(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('.top-scrollcontainer').offset().top
    }, 'slow');	

});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-51830629-1', 'elitematrimony.com');
  ga('send', 'pageview');
</script>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('.pay-packages li a').click(function(){
			$('.paymnetpack-box').hide();
			$('.pay-packages li a').removeClass('payment-pack');
			$(this).addClass('payment-pack');
			var paypack = $(this).attr("href");
			$(paypack).show();


			return false;
		});
		// during the on load
		makeTextBolder();

		// during the on click
		$(document).on('change','.default-value-select', function(){
				//Default selection for default-value-select
				var previousSelected = $(this).prop('selectedIndex');
				// console.log('click select selectedIndex', $(this).attr('id'), previousSelected);
				if(previousSelected == 0){
					$(this).removeClass('active');
					// $("option:not([disabled]):first", this).prop("selected",true); 
				} else {
					$(this).addClass('active');
				}

		});

		// during the on change
		$(document).on('change','.default-value-input', function(){
				//Default selection for default-value-input
				var previousSelected = $(this).val();
				// console.log('change input val', $(this).attr('id'), previousSelected);
				if(previousSelected == null || previousSelected == ""){
					$(this).removeClass('active');
					// $("option:not([disabled]):first", this).prop("selected",true); 
				} else {
					$(this).addClass('active');
				}
		});
	});
	function makeTextBolder(){
		$(".default-value-select").each(function() {
			var previousSelected = $(this).prop('selectedIndex');
			// console.log('each select selectedIndex', $(this).attr('id'), previousSelected);
				if(previousSelected == 0){
					$(this).removeClass('active');
					// $("option:not([disabled]):first", this).prop("selected",true); 
				} else {
					$(this).addClass('active');
				}
		});

		// during the on load
		$(".default-value-input").each(function() {
			var previousSelected = $(this).val();
			// console.log('each input value', $(this).attr('id'), previousSelected);
				if(previousSelected == null || previousSelected == ""){
					$(this).removeClass('active');
					// $("option:not([disabled]):first", this).prop("selected",true); 
				} else {
					$(this).addClass('active');
				}
		});
	}
</script>

<script>
	setTimeout(function(){
		var activeRadioBtnVal= $('input[name="packages"]:checked').val();
		var arrActivePack = activeRadioBtnVal.split('~')
		packageRate(arrActivePack[0],arrActivePack[1]);
	}, 1000);

	function packageRate(packid,pack_amount) {
		const clickedRadioButtonID= document.getElementById('pkg-sel'+packid);
		clickedRadioButtonID.click();
		var arrElitePackages = {"260":{"packid":260,"has_success_fee":0,"pack_name":"Standard","pack_active_class":"active-radio","is_checked":"checked"},"284":{"packid":284,"has_success_fee":0,"pack_name":"Ultimate","pack_active_class":"","is_checked":""},"564":{"packid":564,"has_success_fee":1,"pack_name":"Standard","pack_active_class":"","is_checked":""},"565":{"packid":565,"has_success_fee":1,"pack_name":"Ultimate","pack_active_class":"","is_checked":""}};
		var has_success_fee = arrElitePackages[packid].has_success_fee;
		// if (has_success_fee == 1) {
		// 	$('#success-fee-point-title').show();
		// 	$('#success-fee-point-benefits').show();
		// }
		// else {
		// 	$('#success-fee-point-title').hide();
		// 	$('#success-fee-point-benefits').hide();
		// }
		var pack_name = arrElitePackages[packid].pack_name;
		$("#pachdetailsval").html("Subscribe to "+pack_name);
		$("#categoryType").val(packid);
		$(".packageDetails").val(pack_amount);
		$("#initiate").val(1);
	}
	//otp validation
	function phoneNumberShareValidationnew()
    {
        var frm = document.eliteshareFrm;
        let details = navigator.userAgent;
		let regexp = /android|iphone|kindle|ipad/i;
		let isMobileDevice = regexp.test(details);
		if(isMobileDevice){
			var phval = '#phone-error-message-name-pwa';
			$('#phone-error-message-name-pwa').css('margin-top','-71px');

		}else{
			var phval = '#phone-error-message-name';
		}
        if(frm.phoneNo.value=="") {
        $('.share-form .elite-inline-plabel-div '+phval).text('Enter phone number');
        $('.share-form .elite-inline-plabel-div '+phval).css('display','inline-block');
        if(isMobileDevice){
            $('#phoneno').addClass('err-txt-border');
        }else{
        	$('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
        }
        $('#pwamoblabel').css('display','none');

            frm.phoneNo.focus();
            return false;
        }
        

        if(isNaN(frm.phoneNo.value)) {
            $('.share-form .elite-inline-plabel-div '+phval).text('Enter valid number');
            $('.share-form .elite-inline-plabel-div '+phval).css('display','inline-block');
 			if(isMobileDevice){
		        $('#phoneno').addClass('err-txt-border');
		        $('#pwamoblabel').css('display','none');
		    }else{
		    	$('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
		    }            frm.phoneNo.focus();
            return false;
        }
        
        
        if(frm.countryCode.value=='91'){
        if((frm.phoneNo.value.length < 10) || (frm.phoneNo.value.length > 10)) {
            $('.share-form .elite-inline-plabel-div '+phval).text('Enter 10 digit number');
            $('.share-form .elite-inline-plabel-div '+phval).css('display','inline-block');
            if(isMobileDevice){
	            $('#phoneno').addClass('err-txt-border');
	        }else{
	            $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
	        }
            $('#pwamoblabel').css('display','none');
            //    alert('Enter 10 digit number');
                frm.phoneNo.focus();
                return false;
            }
        
        }
         
        if(frm.countryCode.value!='91'){
           if((frm.phoneNo.value.length < 6)) {
            $('.share-form .elite-inline-plabel-div '+phval).text('Enter valid number');
            $('.share-form .elite-inline-plabel-div '+phval).css('display','inline-block');
 			if(isMobileDevice){
		        $('#phoneno').addClass('err-txt-border');
		        $('#pwamoblabel').css('display','none');
		    }else{
		    	$('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
		    }                // alert('Enter valid number');
                frm.phoneNo.focus();
                return false;
            }
            else{
            var phonelen = frm.phoneNo.value.replace(/^[0]+/g,"");
            if((phonelen.length < 6)) {
            $('.share-form .elite-inline-plabel-div '+phval).text('Enter valid Minimum 6 digits phone number');
            $('.share-form .elite-inline-plabel-div '+phval).css('display','inline-block');
 			if(isMobileDevice){
		        $('#phoneno').addClass('err-txt-border');
		        $('#pwamoblabel').css('display','none');
		    }else{
		    	$('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
		    }                frm.phoneNo.focus();
                return false;
                }
            }
    }
        if(frm.countryCode.value=='91'){        
            if(frm.phoneNo.value.charAt(0)>='6' && frm.phoneNo.value.charAt(0)<='9'){           
                        
            } else {                
                $('.share-form .elite-inline-plabel-div #phone-error-message-name').text('Please enter 10 digit number');
                $('.share-form .elite-inline-plabel-div #phone-error-message-name').css('display','inline-block');
 			if(isMobileDevice){
		        $('#phoneno').addClass('err-txt-border');
		        $('#pwamoblabel').css('display','none');
		    }else{
		    	$('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
		    }                frm.phoneNo.focus();
                return false;   
            }

        }

        $('.share-form .elite-inline-plabel-div #phone-error-message-name').css('display','none');
        $('.share-form .elite-inline-plabel-div ').removeClass('err-txt-border');

        return true;
    }
	 function shareFormNameValidationnew(isFormSubmission){

        var frm = document.eliteshareFrm;
        var nameval = frm.username.value.trim();
        var nameRegex = /^[A-Za-z ]{3,40}$/;
        var validName = true;
        var errMessage = '';

        if(frm.username.value=="" || frm.username.value=="Your Name" || nameval.length==0){
            errMessage = 'Please enter your name';
            validName = false;
        } else if(frm.username.value.length < 3){
            errMessage = 'Please enter alteast 3 characters';
            validName = false;
        } else if(!nameRegex.test(frm.username.value)) {
            errMessage = 'Please enter valid name';
            validName = false;
        }


        if(!validName){
            $('.share-form .elite-inline-label-div #share-error-message-name').text(errMessage);
            $('.share-form .elite-inline-label-div #share-error-message-name').css('display','inline-block');
            $('.share-form .elite-inline-label-div .elite-share-fm-name').addClass('err-txt-border');
            $('.errname').css('display','none');
        } else {
            $('.share-form .elite-inline-label-div #share-error-message-name').text('');
            $('.share-form .elite-inline-label-div #share-error-message-name').css('display','none');
            $('.share-form .elite-inline-label-div .elite-share-fm-name').removeClass('err-txt-border');
        }

        if(isFormSubmission){
            //frm.name.focus();
        }

        return validName;
    }
       function phoneNumberShareValidationnew1()
    {
        var frm = document.eliteshareFrm1;
        let details = navigator.userAgent;
    let regexp = /android|iphone|kindle|ipad/i;
    let isMobileDevice = regexp.test(details);
    if(isMobileDevice){
      var phval = '#phone-error-message-name-pwa1';
      $('#phone-error-message-name-pwa1').css('margin-top','-71px');

    }else{

      var phval = '#phone-error-message-name1';
    }
        if(frm.phoneNo1.value=="") {
        $('.share-form .elite-inline-plabel-div '+phval).text('Enter phone number');
        $('.share-form .elite-inline-plabel-div '+phval).css('display','inline-block');
        if(isMobileDevice){
            $('#phoneno1').addClass('err-txt-border');
        }else{
          $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
        }
        $('#pwamoblabel1').css('display','none');

            frm.phoneNo1.focus();
            return false;
        }       

        if(isNaN(frm.phoneNo1.value)) {
            $('.share-form .elite-inline-plabel-div '+phval).text('Enter valid number');
            $('.share-form .elite-inline-plabel-div '+phval).css('display','inline-block');
      if(isMobileDevice){
            $('#phoneno1').addClass('err-txt-border');
            $('#pwamoblabel1').css('display','none');
        }else{
          $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
        }            frm.phoneNo1.focus();
            return false;
        }
        
        
        if(frm.countryCode1.value=='91'){
        if((frm.phoneNo1.value.length < 10) || (frm.phoneNo1.value.length > 10)) {
            $('.share-form .elite-inline-plabel-div '+phval).text('Enter 10 digit number');
            $('.share-form .elite-inline-plabel-div '+phval).css('display','inline-block');
            if(isMobileDevice){
              $('#phoneno1').addClass('err-txt-border');
          }else{
              $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
          }
            $('#pwamoblabel1').css('display','none');
            //    alert('Enter 10 digit number');
                frm.phoneNo1.focus();
                return false;
            }
        
        }
         
        if(frm.countryCode1.value!='91'){
           if((frm.phoneNo1.value.length < 6)) {
            $('.share-form .elite-inline-plabel-div '+phval).text('Enter valid number');
            $('.share-form .elite-inline-plabel-div '+phval).css('display','inline-block');
      if(isMobileDevice){
            $('#phoneno1').addClass('err-txt-border');
            $('#pwamoblabel1').css('display','none');
        }else{
          $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
        }                // alert('Enter valid number');
                frm.phoneNo1.focus();
                return false;
            }
            else{
            var phonelen = frm.phoneNo1.value.replace(/^[0]+/g,"");
            if((phonelen.length < 6)) {
            $('.share-form .elite-inline-plabel-div '+phval).text('Enter valid Minimum 6 digits phone number');
            $('.share-form .elite-inline-plabel-div '+phval).css('display','inline-block');
      if(isMobileDevice){
            $('#phoneno1').addClass('err-txt-border');
            $('#pwamoblabel1').css('display','none');
        }else{
          $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
        }                frm.phoneNo1.focus();
                return false;
                }
            }
    }
        if(frm.countryCode1.value=='91'){        
            if(frm.phoneNo1.value.charAt(0)>='6' && frm.phoneNo1.value.charAt(0)<='9'){           
                        
            } else {                
                $('.share-form .elite-inline-plabel-div #phone-error-message-name1').text('Please enter 10 digit number');
                $('.share-form .elite-inline-plabel-div #phone-error-message-name1').css('display','inline-block');
      if(isMobileDevice){
            $('#phoneno1').addClass('err-txt-border');
            $('#pwamoblabel1').css('display','none');
        }else{
          $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
        }                frm.phoneNo1.focus();
                return false;   
            }

        }

        $('.share-form .elite-inline-plabel-div #phone-error-message-name1').css('display','none');
        $('.share-form .elite-inline-plabel-div ').removeClass('err-txt-border');

        return true;
    }

    function Validationformnew(page,i){
		let details = navigator.userAgent;
		let regexp = /android|iphone|kindle|ipad/i;
		let isMobileDevice = regexp.test(details);
        var frm = document.entryFrm;
        var indexcount=i;
        var frm = document.eliteshareFrm;
        var nameval = frm.username.value.trim();
        var profilecreated = frm.profilecreatedselect.value.trim();
        if(profilecreated==2 || profilecreated==3){
        	var occupation = frm.youroccupation.value.trim();       	
        }else{
            var occupation = '';  	
        }

        if(!shareFormNameValidationnew(true)){
            return false;
        }
		// call value default
		makeTextBolder();

        if(profilecreated==""){
        	$('.share-form .elite-inline-label-div-pfc .elite-share-fm-profileby').addClass('err-txt-border');
        	return false;
        }
        if(profilecreated==2 || profilecreated==3){
	        if(occupation==""){
	        	//$('.detail-form1 .elite-inline-label-div-occupation #occupation-error-message').css('display','inline-block');
	        	$('.share-form .elite-inline-label-div-occupation .elite-share-fm-uroccupation').addClass('err-txt-border');
	        	//$('#occupation-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	        	return false;
	        }
	    }
      
           
            if(frm.countryCode.value=="" || frm.countryCode.value=="Country") {
                alert('Please select country code');            
                frm.countryCode.focus();
                return false;
            }

            
            if(isNaN(frm.countryCode.value)) {
                alert('Please select country code');
                frm.countryCode.focus();
                return false;
            }    

    
            if(!phoneNumberShareValidationnew())
            {
                return false;
            }
            jQuery.ajax({
	            url: "https://www.elitematrimony.com/index.php?s=1",
	            data:'regotp='+'&camsrcid='+
	            $("#camsrcid").val()+'&name='+
	            $("#username").val()+'&phoneNo='+
	            $("#phoneno").val()+'&countryCode='+$("#countryCodeSelID").val()+'&eliteprofilefor='+profilecreated+'&parentoccupation='+occupation+'&s=1&sendotp=1&getinvite=getinvite',
	            type: "POST",
	            success:function(data){
	            	response = JSON.parse(data);
	            	if(response.Status=='Success'){
						// setTimeout(showbox, 30000); // after 5 secs
						var timeLeft = 15;
						var timerId = setInterval(countdown, 1000);
						function countdown() {
						if (timeLeft == 0) {
							clearTimeout(timerId);
							$('.resent-otp').text('Resend OTP');
							$('#resendbtn').css('pointer-events','');
							} else {
							$('#resendbtn').css('pointer-events','none');
							if(timeLeft<10){
							$('.resent-otp').text('00:0'+timeLeft);
							}else{					    
							$('.resent-otp').text('00:'+timeLeft);
							}
							timeLeft--;
							}
						}

						$('#otpmodal').modal('show');
	            		var mobilefour = $("#phoneno").val().substring(0, 4);
	            		$('#mobtext').text(mobilefour);
		            	// $("#nootpbtn").css("display", "none");
		            	// $("#otpbutton").css("display", "block");
		            	$("#otpdiv").css("display", "block");
		            	if(isMobileDevice){
				            const mediaQuery = window.matchMedia('(max-width: 767px)')
							if (mediaQuery.matches) {
								$('.phoneno-mob').css('background','url(./revamp-images/form-popup-edit-icon.svg) no-repeat scroll 96% 65%');
						    }
				           	$('#pwaotplabel').css('display','none');
				          	frm.pwaotp.focus();
		            	}else{
		            		$('.phoneno-mob').css('background','url(./revamp-images/form-popup-edit-icon.svg) no-repeat scroll 96% 65%');
		            		$('.phoneno-mob').css('background-color','#fff');
			            	frm.otpn1.focus();
		            	}
			            	//$("#resenderr").css("color","green").text(response.Msg);
		            }else if(response.Status=="Failure"){
			            $('#pwaotp').addClass('modal-otp-error');

			        }
            		return false;
	            },
	            error:function (){}
	        });
 
        
            return false;

}
function Validationformnew1(page,i){

    let details = navigator.userAgent;
    let regexp = /android|iphone|kindle|ipad/i;
    let isMobileDevice = regexp.test(details);
        var frm = document.entryFrm;
        var indexcount=i;
        var frm = document.eliteshareFrm1;
        var nameval = frm.username1.value.trim();
        var profilecreated = frm.profilecreatedselect1.value.trim();
        if(profilecreated==2 || profilecreated==3){
          var occupation = frm.youroccupation1.value.trim();         
        }else{
            var occupation = '';    
        }

        var nameRegex = /^[A-Za-z ]{3,40}$/;
        var errMessage = '';

        if(nameval=="" || nameval=="Your Name" || nameval.length==0){
            errMessage = 'Please enter your name';
        } else if(nameval.length < 3){
            errMessage = 'Please enter alteast 3 characters';
        } else if(!nameRegex.test(nameval)) {
            errMessage = 'Please enter valid name';
        }


        if(errMessage!=''){
            $('.share-form .elite-inline-label-div #share-error-message-name1').text(errMessage);
            $('.share-form .elite-inline-label-div #share-error-message-name1').css('display','inline-block');
            $('.share-form .elite-inline-label-div .elite-share-fm-name').addClass('err-txt-border');
            $('.errname').css('display','none');
            return false;
        } else {
            $('.share-form .elite-inline-label-div #share-error-message-name1').text('');
            $('.share-form .elite-inline-label-div #share-error-message-name1').css('display','none');
            $('.share-form .elite-inline-label-div .elite-share-fm-name').removeClass('err-txt-border');
        }
      
    // call value default
    makeTextBolder();

        if(profilecreated==""){
          $('.share-form .elite-inline-label-div-pfc .elite-share-fm-profileby').addClass('err-txt-border');
          return false;
        }
        if(profilecreated==2 || profilecreated==3){
          if(occupation==""){
            //$('.detail-form1 .elite-inline-label-div-occupation #occupation-error-message').css('display','inline-block');
            $('.share-form .elite-inline-label-div-occupation .elite-share-fm-uroccupation').addClass('err-txt-border');
            //$('#occupation-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
            return false;
          }
      }

           
            if(frm.countryCode1.value=="" || frm.countryCode1.value=="Country") {
                alert('Please select country code');            
                frm.countryCode1.focus();
                return false;
            }

            
            if(isNaN(frm.countryCode1.value)) {
                alert('Please select country code');
                frm.countryCode1.focus();
                return false;
            }    

    
            if(!phoneNumberShareValidationnew1())
            {
                return false;
            }
            jQuery.ajax({
              url: "https://www.elitematrimony.com/index.php?s=1",
              data:'regotp='+'&camsrcid='+
              $("#camsrcid").val()+'&name='+
              $("#username1").val()+'&phoneNo='+
              $("#phoneno1").val()+'&countryCode='+$("#countryCodeSelID1").val()+'&eliteprofilefor='+profilecreated+'&parentoccupation='+occupation+'&s=1&sendotp=1&getinvite=getinvite',
              type: "POST",
              success:function(data){
                response = JSON.parse(data);
                if(response.Status=='Success'){
            // setTimeout(showbox, 30000); // after 5 secs
            var timeLeft = 15;
            var timerId = setInterval(countdown, 1000);
            $('.resent-otp').text('');
            function countdown() {
            if (timeLeft == 0) {
              clearTimeout(timerId);
              $('.resent-otp').text('Resend OTP');
              $('#resendbtn').css('pointer-events','');
              } else {
              $('#resendbtn').css('pointer-events','none');
              if(timeLeft<10){
              $('.resent-otp').text('00:0'+timeLeft);
              }else{              
              $('.resent-otp').text('00:'+timeLeft);
              }
              timeLeft--;
              }
            }

            $('#otpmodal').modal('show');
                  var mobilefour = $("#phoneno1").val().substring(0, 4);
                  $('#mobtext').text(mobilefour);
                  // $("#nootpbtn").css("display", "none");
                  // $("#otpbutton").css("display", "block");
                  $("#otpdiv").css("display", "block");
                  if(isMobileDevice){
                    const mediaQuery = window.matchMedia('(max-width: 767px)')
              if (mediaQuery.matches) {
                $('.phoneno-mob').css('background','url(./revamp-images/form-popup-edit-icon.svg) no-repeat scroll 96% 65%');
                }
                    $('#pwaotplabel').css('display','none');
                    frm.pwaotp.focus();
                  }else{
                    $('.phoneno-mob').css('background','url(./revamp-images/form-popup-edit-icon.svg) no-repeat scroll 96% 65%');
                    $('.phoneno-mob').css('background-color','#fff');
                    frm.otpn1.focus();
                  }
                    //$("#resenderr").css("color","green").text(response.Msg);
                }else if(response.Status=="Failure"){
                  $('#pwaotp').addClass('modal-otp-error');

              }
                return false;
              },
              error:function (){}
          });
 
        
            return false;

}
//user name capitalize
$(document).on('keyup','#username',function(){
	var nameval = $(this).val();
	//name capitalize
    var namechar = nameval.includes('.') ? "true" : "false";
    var namesplit = (namechar=="true")?nameval.split("."):nameval.split(" ");
	for (let i = 0; i < namesplit.length; i++) {
	    namesplit[i] = namesplit[i][0].toUpperCase() + namesplit[i].substr(1);
	}
	var nameval = (namechar=="true")?namesplit.join("."):namesplit.join(" ");
	$(this).val(nameval);

    //name capitalize
});

$(document).on('keyup','#username1',function(){
	var nameval = $(this).val();
	//name capitalize
    var namechar = nameval.includes('.') ? "true" : "false";
    var namesplit = (namechar=="true")?nameval.split("."):nameval.split(" ");
	for (let i = 0; i < namesplit.length; i++) {
	    namesplit[i] = namesplit[i][0].toUpperCase() + namesplit[i].substr(1);
	}
	var nameval = (namechar=="true")?namesplit.join("."):namesplit.join(" ");
	$(this).val(nameval);

    //name capitalize
});

		//Get invite 
	function OTPValidationformnew(page,i){
		let details = navigator.userAgent;
		let regexp = /android|iphone|kindle|ipad/i;
		let isMobileDevice = regexp.test(details);
		var username = ($("#username").val()!="")? $("#username").val() : $("#username1").val();
		var phoneNo = ($("#phoneno").val()!="")? $("#phoneno").val() : $("#phoneno1").val();
		var countryCodeSelID = ($("#countryCodeSelID").val()!="")? $("#countryCodeSelID").val() : $("#countryCodeSelID1").val();
        var frm = document.entryFrm;
        var indexcount=i;
            var frm = document.eliteotpfrm;
            var regotp = frm.pwaotp.value.trim();         
            
            if(frm.pwaotp.value==""){
            	$('.share-form .otp-err-class #share-error-message-pwaotp').text('Please enter the OTP');
	            $('.share-form .otp-err-class #share-error-message-pwaotp').css('display','inline-block');
	            $('#pwaotp').addClass('modal-otp-error');
            }

	        if(isNaN(frm.pwaotp.value)) {
	            $('.share-form .elite-inline-olabel-div #otperr').text('Enter the correct OTP');
	            $('.share-form .elite-inline-olabel-div #otperr').css('display','inline-block');
	            $('#pwaotp').addClass('modal-otp-error');
            	//$('#share-resent-otp').css('display','none');
	           	return false;
	        }
	        var lblnone = (isMobileDevice)? $('#pwaotplabel').css('display','inline-block'):$('#pwaotplabel').css('display','none');


            if(frm.pwaotp.value!=""){
            	var regotp = frm.pwaotp.value;

            	jQuery.ajax({
		            url: "https://www.elitematrimony.com/index.php",
		            data:'regotp='+regotp+'&name='+
		            username+'&phoneNo='+
		            phoneNo+'&countryCode='+countryCodeSelID+'&s=1&getinvite=getinvite',
		            type: "POST",
		            success:function(data){	
		            	response = JSON.parse(data);
		            	if(response.Status=="Success"){
			            	if(response.EliteQualified=="1"){
			            		$('#otpmodal').modal('hide');
			            		$('#rmmobno').text(response.rmmobno);
			            		$('#rmname').text(response.rmname);
			            		$('#qualifiedCustomers').modal('show');
		            			return false;
		            		}else if(response.EliteQualified=="0"){
		            			$('#otpmodal').modal('hide');
			            		$('#tollfree').text(response.rmmobno);
			            		$('#qualifiedCustomers').modal('show'); //non
		            			return false;
		            		}
		            		return false;
		            	}
		            	if(response.Status=="Sucess"){
		            		var name = $("#username").val();
		            		$('.usernamemd').text(username);
			                $('#mobcodemd').text(countryCodeSelID);
			                $('#mobmd').text(phoneNo);
			                $('#frm1name').val(username);
			                $('#frm1mobile').val(phoneNo);
			                $('#frm1mobilecode').val(countryCodeSelID);
		            		$(".otpverifiedtext").css("color","green");
                            $(".otpverifiedtext").css("text-shadow","none");
                           	//$('#otpbutton').css('pointer-events','none');
			            	$('#otpformModal').modal('show');

			            	if(response.msg=="MatriId Already Available"){
		            			$('#alreadyanuser').val('1');
		            			$("#bridegroomhead, #bridegroomtitle").css("display", "none");
		            			$("#alreadyhead, #alreadytitle").css("display", "block");
		            			$("#notmember").css("display", "none");
		            			$("#alreadymember").css("display", "block");
		            			$("#newprofilecreate").css("display", "block");
		            			var toAppend ="";
		            			$.each(response.ProfileDetails,function(key,value){
		            				$.each(value,function(i,o){
		            				console.log(o);
		            				var nameval = o.Name;
									//name capitalize
							        var namechar = nameval.includes('.') ? "true" : "false";
							        var namesplit = (namechar=="true")?nameval.split("."):nameval.split(" ");
									for (let i = 0; i < namesplit.length; i++) {
									    namesplit[i] = namesplit[i][0].toUpperCase() + namesplit[i].substr(1);
									}
									var nameval = (namechar=="true")?namesplit.join("."):namesplit.join(" ");
							        //name capitalize
		            				$('#selectprofilefor').append('<option value="'+o.Gender+'~'+o.DOB+'~'+o.ByWhom+'~'+nameval+'">'+nameval+', '+o.Age+' ('+o.DomainId+')</option>');
		            				});
						        });
						        return false;

		            		}
			            	console.log(response);
			            	if(response.msg=='Phone Number Verified Sucessully'){
				            	$('#finalform').css('display','none');
				            	$('#incomedetails').css('display','block');
			            	}else if(response.LookingFor!='' && response.Gender!='' && response.Age!='' && response.OccupationSelected!='' && response.AnnualIncome!='' && response.FamilyNetWorth!=''){
			            		$('.border-active').css('display','none');
		            			$('.active').removeClass('active').addClass('verified');
			            		$("#brideverified").css("color","green");
			            		$("#brideverified").css("text-shadow","none");		            	
		                        $("#finalform").css("display", "block");
				            	$('.form-right-name-text').css('display','none');
				            	$("#incomedetails").css("display", "none");
				            	$('#bridegroomhead, #bridegroomtitle').css('display','none');
				            	$('#finalstep').removeClass('disable').addClass('active');
				            	$('#frm2name').val(response.Name);
								$('#frm2mobile').val(response.ContactNo);
								$('#frm2mobilecode').val(response.CountryCode);
								$('#frm2profilecreated').val(response.LookingFor);
								$('#frm2gender').val(response.Gender);
								$('#frm2age').val(response.Age);
								$('#frm2occupation').val(response.OccupationSelected);
								$('#frm2income').val(response.AnnualIncome);
								$('#frm2networth').val(response.FamilyNetWorth);
				            }

		            	}else if(response.Status=="Failure"){
		            		$('#pwaotp').addClass('modal-otp-error');

			            	// $('.share-form .otp-err-class #share-error-message-otp').text('Please enter the correct OTP');
				            // $('.share-form .otp-err-class #share-error-message-otp').css('display','inline-block');
				            // $('.share-form .otp-err-class').addClass('err-txt-border');

				    //         if(isMobileDevice){
			     //        		$('.share-form .otp-err-class #share-error-message-pwaotp').text('Enter the correct OTP');
					   //          $('.share-form .otp-err-class #share-error-message-pwaotp').css('display','inline-block');
					   //          $('.share-form .otp-err-class ').addClass('err-txt-border');
					   //          $('elite-form-heading1 .xs-none').css('display','none');
					   //         	$('#pwaotplabel').css('display','none');
					   //         	$('#pwaotp').css('color','#f32323');
					   //        	frm.pwaotp.focus();
			     //        	}else{
								// $('#otperr').text('Enter the correct OTP');
				    //         	$('#otperr').css('display','inline-block');
				    //         	$('.share-form .elite-inline-olabel-div ').addClass('err-txt-border');
				    //         	$('#share-resent-otp').css('display','none');
				    //         	frm.pwaotp.focus();
				    //         	$('#otpn1,#otpn2,#otpn3,#otpn4').css('color','#f32323');
			     //        	}
			            }
									// call value default
									makeTextBolder();
		            },
		            error:function (){
		            	alert('failure');
		            }
		        });
            }
        
            return false;

}

//Form 2 
function form2validation(){
	    var frm = document.Form2details;
        var username = frm.frm1name.value.trim();
        var phno = frm.frm1mobile.value.trim();
        var phnocode = frm.frm1mobilecode.value.trim();
        var selectprofilefor = frm.selectprofile.value.trim();
        var gender = frm.genderfm2.value.trim();
        var dob = frm.dobfrm2.value.trim();
        var occupation = frm.occupation.value.trim();
        var annualincome = frm.annualincome.value.trim();
        var familynetworth = frm.familynetworth.value.trim();
        var maritalstatusselect = frm.maritalstatusselect.value.trim();
        var religionselect = frm.religionselect.value.trim();
        var educationselect = frm.educationselect.value.trim();
       	var state = frm.statename.value.trim();
        var mothertongue = frm.mothertongue.value.trim(); 
        var alreadyanuser = frm.alreadyanuser.value.trim();

        var profilecreated = $('#profilecreatedselect').val();
		if(profilecreated=="" || profilecreated==null ){
        var profilecreated = $('#profilecreatedselect1').val();
        }

         $("#newprofilecreate").css("display", "none");
        var createnewprofile=$('#createnewprofile').val();
        if(alreadyanuser==1 && selectprofilefor=="" && createnewprofile!=1){
	        	$('.detail-form1 .elite-inline-label-div-selectprofile #selectedprofile-error-message').css('display','inline-block');
	        	$('.detail-form1 .elite-inline-label-div-selectprofile .elite-share-fm-selectprofile').addClass('err-txt-border');
	        	$('#selectedprofile-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	        	return false;
        }

				// call value default
					makeTextBolder();

        if(gender==""){
        	$('.detail-form1 .elite-inline-label-div-gender #gender-error-message').css('display','inline-block');
        	$('.detail-form1 .elite-inline-label-div-gender .elite-share-fm-gender').addClass('err-txt-border');
        	$('#gender-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	$('#gender-label-message').css('display','none');
        	return false;
        }
        var dob = frm.dobfrm2.value.trim();
        // if((formattedDate=="" || formattedDate=='NaN-NaN-NaN') && selectprofilefor!=""){
        // 	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').css('display','inline-block');
        // 	$('.detail-form1 .elite-inline-label-div-dob .elite-share-fm-dob').addClass('err-txt-border');
        // 	$('#dob-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        // 	$('#labeldob').css('display','block');
        // 	return false;
        // }
        if(dob==""){
        	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').css('display','inline-block');
        	$('.detail-form1 .elite-inline-label-div-dob .elite-share-fm-dob').addClass('err-txt-border');
        	$('#dob-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	$('#labeldob').css('display','none');
        	return false;
        }

        var parts = dob.split("-");
	    var dtDOB = new Date(parts[1] + "-" + parts[0] + "-" + parts[2]);
	    var dtCurrent = new Date();

	    var agelimit = gender == 'F' ? 18 : 21;

	    if (dtCurrent.getFullYear() - parts[2] < agelimit) {
	    	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').text('Invalid DOB');
	    	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').css('display','inline-block');
	    	$('.detail-form1 .elite-inline-label-div-dob .elite-share-fm-dob').addClass('err-txt-border');
	    	$('#dob-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	    	$('#labeldob').css('display','none');
	    	return false;

	    }
	     if (dtCurrent.getFullYear() - parts[2] == agelimit) {
	 
	        //CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
	        if ((dtCurrent.getMonth()+1) < parts[1]) {
	        	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').text('Invalid DOB');
		    	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').css('display','inline-block');
		    	$('.detail-form1 .elite-inline-label-div-dob .elite-share-fm-dob').addClass('err-txt-border');
		    	$('#dob-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
		    	$('#labeldob').css('display','none');
	            return false;
	        }
	        if ((dtCurrent.getMonth()+1) == parts[1]) {
	            //CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
	            if (dtCurrent.getDate() < parts[0]) {
	            	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').text('Invalid DOB');
			    	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').css('display','inline-block');
			    	$('.detail-form1 .elite-inline-label-div-dob .elite-share-fm-dob').addClass('err-txt-border');
			    	$('#dob-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
			    	$('#labeldob').css('display','none');
	                return false;
	            }
	        }
	    }


	    if(maritalstatusselect==""){
	    	$('#marital-label-message').css('display','none');
        	$('.detail-form1 .elite-inline-label-div-marital #marital-error-message').css('display','inline-block');
        	$('.detail-form1 .elite-inline-label-div-marital .elite-share-fm-marital').addClass('err-txt-border');
        	$('#marital-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	return false;
        }
        if(religionselect==""){
	    	$('#religion-label-message').css('display','none');        	
        	$('.detail-form1 .elite-inline-label-div-religion #religion-error-message').css('display','inline-block');
        	$('.detail-form1 .elite-inline-label-div-religion .elite-share-fm-religion').addClass('err-txt-border');
        	$('#religion-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	return false;
        }
        if(educationselect==""){
	    	$('#education-label-message').css('display','none');     	
        	$('.detail-form1 .elite-inline-label-div-education #education-error-message').css('display','inline-block');
        	$('.detail-form1 .elite-inline-label-div-education .elite-share-fm-education').addClass('err-txt-border');
        	$('#education-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	return false;
        }

        if(occupation==""){
        	$('#occupationlabel').css('display','none');     	
        	$('.detail-form1 .elite-inline-label-div-occupation #occupation-error-message').css('display','inline-block');
        	$('.detail-form1 .elite-inline-label-div-occupation .elite-share-fm-occupation').addClass('err-txt-border');
        	$('#occupation-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	return false;
        }

        if(annualincome==""){
        	$('#incomelabel').css('display','none');     	
        	$('.detail-form1 .elite-inline-label-div-income #income-error-message').css('display','inline-block');
        	$('.detail-form1 .elite-inline-label-div-income .elite-share-fm-income').addClass('err-txt-border');
        	$('#income-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	return false;
        }

        if(familynetworth==""){
        	$('#networthlabel').css('display','none');     	
        	$('.detail-form1 .elite-inline-label-div-networth #networth-error-message').css('display','inline-block');
        	$('.detail-form1 .elite-inline-label-div-networth .elite-share-fm-networth').addClass('err-txt-border');
        	$('#networth-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	return false;
        }

	    mobcountry = {"98":"91","220":"971","221":"44","222":"1","21":"32","129":"60"};
	    if(state=="" && mobcountry.hasOwnProperty(phnocode)){
        	$('#eliteresidinglabel').css('display','none');    	
        	$('.detail-form1 .elite-inline-label-div-state #state-error-message').css('display','inline-block');
        	$('.detail-form1 .elite-inline-label-div-state .elite-share-fm-state').addClass('err-txt-border');
        	$('#state-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	return false;
        }
        if(mothertongue==""){
        	$('#elitelanguagelabel').css('display','none');     	
        	$('.detail-form1 .elite-inline-label-div-mothertongue #mothertongue-error-message').css('display','inline-block');
        	$('.detail-form1 .elite-inline-label-div-mothertongue .elite-share-fm-mothertongue').addClass('err-txt-border');
        	$('#mothertongue-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	return false;
        }

        // $('.detail-form1 .elite-inline-label-div-pfc #location-error-message-pfc').text('Please Select Profile Created For');
        // $('.detail-form1 .elite-inline-label-div-pfc #location-error-message-pfc').css('display','inline-block');
        // $('.detail-form1 .elite-inline-label-div-pfc .elite-share-fm-profileby').addClass('err-txt-border');

		$('#frm2name').val(username);
		$('#frm2mobile').val(phno);
		$('#frm2mobilecode').val(phnocode);
		$('#frm2profilecreated').val(profilecreated);
		$('#frm2gender').val(gender);
		$('#frm2age').val(dob);
		$('#frm2occupation').val(occupation);
		$('#frm2income').val(annualincome);
		$('#frm2networth').val(familynetworth);

			// call value default
			makeTextBolder();

			// if(username!='' && phno!='' && profilecreated!='' && gender!='' && dob!='' && occupation!=''){
        	var senddata = 'username='+username+'&phno='+phno+'&phnocode='+phnocode+'&profilecreated='+profilecreated+'&gender='+gender+'&dob='+dob+'&occupation='+occupation+'&annualincome='+annualincome+'&familynetworth='+familynetworth+'&maritalstatusselect='+maritalstatusselect+'&religionselect='+religionselect+'&educationselect='+educationselect+'&elitestate='+state+'&mothertongue='+mothertongue+'&occupationform=1';

        	jQuery.ajax({
	            url: "https://www.elitematrimony.com/index.php",
	            data: senddata,
	            type: "POST",
	            success:function(data){	  
	            	response = JSON.parse(data);
	            	$('#otpmodal').modal('hide');
	            	if(familynetworth==18){
	            		$("#thankyousuccess").css('display','block');
						$("#ThanksTitle").css('display','block');
						$("#thankyouId").css('display','block');
						$("#InviteFormPage").css('display','none');
						$('body').css('overflow', 'hidden');
						$('html, body').animate({
				        scrollTop: $("#popup-view").offset().top
						}, 100);
					
						setTimeout(function(){
							$("#thankyousuccess").css('display','none');
							$("#ThanksTitle").css('display','none');
							$("#thankyouId").css('display','none');
							$("#InviteFormPage").css('display','block');
							$('body').css('overflow', 'auto');
							document.getElementById("ga").src="googleconversion.html";
							}, 5000);
							setTimeout(function(){
								var tPosition = $("#contact").offset().top-116;
								console.log(tPosition);
								$('html, body').animate({scrollTop:tPosition}, 500);
							}, 500);
	            		$('#tollfree').text(response.rmmobno);
	            		$('#qualifiedCustomers').modal('show'); //non
		            	$('#otpformModal').modal('hide');
	            	}else{
	            		//old
	            		// $('.active').removeClass('active').addClass('verified');
	            		// $('.border-active').css('display','none');
	            		// $("#brideverified").css("color","green");
	            		// $("#brideverified").css("text-shadow","none");		            	
               //          $("#finalform").css("display", "block");
		            	// $('.form-right-name-text').css('display','none');
		            	// $("#incomedetails").css("display", "none");
		            	// $('#bridegroomhead, #bridegroomtitle').css('display','none');
		            	// $('#finalstep').removeClass('disable').addClass('active');

		            	//new
		            	if(response.EliteQualified=="1"){
		            		$('#rmmobno').text(response.rmmobno);
		            		$('#rmname').text(response.rmname);
		            		$('#qualifiedCustomers').modal('show');
		            		$('#otpformModal').modal('hide');
		            	}else{
		            		$('#tollfree').text(response.rmmobno);
		            		$('#qualifiedCustomers').modal('show'); //non
		            		$('#otpformModal').modal('hide');
		            	}
	            	}
	            },
	            error:function (){}
	        });
        //}
}

//Form 3
function finaleliteubmit(){
        var frm = document.finaleliteform;
        var username = frm.frm2name.value.trim();
        var phno = frm.frm2mobile.value.trim();
        var phnocode = frm.frm2mobilecode.value.trim();
        var profilecreated = frm.frm2profilecreated.value.trim();
        var gender = frm.frm2gender.value.trim();
        var dob = frm.frm2age.value.trim();
        var occupation = frm.frm2occupation.value.trim();
        var annualincome = frm.frm2income.value.trim();
        var familynetworth = frm.frm2networth.value.trim();
        var state = frm.statename.value.trim();
        var mothertongue = frm.mothertongue.value.trim();     


        if(state==""){
        	$('.pad-form-div-bottom .elite-inline-label-div-state #state-error-message').css('display','inline-block');
        	$('.pad-form-div-bottom .elite-inline-label-div-state .elite-share-fm-state').addClass('err-txt-border');
        	$('#state-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	return false;
        }
        if(mothertongue==""){
        	$('.pad-form-div-bottom .elite-inline-label-div-mothertongue #mothertongue-error-message').css('display','inline-block');
        	$('.pad-form-div-bottom .elite-inline-label-div-mothertongue .elite-share-fm-mothertongue').addClass('err-txt-border');
        	$('#mothertongue-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
        	return false;
        }


        //if(username!='' && phno!='' && profilecreated!='' && gender!='' && dob!='' && occupation!=''){
        	var senddata = 'username='+username+'&phno='+phno+'&phnocode='+phnocode+'&profilecreated='+profilecreated+'&gender='+gender+'&dob='+dob+'&occupation='+occupation+'&annualincome='+annualincome+'&familynetworth='+familynetworth+'&elitestate='+state+'&mothertongue='+mothertongue+'&elitequalified=1';

        	jQuery.ajax({
	            url: "https://www.elitematrimony.com/index.php",
	            data: senddata,
	            type: "POST",
	            success:function(data){	 
	            	response = JSON.parse(data);
	            	$("#thankyousuccess").css('display','block');
					$("#ThanksTitle").css('display','block');
					$("#thankyouId").css('display','block');
					$("#InviteFormPage").css('display','none');
					$('body').css('overflow', 'hidden');
					$('html, body').animate({
			        scrollTop: $("#popup-view").offset().top
					}, 100);
				
					setTimeout(function(){
						$("#thankyousuccess").css('display','none');
						$("#ThanksTitle").css('display','none');
						$("#thankyouId").css('display','none');
						$("#InviteFormPage").css('display','block');
						$('body').css('overflow', 'auto');
						document.getElementById("ga").src="googleconversion.html";
						}, 5000);
						setTimeout(function(){
							var tPosition = $("#contact").offset().top-116;
							console.log(tPosition);
							$('html, body').animate({scrollTop:tPosition}, 500);
						}, 500);
	            	if(response.EliteQualified=="1"){
	            		$('#rmmobno').text(response.rmmobno);
	            		$('#rmname').text(response.rmname);
	            		$('#qualifiedCustomers').modal('show');
	            		$('#otpformModal').modal('hide');
	            	}else{
	            		$('#tollfree').text(response.rmmobno);
	            		$('#qualifiedCustomers').modal('show'); //non
	            		$('#otpformModal').modal('hide');
	            	}
	            },
	            error:function (){}
	        });
       // }
    
}

$(document).on('click','#newprofilecreate',function(){
	$("#bridegroomhead, #bridegroomtitle").css("display", "block");
	$("#alreadyhead, #alreadytitle").css("display", "none");
	$("#notmember").css("display", "block");
	$("#alreadymember, #newprofilecreate").css("display", "none");
	$('#finalform').css('display','none');
	$('#incomedetails').css('display','block');
	$('#createnewprofile').val('1');
});

let details = navigator.userAgent;
let regexp = /android|iphone|kindle|ipad/i;
let isMobileDevice = regexp.test(details);

$(document).on('click','#youroccupationselect',function(){
	$("#occupation-error-message").css("display","none");
	$('.share-form .elite-inline-label-div-occupation .elite-share-fm-uroccupation').removeClass('err-txt-border');
});
$(document).on('click','#youroccupationselect1',function(){
	$("#occupation-error-message1").css("display","none");
	$('.share-form .elite-inline-label-div-occupation .elite-share-fm-uroccupation').removeClass('err-txt-border');
});

$(document).on('click','#occupationselect',function(){
	$("#occupation-error-message").css("display","none");
	$("#occupationlabel").css("display","inline-block");
	$('.detail-form1 .elite-inline-label-div-occupation .elite-share-fm-occupation').removeClass('err-txt-border');
});
$(document).on('click','#maritalstatusselect',function(){
	$("#marital-label-message").css("display","inline-block");
	$("#marital-error-message").css("display","none");
	$('.detail-form1 .elite-inline-label-div-marital .elite-share-fm-marital').removeClass('err-txt-border');
});
$(document).on('click','#religionselect',function(){
	$("#religion-label-message").css("display","inline-block");
	$("#religion-error-message").css("display","none");
	$('.detail-form1 .elite-inline-label-div-religion .elite-share-fm-religion').removeClass('err-txt-border');
});
$(document).on('click','#educationselect',function(){
	$("#education-label-message").css("display","inline-block");
	$("#education-error-message").css("display","none");
	$('.detail-form1 .elite-inline-label-div-education .elite-share-fm-education').removeClass('err-txt-border');
});

$(document).on('change','#occupationselect',function(){
	$('#occupationlabel').removeAttr("style");
	if(isMobileDevice || window.navigator.platform.indexOf("Mac") != -1){
		$('#occupationlabel').css({"top":"-9px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	}
	$("#occupation-error-message").css("display","none");
	$('.detail-form1 .elite-inline-label-div-occupation .elite-share-fm-occupation').removeClass('err-txt-border');
	var occupation = $(this).val();
	// if(occupation==113 || occupation==111 || occupation==41){
	// 	$("#incomediv").css("display", "block");
	// }else if(occupation==109 || occupation==112){
	// 	$("#incomediv").css("display", "none");
	// 	$("#networthdiv").css("display", "none");
	// }else if(occupation=='' || occupation==102){
	// 	$("#incomediv").css("display", "none");
	// 	$("#networthdiv").css("display", "block");
	// }

});
$(document).on('change','#incomeselect',function(){
	$("#incomelabel").css("display","inline-block");
		$('#incomelabel').removeAttr("style");
	if(isMobileDevice || window.navigator.platform.indexOf("Mac") != -1){
		$('#incomelabel').css({"top":"-9px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	}
	$("#income-error-message").css("display","none");
	$('.detail-form1 .elite-inline-label-div-income .elite-share-fm-income').removeClass('err-txt-border');
	var income = $(this).val();
	var gender = $('#genderselect').val();
	// if(income==30){
	// 	$("#networthdiv").css("display", "block");
	// }else if(income==31 && gender=='M'){
	// 	$("#networthdiv").css("display", "block");
	// }else{
	// 	$("#networthdiv").css("display", "none");
	// }
});

$(document).on('change','#networthselect',function(){
	$("#networthlabel").css("display","inline-block");
	$('#networthlabel').removeAttr("style");
	if(isMobileDevice || window.navigator.platform.indexOf("Mac") != -1){
		$('#networthlabel').css({"top":"-9px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	}

});
$(document).on('change','#statename',function(){
	$("#eliteresidinglabel").css("display","inline-block");
	$("#state-error-message").css("display","none");
	$('.detail-form1 .elite-inline-label-div-state .elite-share-fm-state').removeClass('err-txt-border');
	if(isMobileDevice || window.navigator.platform.indexOf("Mac") != -1){
		$('#eliteresidinglabel').css({"top":"-9px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	}
});
$(document).on('change','#mothertongue',function(){
	$("#elitelanguagelabel").css("display","inline-block");
	$("#mothertongue-error-message").css("display","none");
	$('.detail-form1 .elite-inline-label-div-mothertongue .elite-share-fm-mothertongue').removeClass('err-txt-border');
	if(isMobileDevice || window.navigator.platform.indexOf("Mac") != -1){
		$('#elitelanguagelabel').css({"top":"-9px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	}
});
$(document).on('change','#selectprofilefor',function(){
	if(isMobileDevice || window.navigator.platform.indexOf("Mac") != -1){
		$('#selectedprofile-label-message').css({"top":"-9px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	}
});
$(document).on('change','#genderselect',function(){

	if(isMobileDevice || window.navigator.platform.indexOf("Mac") != -1){
		$('#gender-label-message').css({"top":"-9px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	}
});

$(document).on('change','#profilecreatedselect',function(){
	let details = navigator.userAgent;
	let regexp = /android|iphone|kindle|ipad/i;
	let isMobileDevice = regexp.test(details);
	if(isMobileDevice || window.navigator.platform.indexOf("Mac") != -1){
		$('#location-error-message-pfc').css({"top":"-9px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	}

	$('#genderselect').prop('disabled', false);
	$("#genderselect").prop("selected", false);

	//$('#incomediv, #networthdiv').css('display','none');
	$('#gender-label-message').removeAttr("style");
	// if(isMobileDevice){
	// 	$('#occupationlabel, #incomelabel,#networthlabel').css({"top":"8px","font-size":"14px","color":"#777","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	// }else{
	// 	$('#occupationlabel, #incomelabel,#networthlabel').css({"top":"14px","font-size":"16px","color":"#777","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	// }
	$('#occupationselect,#incomeselect,#networthselect,#dobfrm2').val("");
	$('#occupationselect,#incomeselect,#networthselect,#dobfrm2').removeClass('active');
	$('#labeldob').css('display','block');

	$("#pfc-error-message").css("display","none");
	$('.detail-form1 .elite-inline-label-div-pfc .elite-share-fm-profileby').removeClass('err-txt-border');
	var profilecreatedfor = $(this).val();
	(profilecreatedfor==2 || profilecreatedfor==3)? $('#parentocuupation').css('display','block'): $('#parentocuupation').css('display','none');
	
	//$('#genderselect option[selected]').removeAttr("selected");
	if(profilecreatedfor==2){
		if(isMobileDevice){
			$('#gender-label-message').css({"top":"-14px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
		}else{
			$('#gender-label-message').css({"top":"-14px","font-size":"16px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
		}
		//$("#genderselect option[value='M']").attr("selected","selected");
		$("#genderselect option[value='M']").prop("selected",true);
		$('#genderselect').prop('disabled', true);
		$("#genderselect").css("background-color", "#fff");
		$("#genderselect").addClass("active");


	}else if(profilecreatedfor==3){
		if(isMobileDevice){
			$('#gender-label-message').css({"top":"-14px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
		}else{
			$('#gender-label-message').css({"top":"-14px","font-size":"16px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
		}
		//$("#genderselect option[value='F']").attr("selected","selected");
		$("#genderselect option[value='F']").prop("selected", true);
		$('#genderselect').prop('disabled', true);
		$("#genderselect").css("background-color", "#fff");
		$("#genderselect").addClass("active");

	}else{
        $('#genderselect').prop('disabled', false);
        $("#genderselect").val(""); 
				$("#genderselect").removeClass("active");
    }
});
$(document).on('change','#profilecreatedselect1',function(){
  let details = navigator.userAgent;
  let regexp = /android|iphone|kindle|ipad/i;
  let isMobileDevice = regexp.test(details);
  if(isMobileDevice || window.navigator.platform.indexOf("Mac") != -1){
    $('#location-error-message-pfc').css({"top":"-9px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
  }

  $('#genderselect').prop('disabled', false);
  $("#genderselect").prop("selected", false);

  $('#gender-label-message').removeAttr("style");

  $('#occupationselect,#incomeselect,#networthselect,#dobfrm2').val("");
  $('#occupationselect,#incomeselect,#networthselect,#dobfrm2').removeClass('active');
  $('#labeldob').css('display','block');

  $("#pfc-error-message").css("display","none");
  $('.detail-form1 .elite-inline-label-div-pfc .elite-share-fm-profileby').removeClass('err-txt-border');
  var profilecreatedfor = $(this).val();
  (profilecreatedfor==2 || profilecreatedfor==3)? $('#parentocuupation1').css('display','block'): $('#parentocuupation1').css('display','none');
  
  if(profilecreatedfor==2){
    if(isMobileDevice){
      $('#gender-label-message').css({"top":"-14px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
    }else{
      $('#gender-label-message').css({"top":"-14px","font-size":"16px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
    }
    $("#genderselect option[value='M']").prop("selected",true);
    $('#genderselect').prop('disabled', true);
    $("#genderselect").css("background-color", "#fff");
    $("#genderselect").addClass("active");


  }else if(profilecreatedfor==3){
    if(isMobileDevice){
      $('#gender-label-message').css({"top":"-14px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
    }else{
      $('#gender-label-message').css({"top":"-14px","font-size":"16px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
    }
    $("#genderselect option[value='F']").prop("selected", true);
    $('#genderselect').prop('disabled', true);
    $("#genderselect").css("background-color", "#fff");
    $("#genderselect").addClass("active");

  }else{
        $('#genderselect').prop('disabled', false);
        $("#genderselect").val(""); 
        $("#genderselect").removeClass("active");
    }
});

$(document).on('change','#dobfrm2',function(){

	$("#dob-error-message").css("display","none");
	$('#labeldob').css('display','inline-block');
    $('.detail-form1 .elite-inline-label-div-dob .elite-share-fm-dob').removeClass('err-txt-border');

	var gender = $('#genderselect').val();
	var dob = $(this).val();
	var parts = dob.split("-");
    var dtDOB = new Date(parts[1] + "-" + parts[0] + "-" + parts[2]);
    var dtCurrent = new Date();

    var agelimit = gender == 'F' ? 18 : 21;

    if (dtCurrent.getFullYear() - parts[2] < agelimit) {
    	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').text('Invalid DOB');
    	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').css('display','inline-block');
    	$('.detail-form1 .elite-inline-label-div-dob .elite-share-fm-dob').addClass('err-txt-border');
    	$('#dob-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
    	$('#labeldob').css('display','none');
    	return false;

    }
     if (dtCurrent.getFullYear() - parts[2] == agelimit) {
 
        //CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
        if ((dtCurrent.getMonth()+1) < parts[1]) {
        	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').text('Invalid DOB');
	    	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').css('display','inline-block');
	    	$('.detail-form1 .elite-inline-label-div-dob .elite-share-fm-dob').addClass('err-txt-border');
	    	$('#dob-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	    	$('#labeldob').css('display','none');
            return false;
        }
        if ((dtCurrent.getMonth()+1) == parts[1]) {
            //CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
            if (dtCurrent.getDate() < parts[0]) {
            	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').text('Invalid DOB');
		    	$('.detail-form1 .elite-inline-label-div-dob #dob-error-message').css('display','inline-block');
		    	$('.detail-form1 .elite-inline-label-div-dob .elite-share-fm-dob').addClass('err-txt-border');
		    	$('#dob-error-message').css({"top":"-11px","color":"#f32323","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
		    	$('#labeldob').css('display','none');
                return false;
            }
        }
    }
});

$(document).on('click','#username',function(){
	$('.errname').css('display','block');
	$("#share-error-message-name").css("display","none");
    $('.share-form .elite-inline-label-div .elite-share-fm-name').removeClass('err-txt-border');
});
$(document).on('click','#username1',function(){
  $('.errname').css('display','block');
  $("#share-error-message-name1").css("display","none");
    $('.share-form .elite-inline-label-div .elite-share-fm-name').removeClass('err-txt-border');
});

$(document).on('click','#phoneno',function(){
	$('#phone-error-message-name-pwa').css('display','none');
	$("#phone-error-message-name").css("display","none");
    $('.share-form .elite-inline-plabel-div .phoneno-mob').removeClass('err-txt-border');
    });
$(document).on('click','#phoneno1',function(){
	$('#phone-error-message-name-pwa1').css('display','none');
	$("#phone-error-message-name1").css("display","none");
	$('.share-form .elite-inline-plabel-div').removeClass('err-txt-border');
});

$(document).on('click','#pwaotp',function(){
    $('#pwaotplabel').css('display','none');
	$('#pwaotp').removeClass('modal-otp-error');
});

$(document).on('click','#genderselect',function(){
	$('#gender-label-message').css('display','inline-block');

	if(isMobileDevice || window.navigator.platform.indexOf("Mac") != -1){
		$('#gender-label-message').css({"top":"-9px","font-size":"12px","color":"#000","background":"#fff","padding":"1px 5px","letter-spacing":"0.16px"});
	}
	$("#gender-error-message").css("display","none");
	$('.detail-form1 .elite-inline-label-div-gender .elite-share-fm-gender').removeClass('err-txt-border');
});
$(document).on('click','#profilecreatedselect',function(){
	$("#pfc-error-message").css("display","none");
	$('.share-form .elite-inline-label-div-pfc .elite-share-fm-profileby').removeClass('err-txt-border');

});

$(document).on('click','#networthselect',function(){
	$("#networth-error-message").css("display","none");
	$('.detail-form1 .elite-inline-label-div-networth .elite-share-fm-networth').removeClass('err-txt-border');
});
$(document).on('click','#statename',function(){
	$("#state-error-message").css("display","none");
	$('.pad-form-div-bottom .elite-inline-label-div-state .elite-share-fm-state').removeClass('err-txt-border');
});
$(document).on('click','#mothertongue',function(){
	$("#mothertongue-error-message").css("display","none");
	$('.pad-form-div-bottom .elite-inline-label-div-mothertongue .elite-share-fm-mothertongue').removeClass('err-txt-border');
});

$(document).on('change','#countryCodeSelID',function(){
	var countrycode = $(this).val();
	statekey = {"222":{"101":"Alabama","102":"Alaska","103":"Arizona","104":"Arkansas","105":"California","106":"Colorado","107":"Connecticut","108":"Delaware","109":"District of Columbia","110":"Florida","111":"Georgia","112":"Hawaii","113":"Idaho","114":"Illinois","115":"Indiana","116":"Iowa","117":"Kansas","118":"Kentucky","119":"Louisiana","120":"Maine","121":"Maryland","122":"Massachusetts","123":"Michigan","124":"Minnesota","125":"Mississippi","126":"Missouri","127":"Montana","128":"Nebraska","129":"Nevada","130":"New Hampshire","131":"New Jersey","132":"New Mexico","133":"New York","134":"North Carolina","135":"North Dakota","136":"Ohio","137":"Oklahoma","138":"Oregon","139":"Pennsylvania","140":"Rhode Island","141":"South Carolina","142":"South Dakota","143":"Tennessee","144":"Texas","145":"Utah","146":"Vermont","147":"Virginia","148":"Washington","149":"West Virginia","150":"Wisconsin","151":"Wyoming"},"13":{"152":"Ashmore and Cartier Islands Territory","153":"Australian Capital Territory","154":"Canberra","155":"Coral Sea Islands Territory","156":"Jervis Bay Territory","157":"New South Wales State","158":"Northern Territory","159":"Queensland State","160":"South Australia State","161":"Tasmania State","162":"Victoria State","163":"Western Australia State"},"17":{"164":"Capital Governorate","165":"Manama","166":"Muharraq Governorate","167":"Northern Governorate","168":"Southern Governorate"},"18":{"169":"Barisal Division","170":"Chittagong Division","171":"Dhaka","172":"Dhaka Division","173":"Khulna Division","174":"Mymensingh Division","175":"Rajshahi Division","176":"Rangpur Division","177":"Sylhet Division"},"39":{"178":"Alberta Province","179":"British Columbia Province","180":"Manitoba Province","181":"New Brunswick Province","182":"Newfoundland and Labrador Province","183":"Northwest Territories Territory","184":"Nova Scotia Province","185":"Nunavut Territory","186":"Ontario Province","187":"Ottawa","188":"Prince Edward Island Province","189":"Quebec Province","190":"Saskatchewan Province","191":"Yukon Territory"},"80":{"192":"Baden-Wurttemberg State","193":"Bavaria State","194":"Berlin","195":"Berlin State","196":"Brandenburg State","197":"Bremen State","198":"Hamburg State","199":"Hesse State","200":"Lower Saxony State","201":"Mecklenburg-Vorpommern State","202":"North Rhine-Westphalia State","203":"Rhineland-Palatinate State","204":"Saarland State","205":"Saxony State","206":"Saxony-Anhalt State","207":"Schleswig-Holstein State","208":"Thuringia State"},"114":{"209":"Ahmadi Governorate","210":"Al Farwaniyah Governorate","211":"Al Kuwayt Governorate","212":"Hawalli Governorate","213":"Jahrah Governorate","214":"Kuwait City","215":"Mubarak Al-Kabeer Governorate"},"129":{"2216":"Johor Darul Ta'zim State","217":"Kedah Darul Aman State","218":"Kelantan Darul Naim State","219":"Kuala Lumpur","220":"Kuala Lumpur Federal Territory","221":"Labuan Federal Territory","222":"Malacca State","223":"Negeri Sembilan Darul Khusus State","224":"Pahang Darul Makmur State","225":"Penang State","226":"Perak Darul Ridzuan State","227":"Perlis Indera Kayangan State","228":"Putrajaya","229":"Putrajaya Federal Territory","230":"Sabah State","231":"Sarawak State","232":"Selangor Darul Ehsan State","233":"Terengganu Darul Iman State"},"161":{"234":"Ad Dakhiliyah Governorate","235":"Adh Dhahirah Governorate","236":"Al Batinah North Governorate","237":"Al Batinah South Governorate","238":"Al Buraimi Governorate","239":"Al Wusta Governorate","240":"Ash Sharqiyah North Governorate","241":"Ash Sharqiyah South Governorate","242":"Dhofar Governorate","243":"Musandam Governorate","244":"Muscat","245":"Muscat Governorate"},"173":{"246":"Al Daayen Municipality","247":"Al Khawr Municipality","248":"Al Rayyan Municipality","249":"Al Wakrah Municipality","250":"Doha","251":"Doha Municipality","252":"Madinat ach Shamal Municipality","253":"Umm Salal Municipality"},"185":{"254":"Al Bahah Region","255":"Al Jawf Region","256":"Al Madinah Region","257":"Al Qasim Region","258":"Al Riyadh Region","259":"Asir Region","260":"Eastern Province Region","261":"Ha'il Region","262":"Jizan Region","263":"Makkah Region","264":"Najran Region","265":"Northern Borders Region","266":"Riyadh","267":"Tabuk Region"},"189":{"268":"Central Singapore CDC","269":"North East CDC","270":"North West CDC","271":"Singapore","272":"South East CDC","273":"South West CDC"},"195":{"274":"Central Province","275":"Colombo","276":"Eastern Province","277":"North Central Province","278":"North Western Province","279":"Northern Province","280":"Sabaragamuwa Province","281":"Southern Province","282":"Sri Jayawardenepura Kotte","283":"Uva Province","284":"Western Province"},"220":{"285":"Abu Dhabi","286":"Abu Dhabi Emirate","287":"Ajman Emirate","288":"Dubai Emirate","289":"Fujairah Emirate","290":"Ras al-Khaimah Emirate","291":"Sharjah Emirate","292":"Umm al-Quwain Emirate"},"221":{"293":"East Midlands Region","294":"East of England Region","295":"London","296":"London Region","297":"North East Region","298":"North West Region","299":"Northern Ireland","300":"Scotland","301":"South East Region","302":"South West Region","303":"Wales","304":"West Midlands Region","305":"Yorkshire and the Humber Region"},"98":{"1":"Andaman & Nicobar","2":"Andhra Pradesh","3":"Arunachal Pradesh","4":"Assam","5":"Bihar","6":"Chandigarh","7":"Chhattisgarh","8":"Dadra & Nagar Haveli","9":"Daman & Diu","10":"Delhi \/ NCR","11":"Goa","12":"Gujarat","13":"Haryana","14":"Himachal Pradesh","15":"Jammu & Kashmir","16":"Jharkand","17":"Karnataka","18":"Kerala","19":"Lakshwadeep","20":"Madhya Pradesh","21":"Maharashtra","22":"Manipur","23":"Meghalaya","24":"Mizoram","25":"Nagaland","26":"Orissa","27":"Pondicherry","28":"Punjab","29":"Rajasthan","30":"Sikkim","31":"Tamil Nadu","36":"Telangana","32":"Tripura","33":"Uttar Pradesh","34":"Uttarakhand","35":"West Bengal"}};
	mobcountry = {"98":"91","220":"971","221":"44","222":"1","21":"32","129":"60"};
	var st =  Object.keys(mobcountry).find(key =>
        mobcountry[key] === countrycode);
	var stateload = statekey[st];
	if(statekey.hasOwnProperty(st)){
		$('#statediv').css('display','block');
	}else{
		$('#statediv').css('display','none');
	}
	$('#statename').empty();
	$('#statename').append('<option value="" selected disabled>Residing State</option>');
	$.each(stateload,function(key,value){
		$('#statename').append('<option value="'+key+'">'+value+'</option>');
	});

});

function ResendOTP(){
	var phno = $("#phoneno").val();
	var countrycode = $("#countryCodeSelID").val();
	var name = $("#username").val();

	if(!shareFormNameValidationnew(true)){
        return false;
    }
    if(!phoneNumberShareValidationnew())
    {
        return false;
    }


	$.ajax({
    url: "https://www.elitematrimony.com/index.php",
    data:'phoneNo='+phno+'&countryCode='+countrycode+'&name='+name+'&resendotp=1',
    type: "POST",
    success:function(data){
    	response = JSON.parse(data);
    	$('#pwaotp').focus();
    	if(response.Status=='Failure'){
			$('#resenderr').css('display','block');				
	  		$("#resenderr").text(response.Msg);
	  		$("#resenderr").css('color','#f32323');
	  		return false;
	  	}else{
			$('#resenderr').css('display','block');
	  		$("#resenderr").text(response.Msg);
	  		$("#resenderr").css('color','#1b5e20');
	  	}
    },
    error:function (){}
});

}
//otp validation end

//Membership Form login Start

function openloginmodal(){
	$('#loginformmember').on('shown.bs.modal', function () {
		$('#memmobno').focus();
	});
}
function otpenable(){
	var memotpn1 = $("#memotpn1").val();
	var memotpn2 = $("#memotpn2").val();
	var memotpn3 = $("#memotpn3").val();
	var memotpn4 = $("#memotpn4").val();
	if(memotpn1!='' && memotpn2!='' && memotpn3!='' && memotpn4!=''){
		$('#otpvalidbtn').removeClass('button-next-inactive');
		$('#otpvalidbtn').addClass('button-next-active');
	}

}
    function Loginmobbtnclick(page,i){
		$(".memresendtext").text('');

        var memfrm = document.memloginform;
        var memno = memfrm.memmobno.value.trim();
        var memcountrycode = memfrm.memcountrycode.value.trim();


		if(memno=="") {
			$('#mobborder').addClass('form-error-bordermobile');
			$('.login-formerror-text').css('display','block');				
			$('.login-formerror-text').text('Enter Registered Mobile Number');
        	return false;
		}      
		if(isNaN(memno)) {
			$('#mobborder').addClass('form-error-bordermobile');
			$('.login-formerror-text').css('display','block');				
			$('.login-formerror-text').text('Enter 10 digit Mobile number');
        	return false;
		}

		if(memcountrycode=='91'){
	        if((memno.length < 10) || (memno.length > 10)) {
	           	$('#mobborder').addClass('form-error-bordermobile');
				$('.login-formerror-text').css('display','block');				
				$('.login-formerror-text').text('Enter 10 digit Mobile number');
                memfrm.memmobno.focus();
                return false;
	        }
	        var regex = /^[6-9]\d{9}$/; // Regular expression for mobile number starting with 6, 7, 8, or 9
        
	        if (!regex.test(memno)) {

	            $('#mobborder').addClass('form-error-bordermobile');
				$('.login-formerror-text').css('display','block');				
				$('.login-formerror-text').text('Enter 10 digit Mobile number');
                memfrm.memmobno.focus();
                return false;
	        }

        
        }
         
        if(memcountrycode!='91'){
           if((memno.length < 6)) {
           		$('#mobborder').addClass('form-error-bordermobile');
				$('.login-formerror-text').css('display','block');				
				$('.login-formerror-text').text('Enter valid number');
                return false;
            }
            else{
            	var phonelen = memno.replace(/^[0]+/g,"");
            	if((phonelen.length < 6)) {
	              	$('#mobborder').addClass('form-error-bordermobile');
					$('.login-formerror-text').css('display','block');				
					$('.login-formerror-text').text('Enter valid Minimum 6 digits phone number');
			    	memfrm.memmobno.focus();
	                return false;
                }
            }
    	}


        jQuery.ajax({
        url: "https://www.elitematrimony.com/index.php",
        data:'phoneNo='+
        memno+'&countryCode='+memcountrycode+'&MemberOtpverify=1',
        type: "POST",
        success:function(data){
        	response = JSON.parse(data);
        	if(response.status==200){
        		$('#otptext').text(response.Msg);
        		//$('#memotpn1').focus();
        		$('#loginformotpmember').modal('show');
        		$('#loginformotpmember').on('shown.bs.modal', function () {
                	$('#memotpn1').focus();
            	});
		    	$('#loginformmember').modal('hide');
		    	var timerstop = $('#timersym').val();
		    	var timeLeft = 15;
			    var mi =1000;
		    	if(timerstop==1){
			    	var timeLeft = '';
			    	var mi ='';
			    }
					var timerId = setInterval(countdown, mi);
					function countdown() {
					if (timeLeft == 0) {
						clearTimeout(timerId);
						$('.login-otpsec').text('');
						$('#memotpresend').css({'pointer-events':'auto','opacity':''});
					} else {
						$('#memotpresend').css('pointer-events','none');
						if(timeLeft<10){
						$('.login-otpsec').text(timeLeft+' Sec');
						}else{					    
						$('.login-otpsec').text(timeLeft+' Sec');
						}
						timeLeft--;
						}
					}
            }else{
    			$('#mobborder').addClass('form-error-bordermobile');
	  			$(".login-formerror-text").html('<img src="{{asset('frontend/revamp-images/loginform-error-infoimg.svg')}}">Mobile number is not registered / invalid. </div>');
            	$('.login-formerror-text').css('display','block');
			}
    		return false;
        },
        error:function (){}
    });       
    return false;
}

    function Loginotpbtnclick(){		
        var memotpfrm = document.otpvalidform;
        var memno1 = memotpfrm.memotpn1.value.trim();
        var memno2 = memotpfrm.memotpn2.value.trim();
        var memno3 = memotpfrm.memotpn3.value.trim();
        var memno4 = memotpfrm.memotpn4.value.trim();
        var memno = $('#memmobno').val();

        if(memno1=="" || memno2=="" || memno3=="" || memno4==""){
	    	alert('Enter 4-digit OTP');
	    	return false;
	    }
	    if(isNaN(memno1) || isNaN(memno2) || isNaN(memno3) || isNaN(memno4)) {
	        alert('Enter Valid OTP');
           	return false;
        }
        // $('#otpvalidbtn').removeClass('button-next-inactive');
        // $('#otpvalidbtn').addClass('button-next-active');


            jQuery.ajax({
	            url: "https://www.elitematrimony.com/index.php",
	            data:'phoneNo='+
	            memno+'&memotp='+memno1+memno2+memno3+memno4+'&MemberLogin=1',
	            type: "POST",
	            success:function(data){
	            	$("#memotpn1").val('');
	            	$("#memotpn2").val('');
	            	$("#memotpn3").val('');
	            	$("#memotpn4").val('');


	            	response = JSON.parse(data);
	            	if(response.status==200){
	            		$("#memmobno").val('');
	            		var matriid = response.MatriId;
	            		$('#loginformotpmember').modal('hide');
	            		window.location.href = "membershipformd3dd.html?matriid="+response.Encid+"&src=1";
		            }else if(response.status==403){
		            	$('#loginformotpmember').modal('hide');
		    			$('#loginformmember').modal('show');
		    			$('#mobborder').addClass('form-error-bordermobile');
		            	$('.login-formerror-text').css('display','block');
					}else{
						$('.memresendtext').css('display','block');				
	  					$(".memresendtext").text(response.Msg);
	  					$(".memresendtext").css('color','#f32323');			        
	  				}
            		return false;
	            },
	            error:function (){}
	        });
 
        
            return false;

}

function Memresendotp(){

	var phno = $("#memmobno").val();
	var countrycode = $("#memcountrycode").val();
	var name = $("#username").val();


	$.ajax({
    url: "https://www.elitematrimony.com/index.php",
    data:'phoneNo='+phno+'&countryCode='+countrycode+'&name='+name+'&memresendotp=1',
    type: "POST",
    success:function(data){
    	response = JSON.parse(data);
    	if(response.Status=='Failure'){
			$('.memresendtext').css('display','block');				
	  		$(".memresendtext").text(response.Msg);
	  		$(".memresendtext").css('color','#f32323');
	  		return false;
	  	}else{
	  		$('#memotpn1').focus();
			$('.memresendtext').css('display','block');
	  		$(".memresendtext").text(response.Msg);
	  		$(".memresendtext").css('color','#1b5e20');
	  	}
    },
    error:function (){}
});

}

function loginmodalclose(){
	$('#memmobno').val('');
	$('#mobborder').removeClass('form-error-bordermobile');
	$('.login-formerror-text').css('display','none');				
}
function otpmodalclose(){
	$('#timersym').val('1');
	$('#memotpn1,#memotpn2,#memotpn3,#memotpn4').val('');
}

function createprofile() {
	var phoneno= $('#phoneno').val();
	var username= $('#username').val();
	var countryCode= $('#countryCodeSelID').val();
	$.ajax({
	    url: "https://www.elitematrimony.com/index.php",
	    data:'phoneNo='+phoneno+'&name='+username+'&countryCode='+countryCode+'&createprofileinvite=1',
	    type: "POST",
	    success:function(data){
	    	response = JSON.parse(data);
	    	window.location.href = response.url;
	    },
	    error:function (){}
	});	
}
$(document).on('click','#memmobno',function(){
	$('#mobborder').removeClass('form-error-bordermobile');
	$('.login-formerror-text').css('display','none');		
});



//Membership Form login End
</script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PP9MB5G');</script>
<!-- End Google Tag Manager -->

  </head>
  <body style="">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PP9MB5G" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


{{-- <div class="row topright-hide top-image-edge">
    <img src="{{asset('frontend/revamp-images/topright.png')}}" class="topright" alt="Top Right">  
    </div> --}}

		<div class="menu-overlay" id="menu-overlay-id"></div>

<!-- Revamp Code Start -->
<div class="container-fluid p-0 xs-overflow-hidden">

<div class="container-fluid pt-0 bg-banner-1 xs-pt0 xs-bg-header">
	<!-- <div class="status-bar">
	<img class="back-arrow-header" src="revamp-images/back-arrow.svg" alt="Back Arrow">
	</div> -->
	<div class="container-min xs-header-pad">
   
        @include('frontend.layouts.header')

        @yield('content')
		
	
{{-- Footer Start --}}

@include('frontend.layouts.footer')

{{-- Footer End --}}

</div>

<!-- Revamp Code End -->



<!-- location popup start -->

<div id="locationPopup" class="overlay">
	<div class="locationpopup">
		<h2 class="popupheader">Select Location</h2>
		<span class="close" onclick='hideModel("#locationPopup")'>&times;</span>
				<form action="#" method="" name="locationpopupfrm" class="locationfrm">
							<div class="pb-4 countrydiv">
								<label id="country-error-message-name" class="location-inline-label e-inline-label" style="display:none">Please enter country</label>
								<select class="form-control custom-select   select-option-country1 selectcountry" id="countryDet" name="countryDet" onchange="getstateData(this.value,'leadform');getcountryDet(this.value,'country');" required>
									<option value=""> Select your Country	</option>
																			<option value="98" selected>India</option>
																			<option value="1" >Afghanistan</option>
																			<option value="2" >Albania</option>
																			<option value="3" >Algeria</option>
																			<option value="4" >American Samoa</option>
																			<option value="5" >Andorra</option>
																			<option value="6" >Angola</option>
																			<option value="7" >Anguilla</option>
																			<option value="8" >Antarctica</option>
																			<option value="9" >Antigua and Barbuda</option>
																			<option value="10" >Argentina</option>
																			<option value="11" >Armenia</option>
																			<option value="12" >Aruba</option>
																			<option value="13" >Australia</option>
																			<option value="14" >Austria</option>
																			<option value="15" >Azerbaijan</option>
																			<option value="16" >Bahamas</option>
																			<option value="17" >Bahrain</option>
																			<option value="18" >Bangladesh</option>
																			<option value="19" >Barbados</option>
																			<option value="20" >Belarus</option>
																			<option value="21" >Belgium</option>
																			<option value="22" >Belize</option>
																			<option value="23" >Benin</option>
																			<option value="24" >Bermuda</option>
																			<option value="25" >Bhutan</option>
																			<option value="26" >Bolivia</option>
																			<option value="27" >Bosnia and Herzegovina</option>
																			<option value="28" >Botswana</option>
																			<option value="29" >Bouvet Island</option>
																			<option value="30" >Brazil</option>
																			<option value="31" >British Indian Ocean Territory</option>
																			<option value="32" >British Virgin Islands</option>
																			<option value="33" >Brunei</option>
																			<option value="34" >Bulgaria</option>
																			<option value="35" >Burkina Faso</option>
																			<option value="36" >Burundi</option>
																			<option value="37" >Cambodia</option>
																			<option value="38" >Cameroon</option>
																			<option value="39" >Canada</option>
																			<option value="40" >Cape Verde</option>
																			<option value="41" >Cayman Islands</option>
																			<option value="42" >Central African Republic</option>
																			<option value="43" >Chad</option>
																			<option value="44" >Chile</option>
																			<option value="45" >China</option>
																			<option value="46" >Christmas Island</option>
																			<option value="47" >Cocos Islands</option>
																			<option value="48" >Colombia</option>
																			<option value="49" >Comoros</option>
																			<option value="50" >Congo</option>
																			<option value="51" >Cook Islands</option>
																			<option value="52" >Costa Rica</option>
																			<option value="53" >Croatia</option>
																			<option value="54" >Cuba</option>
																			<option value="55" >Cyprus</option>
																			<option value="56" >Czech Republic</option>
																			<option value="57" >Denmark</option>
																			<option value="58" >Djibouti</option>
																			<option value="59" >Dominica</option>
																			<option value="60" >Dominican Republic</option>
																			<option value="61" >East Timor</option>
																			<option value="62" >Ecuador</option>
																			<option value="63" >Egypt</option>
																			<option value="64" >El Salvador</option>
																			<option value="65" >Equatorial Guinea</option>
																			<option value="66" >Eritrea</option>
																			<option value="67" >Estonia</option>
																			<option value="68" >Ethiopia</option>
																			<option value="69" >Falkland Islands</option>
																			<option value="70" >Faroe Islands</option>
																			<option value="71" >Fiji</option>
																			<option value="72" >Finland</option>
																			<option value="73" >France</option>
																			<option value="74" >French Guiana</option>
																			<option value="75" >French Polynesia</option>
																			<option value="76" >French Southern Territories</option>
																			<option value="77" >Gabon</option>
																			<option value="78" >Gambia</option>
																			<option value="79" >Georgia</option>
																			<option value="80" >Germany</option>
																			<option value="81" >Ghana</option>
																			<option value="82" >Gibraltar</option>
																			<option value="83" >Greece</option>
																			<option value="84" >Greenland</option>
																			<option value="85" >Grenada</option>
																			<option value="86" >Guadeloupe</option>
																			<option value="87" >Guam</option>
																			<option value="88" >Guatemala</option>
																			<option value="89" >Guinea</option>
																			<option value="90" >Guinea-Bissau</option>
																			<option value="91" >Guyana</option>
																			<option value="92" >Haiti</option>
																			<option value="93" >Heard and McDonald Islands</option>
																			<option value="94" >Honduras</option>
																			<option value="95" >Hong Kong</option>
																			<option value="96" >Hungary</option>
																			<option value="97" >Iceland</option>
																			<option value="99" >Indonesia</option>
																			<option value="100" >Iran</option>
																			<option value="101" >Iraq</option>
																			<option value="102" >Ireland</option>
																			<option value="103" >Israel</option>
																			<option value="104" >Italy</option>
																			<option value="105" >Ivory Coast</option>
																			<option value="106" >Jamaica</option>
																			<option value="107" >Japan</option>
																			<option value="108" >Jordan</option>
																			<option value="109" >Kazakhstan</option>
																			<option value="110" >Kenya</option>
																			<option value="111" >Kiribati</option>
																			<option value="112" >Korea, North</option>
																			<option value="113" >Korea, South</option>
																			<option value="114" >Kuwait</option>
																			<option value="115" >Kyrgyzstan</option>
																			<option value="116" >Laos</option>
																			<option value="117" >Latvia</option>
																			<option value="118" >Lebanon</option>
																			<option value="119" >Lesotho</option>
																			<option value="120" >Liberia</option>
																			<option value="121" >Libya</option>
																			<option value="122" >Liechtenstein</option>
																			<option value="123" >Lithuania</option>
																			<option value="124" >Luxembourg</option>
																			<option value="125" >Macau</option>
																			<option value="126" >Macedonia</option>
																			<option value="127" >Madagascar</option>
																			<option value="128" >Malawi</option>
																			<option value="129" >Malaysia</option>
																			<option value="130" >Maldives</option>
																			<option value="131" >Mali</option>
																			<option value="132" >Malta</option>
																			<option value="133" >Marshall Islands</option>
																			<option value="134" >Martinique</option>
																			<option value="135" >Mauritania</option>
																			<option value="136" >Mauritius</option>
																			<option value="137" >Mayotte</option>
																			<option value="138" >Mexico</option>
																			<option value="139" >Micronesia, Federated States of</option>
																			<option value="140" >Moldova</option>
																			<option value="141" >Monaco</option>
																			<option value="142" >Mongolia</option>
																			<option value="143" >Montserrat</option>
																			<option value="144" >Morocco</option>
																			<option value="145" >Mozambique</option>
																			<option value="146" >Myanmar</option>
																			<option value="147" >Namibia</option>
																			<option value="148" >Nauru</option>
																			<option value="149" >Nepal</option>
																			<option value="150" >Netherlands</option>
																			<option value="151" >Netherlands Antilles</option>
																			<option value="152" >New Caledonia</option>
																			<option value="153" >New Zealand</option>
																			<option value="154" >Nicaragua</option>
																			<option value="155" >Niger</option>
																			<option value="156" >Nigeria</option>
																			<option value="157" >Niue</option>
																			<option value="158" >Norfolk Island</option>
																			<option value="159" >Northern Mariana Islands</option>
																			<option value="160" >Norway</option>
																			<option value="161" >Oman</option>
																			<option value="162" >Pakistan</option>
																			<option value="163" >Palau</option>
																			<option value="164" >Panama</option>
																			<option value="165" >Papua New Guinea</option>
																			<option value="166" >Paraguay</option>
																			<option value="167" >Peru</option>
																			<option value="168" >Philippines</option>
																			<option value="169" >Pitcairn Island</option>
																			<option value="170" >Poland</option>
																			<option value="171" >Portugal</option>
																			<option value="172" >Puerto Rico</option>
																			<option value="173" >Qatar</option>
																			<option value="174" >Reunion</option>
																			<option value="175" >Romania</option>
																			<option value="176" >Russia</option>
																			<option value="177" >Rwanda</option>
																			<option value="178" >S. Georgia and S. Sandwich Isls.</option>
																			<option value="179" >Saint Kitts & Nevis</option>
																			<option value="180" >Saint Lucia</option>
																			<option value="181" >Saint Vincent and The Grenadines</option>
																			<option value="182" >Samoa</option>
																			<option value="183" >San Marino</option>
																			<option value="184" >Sao Tome and Principe</option>
																			<option value="185" >Saudi Arabia</option>
																			<option value="186" >Senegal</option>
																			<option value="187" >Seychelles</option>
																			<option value="188" >Sierra Leone</option>
																			<option value="189" >Singapore</option>
																			<option value="190" >Slovakia</option>
																			<option value="191" >Slovenia</option>
																			<option value="192" >Somalia</option>
																			<option value="193" >South Africa</option>
																			<option value="194" >Spain</option>
																			<option value="195" >Sri Lanka</option>
																			<option value="196" >St. Helena</option>
																			<option value="197" >St. Pierre and Miquelon</option>
																			<option value="198" >Sudan</option>
																			<option value="199" >Suriname</option>
																			<option value="200" >Svalbard and Jan Mayen Islands</option>
																			<option value="201" >Swaziland</option>
																			<option value="202" >Sweden</option>
																			<option value="203" >Switzerland</option>
																			<option value="204" >Syria</option>
																			<option value="205" >Taiwan</option>
																			<option value="206" >Tajikistan</option>
																			<option value="207" >Tanzania</option>
																			<option value="208" >Thailand</option>
																			<option value="209" >Togo</option>
																			<option value="210" >Tokelau</option>
																			<option value="211" >Tonga</option>
																			<option value="212" >Trinidad and Tobago</option>
																			<option value="213" >Tunisia</option>
																			<option value="214" >Turkey</option>
																			<option value="215" >Turkmenistan</option>
																			<option value="216" >Turks and Caicos Islands</option>
																			<option value="217" >Tuvalu</option>
																			<option value="218" >Uganda</option>
																			<option value="219" >Ukraine</option>
																			<option value="220" >United Arab Emirates</option>
																			<option value="221" >United Kingdom</option>
																			<option value="222" >United States of America</option>
																			<option value="223" >Uruguay</option>
																			<option value="224" >Uzbekistan</option>
																			<option value="225" >Vanuatu</option>
																			<option value="226" >Vatican City</option>
																			<option value="227" >Venezuela</option>
																			<option value="228" >Vietnam</option>
																			<option value="229" >Virgin Islands</option>
																			<option value="230" >Wallis and Futuna Islands</option>
																			<option value="231" >Western Sahara</option>
																			<option value="232" >Yemen</option>
																			<option value="233" >Yugoslavia (Former)</option>
																			<option value="234" >Zaire</option>
																			<option value="235" >Zambia</option>
																			<option value="236" >Zimbabwe</option>
																			<option value="237" >DR Congo</option>
																</select>
						</div>
						
						<div class="pb-4 statediv">
							<span id="statelist">
							<label id="state-error-message-name" class="state-inline-label e-inline-label" style="display:none">Please enter state</label>
							<select class="form-control custom-select  select-option-country1 selectcountry" id="stateDet" name="stateDet" onblur="popentryFirstformStateValidation()"  onchange="getcityData(this.value,'leadform');getcountryDet(this.value,'state')" required>
								<option value="">Select your State</option> 
																<option class="select-value" value="1">Andaman & Nicobar</option>
																<option class="select-value" value="2">Andhra Pradesh</option>
																<option class="select-value" value="3">Arunachal Pradesh</option>
																<option class="select-value" value="4">Assam</option>
																<option class="select-value" value="5">Bihar</option>
																<option class="select-value" value="6">Chandigarh</option>
																<option class="select-value" value="7">Chhattisgarh</option>
																<option class="select-value" value="8">Dadra & Nagar Haveli</option>
																<option class="select-value" value="9">Daman & Diu</option>
																<option class="select-value" value="10">Delhi / NCR</option>
																<option class="select-value" value="11">Goa</option>
																<option class="select-value" value="12">Gujarat</option>
																<option class="select-value" value="13">Haryana</option>
																<option class="select-value" value="14">Himachal Pradesh</option>
																<option class="select-value" value="15">Jammu & Kashmir</option>
																<option class="select-value" value="16">Jharkand</option>
																<option class="select-value" value="17">Karnataka</option>
																<option class="select-value" value="18">Kerala</option>
																<option class="select-value" value="19">Lakshwadeep</option>
																<option class="select-value" value="20">Madhya Pradesh</option>
																<option class="select-value" value="21">Maharashtra</option>
																<option class="select-value" value="22">Manipur</option>
																<option class="select-value" value="23">Meghalaya</option>
																<option class="select-value" value="24">Mizoram</option>
																<option class="select-value" value="25">Nagaland</option>
																<option class="select-value" value="26">Orissa</option>
																<option class="select-value" value="27">Pondicherry</option>
																<option class="select-value" value="28">Punjab</option>
																<option class="select-value" value="29">Rajasthan</option>
																<option class="select-value" value="30">Sikkim</option>
																<option class="select-value" value="31">Tamil Nadu</option>
																<option class="select-value" value="36">Telangana</option>
																<option class="select-value" value="32">Tripura</option>
																<option class="select-value" value="33">Uttar Pradesh</option>
																<option class="select-value" value="34">Uttarakhand</option>
																<option class="select-value" value="35">West Bengal</option>
															</select>
							</span>
						</div>
						<div class="pb-4 citydiv">
							<span id="citylist">
							<select class="form-control custom-select  select-option-country1 selectcountry" required>
							<option value=""> Select your City	</option> 
							</select>
							</span>
						</div>	
						<div class="pb-4">
							<button type="button" class="country-btn" onclick="CountryValidate()">Submit</button>
						</div>
				</form> 
	</div>
</div>


<!-- end -->

<!-- location popup start -->

<div id="locationPopup2" class="overlay">
	<div class="locationpopup2">
		<h2 class="popupheader">Select Location</h2>
		<span class="close" onclick='hideModel("#locationPopup2")'>&times;</span>
				<form action="#" method="post" name="locationpopupfrm2" class="locationfrm2">
							<div class="pb-4 countrydiv">
								<label id="country-error-message-name2" class="location-inline-label e-inline-label" style="display:none">Please enter country</label>
								<select class="form-control custom-select   select-option-country1 selectcountry" id="countryDet" name="countryDet" onchange="getstateData(this.value,'centerform');getcountryDet2(this.value,'country');" required>
									<option value=""> Select your Country	</option>
																			<option value="98" selected>India</option>
																			<option value="1" >Afghanistan</option>
																			<option value="2" >Albania</option>
																			<option value="3" >Algeria</option>
																			<option value="4" >American Samoa</option>
																			<option value="5" >Andorra</option>
																			<option value="6" >Angola</option>
																			<option value="7" >Anguilla</option>
																			<option value="8" >Antarctica</option>
																			<option value="9" >Antigua and Barbuda</option>
																			<option value="10" >Argentina</option>
																			<option value="11" >Armenia</option>
																			<option value="12" >Aruba</option>
																			<option value="13" >Australia</option>
																			<option value="14" >Austria</option>
																			<option value="15" >Azerbaijan</option>
																			<option value="16" >Bahamas</option>
																			<option value="17" >Bahrain</option>
																			<option value="18" >Bangladesh</option>
																			<option value="19" >Barbados</option>
																			<option value="20" >Belarus</option>
																			<option value="21" >Belgium</option>
																			<option value="22" >Belize</option>
																			<option value="23" >Benin</option>
																			<option value="24" >Bermuda</option>
																			<option value="25" >Bhutan</option>
																			<option value="26" >Bolivia</option>
																			<option value="27" >Bosnia and Herzegovina</option>
																			<option value="28" >Botswana</option>
																			<option value="29" >Bouvet Island</option>
																			<option value="30" >Brazil</option>
																			<option value="31" >British Indian Ocean Territory</option>
																			<option value="32" >British Virgin Islands</option>
																			<option value="33" >Brunei</option>
																			<option value="34" >Bulgaria</option>
																			<option value="35" >Burkina Faso</option>
																			<option value="36" >Burundi</option>
																			<option value="37" >Cambodia</option>
																			<option value="38" >Cameroon</option>
																			<option value="39" >Canada</option>
																			<option value="40" >Cape Verde</option>
																			<option value="41" >Cayman Islands</option>
																			<option value="42" >Central African Republic</option>
																			<option value="43" >Chad</option>
																			<option value="44" >Chile</option>
																			<option value="45" >China</option>
																			<option value="46" >Christmas Island</option>
																			<option value="47" >Cocos Islands</option>
																			<option value="48" >Colombia</option>
																			<option value="49" >Comoros</option>
																			<option value="50" >Congo</option>
																			<option value="51" >Cook Islands</option>
																			<option value="52" >Costa Rica</option>
																			<option value="53" >Croatia</option>
																			<option value="54" >Cuba</option>
																			<option value="55" >Cyprus</option>
																			<option value="56" >Czech Republic</option>
																			<option value="57" >Denmark</option>
																			<option value="58" >Djibouti</option>
																			<option value="59" >Dominica</option>
																			<option value="60" >Dominican Republic</option>
																			<option value="61" >East Timor</option>
																			<option value="62" >Ecuador</option>
																			<option value="63" >Egypt</option>
																			<option value="64" >El Salvador</option>
																			<option value="65" >Equatorial Guinea</option>
																			<option value="66" >Eritrea</option>
																			<option value="67" >Estonia</option>
																			<option value="68" >Ethiopia</option>
																			<option value="69" >Falkland Islands</option>
																			<option value="70" >Faroe Islands</option>
																			<option value="71" >Fiji</option>
																			<option value="72" >Finland</option>
																			<option value="73" >France</option>
																			<option value="74" >French Guiana</option>
																			<option value="75" >French Polynesia</option>
																			<option value="76" >French Southern Territories</option>
																			<option value="77" >Gabon</option>
																			<option value="78" >Gambia</option>
																			<option value="79" >Georgia</option>
																			<option value="80" >Germany</option>
																			<option value="81" >Ghana</option>
																			<option value="82" >Gibraltar</option>
																			<option value="83" >Greece</option>
																			<option value="84" >Greenland</option>
																			<option value="85" >Grenada</option>
																			<option value="86" >Guadeloupe</option>
																			<option value="87" >Guam</option>
																			<option value="88" >Guatemala</option>
																			<option value="89" >Guinea</option>
																			<option value="90" >Guinea-Bissau</option>
																			<option value="91" >Guyana</option>
																			<option value="92" >Haiti</option>
																			<option value="93" >Heard and McDonald Islands</option>
																			<option value="94" >Honduras</option>
																			<option value="95" >Hong Kong</option>
																			<option value="96" >Hungary</option>
																			<option value="97" >Iceland</option>
																			<option value="99" >Indonesia</option>
																			<option value="100" >Iran</option>
																			<option value="101" >Iraq</option>
																			<option value="102" >Ireland</option>
																			<option value="103" >Israel</option>
																			<option value="104" >Italy</option>
																			<option value="105" >Ivory Coast</option>
																			<option value="106" >Jamaica</option>
																			<option value="107" >Japan</option>
																			<option value="108" >Jordan</option>
																			<option value="109" >Kazakhstan</option>
																			<option value="110" >Kenya</option>
																			<option value="111" >Kiribati</option>
																			<option value="112" >Korea, North</option>
																			<option value="113" >Korea, South</option>
																			<option value="114" >Kuwait</option>
																			<option value="115" >Kyrgyzstan</option>
																			<option value="116" >Laos</option>
																			<option value="117" >Latvia</option>
																			<option value="118" >Lebanon</option>
																			<option value="119" >Lesotho</option>
																			<option value="120" >Liberia</option>
																			<option value="121" >Libya</option>
																			<option value="122" >Liechtenstein</option>
																			<option value="123" >Lithuania</option>
																			<option value="124" >Luxembourg</option>
																			<option value="125" >Macau</option>
																			<option value="126" >Macedonia</option>
																			<option value="127" >Madagascar</option>
																			<option value="128" >Malawi</option>
																			<option value="129" >Malaysia</option>
																			<option value="130" >Maldives</option>
																			<option value="131" >Mali</option>
																			<option value="132" >Malta</option>
																			<option value="133" >Marshall Islands</option>
																			<option value="134" >Martinique</option>
																			<option value="135" >Mauritania</option>
																			<option value="136" >Mauritius</option>
																			<option value="137" >Mayotte</option>
																			<option value="138" >Mexico</option>
																			<option value="139" >Micronesia, Federated States of</option>
																			<option value="140" >Moldova</option>
																			<option value="141" >Monaco</option>
																			<option value="142" >Mongolia</option>
																			<option value="143" >Montserrat</option>
																			<option value="144" >Morocco</option>
																			<option value="145" >Mozambique</option>
																			<option value="146" >Myanmar</option>
																			<option value="147" >Namibia</option>
																			<option value="148" >Nauru</option>
																			<option value="149" >Nepal</option>
																			<option value="150" >Netherlands</option>
																			<option value="151" >Netherlands Antilles</option>
																			<option value="152" >New Caledonia</option>
																			<option value="153" >New Zealand</option>
																			<option value="154" >Nicaragua</option>
																			<option value="155" >Niger</option>
																			<option value="156" >Nigeria</option>
																			<option value="157" >Niue</option>
																			<option value="158" >Norfolk Island</option>
																			<option value="159" >Northern Mariana Islands</option>
																			<option value="160" >Norway</option>
																			<option value="161" >Oman</option>
																			<option value="162" >Pakistan</option>
																			<option value="163" >Palau</option>
																			<option value="164" >Panama</option>
																			<option value="165" >Papua New Guinea</option>
																			<option value="166" >Paraguay</option>
																			<option value="167" >Peru</option>
																			<option value="168" >Philippines</option>
																			<option value="169" >Pitcairn Island</option>
																			<option value="170" >Poland</option>
																			<option value="171" >Portugal</option>
																			<option value="172" >Puerto Rico</option>
																			<option value="173" >Qatar</option>
																			<option value="174" >Reunion</option>
																			<option value="175" >Romania</option>
																			<option value="176" >Russia</option>
																			<option value="177" >Rwanda</option>
																			<option value="178" >S. Georgia and S. Sandwich Isls.</option>
																			<option value="179" >Saint Kitts & Nevis</option>
																			<option value="180" >Saint Lucia</option>
																			<option value="181" >Saint Vincent and The Grenadines</option>
																			<option value="182" >Samoa</option>
																			<option value="183" >San Marino</option>
																			<option value="184" >Sao Tome and Principe</option>
																			<option value="185" >Saudi Arabia</option>
																			<option value="186" >Senegal</option>
																			<option value="187" >Seychelles</option>
																			<option value="188" >Sierra Leone</option>
																			<option value="189" >Singapore</option>
																			<option value="190" >Slovakia</option>
																			<option value="191" >Slovenia</option>
																			<option value="192" >Somalia</option>
																			<option value="193" >South Africa</option>
																			<option value="194" >Spain</option>
																			<option value="195" >Sri Lanka</option>
																			<option value="196" >St. Helena</option>
																			<option value="197" >St. Pierre and Miquelon</option>
																			<option value="198" >Sudan</option>
																			<option value="199" >Suriname</option>
																			<option value="200" >Svalbard and Jan Mayen Islands</option>
																			<option value="201" >Swaziland</option>
																			<option value="202" >Sweden</option>
																			<option value="203" >Switzerland</option>
																			<option value="204" >Syria</option>
																			<option value="205" >Taiwan</option>
																			<option value="206" >Tajikistan</option>
																			<option value="207" >Tanzania</option>
																			<option value="208" >Thailand</option>
																			<option value="209" >Togo</option>
																			<option value="210" >Tokelau</option>
																			<option value="211" >Tonga</option>
																			<option value="212" >Trinidad and Tobago</option>
																			<option value="213" >Tunisia</option>
																			<option value="214" >Turkey</option>
																			<option value="215" >Turkmenistan</option>
																			<option value="216" >Turks and Caicos Islands</option>
																			<option value="217" >Tuvalu</option>
																			<option value="218" >Uganda</option>
																			<option value="219" >Ukraine</option>
																			<option value="220" >United Arab Emirates</option>
																			<option value="221" >United Kingdom</option>
																			<option value="222" >United States of America</option>
																			<option value="223" >Uruguay</option>
																			<option value="224" >Uzbekistan</option>
																			<option value="225" >Vanuatu</option>
																			<option value="226" >Vatican City</option>
																			<option value="227" >Venezuela</option>
																			<option value="228" >Vietnam</option>
																			<option value="229" >Virgin Islands</option>
																			<option value="230" >Wallis and Futuna Islands</option>
																			<option value="231" >Western Sahara</option>
																			<option value="232" >Yemen</option>
																			<option value="233" >Yugoslavia (Former)</option>
																			<option value="234" >Zaire</option>
																			<option value="235" >Zambia</option>
																			<option value="236" >Zimbabwe</option>
																			<option value="237" >DR Congo</option>
																</select>
						</div>
						
						<div class="pb-4 statediv">
							<span id="statelist2">
							<label id="state-error-message-name2" class="state-inline-label e-inline-label" style="display:none">Please enter state</label>
							<select class="form-control custom-select  select-option-country1 selectcountry" id="stateDet" name="stateDet" onblur="popentrSencondformStateValidation()" onchange="getcityData(this.value,'centerform');getcountryDet2(this.value,'state')" required>
									<option value=""> Select your State 	</option> 
																			<option class="select-value" value="1">Andaman & Nicobar</option>
																		<option class="select-value" value="2">Andhra Pradesh</option>
																		<option class="select-value" value="3">Arunachal Pradesh</option>
																		<option class="select-value" value="4">Assam</option>
																		<option class="select-value" value="5">Bihar</option>
																		<option class="select-value" value="6">Chandigarh</option>
																		<option class="select-value" value="7">Chhattisgarh</option>
																		<option class="select-value" value="8">Dadra & Nagar Haveli</option>
																		<option class="select-value" value="9">Daman & Diu</option>
																		<option class="select-value" value="10">Delhi / NCR</option>
																		<option class="select-value" value="11">Goa</option>
																		<option class="select-value" value="12">Gujarat</option>
																		<option class="select-value" value="13">Haryana</option>
																		<option class="select-value" value="14">Himachal Pradesh</option>
																		<option class="select-value" value="15">Jammu & Kashmir</option>
																		<option class="select-value" value="16">Jharkand</option>
																		<option class="select-value" value="17">Karnataka</option>
																		<option class="select-value" value="18">Kerala</option>
																		<option class="select-value" value="19">Lakshwadeep</option>
																		<option class="select-value" value="20">Madhya Pradesh</option>
																		<option class="select-value" value="21">Maharashtra</option>
																		<option class="select-value" value="22">Manipur</option>
																		<option class="select-value" value="23">Meghalaya</option>
																		<option class="select-value" value="24">Mizoram</option>
																		<option class="select-value" value="25">Nagaland</option>
																		<option class="select-value" value="26">Orissa</option>
																		<option class="select-value" value="27">Pondicherry</option>
																		<option class="select-value" value="28">Punjab</option>
																		<option class="select-value" value="29">Rajasthan</option>
																		<option class="select-value" value="30">Sikkim</option>
																		<option class="select-value" value="31">Tamil Nadu</option>
																		<option class="select-value" value="36">Telangana</option>
																		<option class="select-value" value="32">Tripura</option>
																		<option class="select-value" value="33">Uttar Pradesh</option>
																		<option class="select-value" value="34">Uttarakhand</option>
																		<option class="select-value" value="35">West Bengal</option>
															</select>
							</span>
						</div>
						<div class="pb-4 citydiv">
							<span id="citylist2">
							<select class="form-control custom-select  select-option-country1 selectcountry" required>
							<option value=""> Select your City	</option> 
							</select>
							</span>
						</div>	
						<div class="pb-4">
							<button type="button" class="country-btn" onclick="CountryValidate2();" >Submit</button>
						</div>
				</form> 
	</div>
</div>


<!-- end -->


<!-- Exitpopup Start -->
	<div id="ouibounce-modalsremove" class="container1" style="display: none;"> 
	<div class="underlay"></div>
	<div class="row">
	<div class="col-md-6 col-sm-5 col-xs-11 modals" style="background: #fff;border-radius: 7px;height: 83%;margin-top: 28px;position: relative;   max-width: 31%;border: 1px solid #ffcf71;">
	 
	<div style="position:absolute;top: 10px;right: 15px;">
	<button type="button" class="close" data-dismiss="modal" onclick="formpopuphide()">&times;</button> 
	</div>
	<input type="hidden" value="Exitpopup" id="getinv1"/>
	<div class="txt-center paddt15" style="font-size: 22px;color:#ba3e3e;font-style: italic;line-height: 23px;" > We understand <br/> your time is precious.</div>
	<div class="pt-2 txt-center" style="font-size: 15px;">Please provide below details and we will<br/>have our Relationship Manager call you shortly. </div>
	<div style="padding: 0px 14px 14px 14px;">	
	<form class="form-horizontal1 popentry-form"  name="popentryform" method="post" action="https://www.elitematrimony.com/?s=2">
	<div class="pt-4">
	<label id="error-message-name2" class="entery-popup-name" style="display:none">Please enter name</label>
	<input type="text" maxlength=40 name="name" placeholder="Your Name" class="form-control elite-input" id="entryname" style="background:#fff;color:#777;border: 1px solid #ddd;border: 1px solid #ddd; border-radius: 9px;     font-size: 15px;
    height: 40px;"/> 
	<!-- <div id="error-message-name2" style="display:none">Please enter name</div> -->
	</div>

	<div class="pt-4">
	<span class="elite-select"><select class="form-country" name="countryCode" id="countryCodeSelIDPopup" onchange="getCountryDropDownOnChange('countryCodeSelIDPopup');" onfocus="getCountryDropDownFocus('countryCodeSelIDPopup');" style="background-color:#fff !important;color:#777; width: 28%;border: 1px solid #ddd; border-radius: 9px;      font-size: 15px;
    height: 40px;"> 
	<optgroup id='country-optgroup-Frequently-Used' label='Top countries'> </optgroup><option data-text="Australia (+61)" data-value="+61"  value="61" >Australia (+61)</option><option data-text="India (+91)" data-value="+91"  value="91" >India (+91)</option><option data-text="Malaysia (+60)" data-value="+60"  value="60" >Malaysia (+60)</option><option data-text="New Zealand (+64)" data-value="+64"  value="64" >New Zealand (+64)</option><option data-text="Singapore (+65)" data-value="+65"  value="65" >Singapore (+65)</option><option data-text="United Arab Emirates (+971)" data-value="+971"  value="971" >United Arab Emirates (+971)</option><option data-text="United Kingdom (+44)" data-value="+44"  value="44" >United Kingdom (+44)</option><option data-text="United States of America (+1)" data-value="+1"  value="1" >United States of America (+1)</option><option data-text="Canada (+1)" data-value="+1"  value="1" >Canada (+1)</option><optgroup id='country-optgroup-More-Used' label='All countries'> </optgroup><option data-text="Afghanistan (+93)" data-value="+93"  value="93" >Afghanistan (+93)</option><option data-text="Albania (+355)" data-value="+355"  value="355" >Albania (+355)</option><option data-text="Algeria (+213)" data-value="+213"  value="213" >Algeria (+213)</option><option data-text="American Samoa (+684)" data-value="+684"  value="684" >American Samoa (+684)</option><option data-text="Andorra (+376)" data-value="+376"  value="376" >Andorra (+376)</option><option data-text="Angola (+244)" data-value="+244"  value="244" >Angola (+244)</option><option data-text="Anguilla (+1264)" data-value="+1264"  value="1264" >Anguilla (+1264)</option><option data-text="Antigua and Barbuda (+1268)" data-value="+1268"  value="1268" >Antigua and Barbuda (+1268)</option><option data-text="Argentine (+54)" data-value="+54"  value="54" >Argentine (+54)</option><option data-text="Armenia (+374)" data-value="+374"  value="374" >Armenia (+374)</option><option data-text="Aruba (+297)" data-value="+297"  value="297" >Aruba (+297)</option><option data-text="Ascension (+247)" data-value="+247"  value="247" >Ascension (+247)</option><option data-text="Australia (+61)" data-value="+61"  value="61" >Australia (+61)</option><option data-text="Austria (+43)" data-value="+43"  value="43" >Austria (+43)</option><option data-text="Azerbaijani (+994)" data-value="+994"  value="994" >Azerbaijani (+994)</option><option data-text="Bahamas (+1242)" data-value="+1242"  value="1242" >Bahamas (+1242)</option><option data-text="Bahrain (+973)" data-value="+973"  value="973" >Bahrain (+973)</option><option data-text="Bangladesh (+880)" data-value="+880"  value="880" >Bangladesh (+880)</option><option data-text="Barbados (+246)" data-value="+246"  value="246" >Barbados (+246)</option><option data-text="Belarus (+375)" data-value="+375"  value="375" >Belarus (+375)</option><option data-text="Belgium (+32)" data-value="+32"  value="32" >Belgium (+32)</option><option data-text="Belize (+501)" data-value="+501"  value="501" >Belize (+501)</option><option data-text="Benin (+229)" data-value="+229"  value="229" >Benin (+229)</option><option data-text="Bermuda (+441)" data-value="+441"  value="441" >Bermuda (+441)</option><option data-text="Bhutan (+975)" data-value="+975"  value="975" >Bhutan (+975)</option><option data-text="Bolivia (+591)" data-value="+591"  value="591" >Bolivia (+591)</option><option data-text="Bosnia and Herzegovina (+387)" data-value="+387"  value="387" >Bosnia and Herzegovina (+387)</option><option data-text="Botswana (+267)" data-value="+267"  value="267" >Botswana (+267)</option><option data-text="Brazil (+55)" data-value="+55"  value="55" >Brazil (+55)</option><option data-text="British Virgin Islands (+284)" data-value="+284"  value="284" >British Virgin Islands (+284)</option><option data-text="Brunei (+673)" data-value="+673"  value="673" >Brunei (+673)</option><option data-text="Bulgaria (+359)" data-value="+359"  value="359" >Bulgaria (+359)</option><option data-text="Burkina Faso (+226)" data-value="+226"  value="226" >Burkina Faso (+226)</option><option data-text="Burundi (+257)" data-value="+257"  value="257" >Burundi (+257)</option><option data-text="Cambodia (+855)" data-value="+855"  value="855" >Cambodia (+855)</option><option data-text="Cameroon (+237)" data-value="+237"  value="237" >Cameroon (+237)</option><option data-text="United States of America (+1)" data-value="+1"  value="1" >United States of America (+1)</option><option data-text="Cape Verde (+238)" data-value="+238"  value="238" >Cape Verde (+238)</option><option data-text="Cayman Islands (+345)" data-value="+345"  value="345" >Cayman Islands (+345)</option><option data-text="Central African Republic (+236)" data-value="+236"  value="236" >Central African Republic (+236)</option><option data-text="Chad (+235)" data-value="+235"  value="235" >Chad (+235)</option><option data-text="Chile (+56)" data-value="+56"  value="56" >Chile (+56)</option><option data-text="China (+86)" data-value="+86"  value="86" >China (+86)</option><option data-text="Colombia (+57)" data-value="+57"  value="57" >Colombia (+57)</option><option data-text="Comoros (+269)" data-value="+269"  value="269" >Comoros (+269)</option><option data-text="Congo (+242)" data-value="+242"  value="242" >Congo (+242)</option><option data-text="Cook Islands (+682)" data-value="+682"  value="682" >Cook Islands (+682)</option><option data-text="Costa Rica (+506)" data-value="+506"  value="506" >Costa Rica (+506)</option><option data-text="Croatia (+385)" data-value="+385"  value="385" >Croatia (+385)</option><option data-text="Cuba (+53)" data-value="+53"  value="53" >Cuba (+53)</option><option data-text="Cyprus (+357)" data-value="+357"  value="357" >Cyprus (+357)</option><option data-text="Czech Republic (+420)" data-value="+420"  value="420" >Czech Republic (+420)</option><option data-text="Denmark (+45)" data-value="+45"  value="45" >Denmark (+45)</option><option data-text="Djibouti (+253)" data-value="+253"  value="253" >Djibouti (+253)</option><option data-text="Dominica (+767)" data-value="+767"  value="767" >Dominica (+767)</option><option data-text="Dominican Republic (+809)" data-value="+809"  value="809" >Dominican Republic (+809)</option><option data-text="East Timor (+670)" data-value="+670"  value="670" >East Timor (+670)</option><option data-text="Ecuador (+593)" data-value="+593"  value="593" >Ecuador (+593)</option><option data-text="Egypt (+20)" data-value="+20"  value="20" >Egypt (+20)</option><option data-text="El Salvador (+503)" data-value="+503"  value="503" >El Salvador (+503)</option><option data-text="Equatorial Guinea (+240)" data-value="+240"  value="240" >Equatorial Guinea (+240)</option><option data-text="Eritrea (+291)" data-value="+291"  value="291" >Eritrea (+291)</option><option data-text="Estonia (+372)" data-value="+372"  value="372" >Estonia (+372)</option><option data-text="Ethiopia (+251)" data-value="+251"  value="251" >Ethiopia (+251)</option><option data-text="Falkland Islands (+500)" data-value="+500"  value="500" >Falkland Islands (+500)</option><option data-text="Faroe Islands (+298)" data-value="+298"  value="298" >Faroe Islands (+298)</option><option data-text="Fiji (+679)" data-value="+679"  value="679" >Fiji (+679)</option><option data-text="Finland (+358)" data-value="+358"  value="358" >Finland (+358)</option><option data-text="France (+33)" data-value="+33"  value="33" >France (+33)</option><option data-text="French Guiana (+594)" data-value="+594"  value="594" >French Guiana (+594)</option><option data-text="French Polynesia (+689)" data-value="+689"  value="689" >French Polynesia (+689)</option><option data-text="Gabonese (+241)" data-value="+241"  value="241" >Gabonese (+241)</option><option data-text="Gambia (+220)" data-value="+220"  value="220" >Gambia (+220)</option><option data-text="Georgia (+995)" data-value="+995"  value="995" >Georgia (+995)</option><option data-text="Germany (+49)" data-value="+49"  value="49" >Germany (+49)</option><option data-text="Ghana (+233)" data-value="+233"  value="233" >Ghana (+233)</option><option data-text="Gibraltar (+350)" data-value="+350"  value="350" >Gibraltar (+350)</option><option data-text="Greece (+30)" data-value="+30"  value="30" >Greece (+30)</option><option data-text="Greenland (+299)" data-value="+299"  value="299" >Greenland (+299)</option><option data-text="Grenada (+473)" data-value="+473"  value="473" >Grenada (+473)</option><option data-text="Guadeloupe (+590)" data-value="+590"  value="590" >Guadeloupe (+590)</option><option data-text="Guam (+671)" data-value="+671"  value="671" >Guam (+671)</option><option data-text="Guatemala (+502)" data-value="+502"  value="502" >Guatemala (+502)</option><option data-text="Guinea (+224)" data-value="+224"  value="224" >Guinea (+224)</option><option data-text="Guinea-Bissau (+245)" data-value="+245"  value="245" >Guinea-Bissau (+245)</option><option data-text="Guyana (+592)" data-value="+592"  value="592" >Guyana (+592)</option><option data-text="Haiti (+509)" data-value="+509"  value="509" >Haiti (+509)</option><option data-text="Honduras (+504)" data-value="+504"  value="504" >Honduras (+504)</option><option data-text="HongKong (+852)" data-value="+852"  value="852" >HongKong (+852)</option><option data-text="Hungary (+36)" data-value="+36"  value="36" >Hungary (+36)</option><option data-text="Iceland (+354)" data-value="+354"  value="354" >Iceland (+354)</option><option data-text="India (+91)" data-value="+91"  value="91" Selected>India (+91)</option><option data-text="Indonesia (+62)" data-value="+62"  value="62" >Indonesia (+62)</option><option data-text="Iran (+98)" data-value="+98"  value="98" >Iran (+98)</option><option data-text="Iraq (+964)" data-value="+964"  value="964" >Iraq (+964)</option><option data-text="Ireland (+353)" data-value="+353"  value="353" >Ireland (+353)</option><option data-text="Israel (+972)" data-value="+972"  value="972" >Israel (+972)</option><option data-text="Italy (+39)" data-value="+39"  value="39" >Italy (+39)</option><option data-text="Jamaica (+876)" data-value="+876"  value="876" >Jamaica (+876)</option><option data-text="Japan (+81)" data-value="+81"  value="81" >Japan (+81)</option><option data-text="Jordan (+962)" data-value="+962"  value="962" >Jordan (+962)</option><option data-text="Kenya (+254)" data-value="+254"  value="254" >Kenya (+254)</option><option data-text="Kiribati (+686)" data-value="+686"  value="686" >Kiribati (+686)</option><option data-text="Korea (+82)" data-value="+82"  value="82" >Korea (+82)</option><option data-text="Kuwait (+965)" data-value="+965"  value="965" >Kuwait (+965)</option><option data-text="Kyrgyz (+996)" data-value="+996"  value="996" >Kyrgyz (+996)</option><option data-text="Laos (+856)" data-value="+856"  value="856" >Laos (+856)</option><option data-text="Latvia (+371)" data-value="+371"  value="371" >Latvia (+371)</option><option data-text="Lebanon (+961)" data-value="+961"  value="961" >Lebanon (+961)</option><option data-text="Lesotho (Kingdom of) (+266)" data-value="+266"  value="266" >Lesotho (Kingdom of) (+266)</option><option data-text="Liberia (+231)" data-value="+231"  value="231" >Liberia (+231)</option><option data-text="Libya (+218)" data-value="+218"  value="218" >Libya (+218)</option><option data-text="Liechtenstein (+423)" data-value="+423"  value="423" >Liechtenstein (+423)</option><option data-text="Lithuania (+370)" data-value="+370"  value="370" >Lithuania (+370)</option><option data-text="Luxembourg (+352)" data-value="+352"  value="352" >Luxembourg (+352)</option><option data-text="Macau (+853)" data-value="+853"  value="853" >Macau (+853)</option><option data-text="Madagascar (+261)" data-value="+261"  value="261" >Madagascar (+261)</option><option data-text="Malawi (+265)" data-value="+265"  value="265" >Malawi (+265)</option><option data-text="Malaysia (+60)" data-value="+60"  value="60" >Malaysia (+60)</option><option data-text="Maldives (+960)" data-value="+960"  value="960" >Maldives (+960)</option><option data-text="Mali (+223)" data-value="+223"  value="223" >Mali (+223)</option><option data-text="Malta (+356)" data-value="+356"  value="356" >Malta (+356)</option><option data-text="Marshall Islands (+692)" data-value="+692"  value="692" >Marshall Islands (+692)</option><option data-text="Martinique (+596)" data-value="+596"  value="596" >Martinique (+596)</option><option data-text="Mauritania (+222)" data-value="+222"  value="222" >Mauritania (+222)</option><option data-text="Mauritius (+230)" data-value="+230"  value="230" >Mauritius (+230)</option><option data-text="Mexico (+52)" data-value="+52"  value="52" >Mexico (+52)</option><option data-text="Micronesia (+691)" data-value="+691"  value="691" >Micronesia (+691)</option><option data-text="Moldova (+373)" data-value="+373"  value="373" >Moldova (+373)</option><option data-text="Monaco (+377)" data-value="+377"  value="377" >Monaco (+377)</option><option data-text="Mongolia (+976)" data-value="+976"  value="976" >Mongolia (+976)</option><option data-text="Montserrat (+664)" data-value="+664"  value="664" >Montserrat (+664)</option><option data-text="Morocco (+212)" data-value="+212"  value="212" >Morocco (+212)</option><option data-text="Mozambique (+258)" data-value="+258"  value="258" >Mozambique (+258)</option><option data-text="Myanmar (+95)" data-value="+95"  value="95" >Myanmar (+95)</option><option data-text="Namibia (+264)" data-value="+264"  value="264" >Namibia (+264)</option><option data-text="Nauru (+674)" data-value="+674"  value="674" >Nauru (+674)</option><option data-text="Nepal (+977)" data-value="+977"  value="977" >Nepal (+977)</option><option data-text="Netherlands (+31)" data-value="+31"  value="31" >Netherlands (+31)</option><option data-text="Netherlands Antilles (+599)" data-value="+599"  value="599" >Netherlands Antilles (+599)</option><option data-text="New Caledonia (+687)" data-value="+687"  value="687" >New Caledonia (+687)</option><option data-text="New Zealand (+64)" data-value="+64"  value="64" >New Zealand (+64)</option><option data-text="Nicaragua (+505)" data-value="+505"  value="505" >Nicaragua (+505)</option><option data-text="Niger (+227)" data-value="+227"  value="227" >Niger (+227)</option><option data-text="Nigeria (+234)" data-value="+234"  value="234" >Nigeria (+234)</option><option data-text="Niue (+683)" data-value="+683"  value="683" >Niue (+683)</option><option data-text="Northern Mariana Islands (+1670)" data-value="+1670"  value="1670" >Northern Mariana Islands (+1670)</option><option data-text="Norway (+47)" data-value="+47"  value="47" >Norway (+47)</option><option data-text="Oman (+968)" data-value="+968"  value="968" >Oman (+968)</option><option data-text="Palau (+680)" data-value="+680"  value="680" >Palau (+680)</option><option data-text="Panama (+507)" data-value="+507"  value="507" >Panama (+507)</option><option data-text="Papua New Guinea (+675)" data-value="+675"  value="675" >Papua New Guinea (+675)</option><option data-text="Paraguay (+595)" data-value="+595"  value="595" >Paraguay (+595)</option><option data-text="Peru (+51)" data-value="+51"  value="51" >Peru (+51)</option><option data-text="Philippines (+63)" data-value="+63"  value="63" >Philippines (+63)</option><option data-text="Poland (+48)" data-value="+48"  value="48" >Poland (+48)</option><option data-text="Portugal (+351)" data-value="+351"  value="351" >Portugal (+351)</option><option data-text="Puerto Rico (+787)" data-value="+787"  value="787" >Puerto Rico (+787)</option><option data-text="Qatar (+974)" data-value="+974"  value="974" >Qatar (+974)</option><option data-text="Reunion (+262)" data-value="+262"  value="262" >Reunion (+262)</option><option data-text="Romania (+40)" data-value="+40"  value="40" >Romania (+40)</option><option data-text="Russian (+7)" data-value="+7"  value="7" >Russian (+7)</option><option data-text="Rwandese (+250)" data-value="+250"  value="250" >Rwandese (+250)</option><option data-text="Saint Helena (+290)" data-value="+290"  value="290" >Saint Helena (+290)</option><option data-text="Saint Kitts & Nevis (+869)" data-value="+869"  value="869" >Saint Kitts & Nevis (+869)</option><option data-text="Saint Lucia (+758)" data-value="+758"  value="758" >Saint Lucia (+758)</option><option data-text="Saint Vincent and the Grenadines (+784)" data-value="+784"  value="784" >Saint Vincent and the Grenadines (+784)</option><option data-text="Samoa (+685)" data-value="+685"  value="685" >Samoa (+685)</option><option data-text="San Marino (+378)" data-value="+378"  value="378" >San Marino (+378)</option><option data-text="Sao Tome and Principe (+239)" data-value="+239"  value="239" >Sao Tome and Principe (+239)</option><option data-text="Saudi Arabia (+966)" data-value="+966"  value="966" >Saudi Arabia (+966)</option><option data-text="Senegal (+221)" data-value="+221"  value="221" >Senegal (+221)</option><option data-text="Seychelles (+248)" data-value="+248"  value="248" >Seychelles (+248)</option><option data-text="Sierra Leone (+232)" data-value="+232"  value="232" >Sierra Leone (+232)</option><option data-text="Singapore (+65)" data-value="+65"  value="65" >Singapore (+65)</option><option data-text="Slovakia (+421)" data-value="+421"  value="421" >Slovakia (+421)</option><option data-text="Slovenia (+386)" data-value="+386"  value="386" >Slovenia (+386)</option><option data-text="Somalia (+252)" data-value="+252"  value="252" >Somalia (+252)</option><option data-text="South Africa (+27)" data-value="+27"  value="27" >South Africa (+27)</option><option data-text="Spain (+34)" data-value="+34"  value="34" >Spain (+34)</option><option data-text="Sri Lanka (+94)" data-value="+94"  value="94" >Sri Lanka (+94)</option><option data-text="Sudan (+249)" data-value="+249"  value="249" >Sudan (+249)</option><option data-text="Suriname (+597)" data-value="+597"  value="597" >Suriname (+597)</option><option data-text="Swaziland (+268)" data-value="+268"  value="268" >Swaziland (+268)</option><option data-text="Sweden (+46)" data-value="+46"  value="46" >Sweden (+46)</option><option data-text="Switzerland (+41)" data-value="+41"  value="41" >Switzerland (+41)</option><option data-text="Syria (+963)" data-value="+963"  value="963" >Syria (+963)</option><option data-text="Taiwan (+886)" data-value="+886"  value="886" >Taiwan (+886)</option><option data-text="Tajikistan (+992)" data-value="+992"  value="992" >Tajikistan (+992)</option><option data-text="Tanzania (+255)" data-value="+255"  value="255" >Tanzania (+255)</option><option data-text="Thailand (+66)" data-value="+66"  value="66" >Thailand (+66)</option><option data-text="Togolese (+228)" data-value="+228"  value="228" >Togolese (+228)</option><option data-text="Tokelau (+690)" data-value="+690"  value="690" >Tokelau (+690)</option><option data-text="Tonga (+676)" data-value="+676"  value="676" >Tonga (+676)</option><option data-text="Trinidad and Tobago (+868)" data-value="+868"  value="868" >Trinidad and Tobago (+868)</option><option data-text="Tunisia (+216)" data-value="+216"  value="216" >Tunisia (+216)</option><option data-text="Turkey (+90)" data-value="+90"  value="90" >Turkey (+90)</option><option data-text="Turkmenistan (+993)" data-value="+993"  value="993" >Turkmenistan (+993)</option><option data-text="Turks and Caicos Islands (+649)" data-value="+649"  value="649" >Turks and Caicos Islands (+649)</option><option data-text="Tuvalu (+688)" data-value="+688"  value="688" >Tuvalu (+688)</option><option data-text="Uganda (+256)" data-value="+256"  value="256" >Uganda (+256)</option><option data-text="Ukraine (+380)" data-value="+380"  value="380" >Ukraine (+380)</option><option data-text="United Arab Emirates (+971)" data-value="+971"  value="971" >United Arab Emirates (+971)</option><option data-text="United Kingdom (+44)" data-value="+44"  value="44" >United Kingdom (+44)</option><option data-text="Uruguay (+598)" data-value="+598"  value="598" >Uruguay (+598)</option><option data-text="Uzbekistan (+998)" data-value="+998"  value="998" >Uzbekistan (+998)</option><option data-text="Vanuatu (+678)" data-value="+678"  value="678" >Vanuatu (+678)</option><option data-text="Vatican City (+379)" data-value="+379"  value="379" >Vatican City (+379)</option><option data-text="Venezuela (+58)" data-value="+58"  value="58" >Venezuela (+58)</option><option data-text="VietNam (+84)" data-value="+84"  value="84" >VietNam (+84)</option><option data-text="Wallis and Futuna Islands (+681)" data-value="+681"  value="681" >Wallis and Futuna Islands (+681)</option><option data-text="Yemen (+967)" data-value="+967"  value="967" >Yemen (+967)</option><option data-text="Yugoslavia (+381)" data-value="+381"  value="381" >Yugoslavia (+381)</option><option data-text="Zambia (+260)" data-value="+260"  value="260" >Zambia (+260)</option><option data-text="Zimbabwe (+263)" data-value="+263"  value="263" >Zimbabwe (+263)</option>	</select></span>
	<label id="error-message-phone2" class="entery-popup-phoneno" style="display:none">Please enter phone number</label>
	<input type="text" placeholder="Mobile Number" class="form-control elite-input form-mobile" id="entryphoneno" name="phoneNo" maxlength="15" value="" style="background:#fff;color:#777;border: 1px solid #ddd;width: 68%; border: 1px solid #ddd; border-radius: 9px;      font-size: 15px;
    height: 40px;"/> 
	<!-- <div id="error-message-phone2" style="display:none">Please enter phone number</div> -->
	<div class="clear"> </div>
	</div>
	<input type="hidden" id="recity" name="rcity" value="-" />
	<input type="hidden" value="English"  name="language"  id="lang">
	<input type="hidden" name="besttimetoreach"  value="10AM"   id="besttimetoreach"/>

	<input type="hidden" name="camsrcid" value="" id="camsrcid"/>

	<div>
	<div class="pt-4">
	<label id="error-message-email2" class="entery-popup-emailid" style="display:none">Please enter email id</label>
	<input type="text" name="emailId"  value="" placeholder="Email ID" class="form-control elite-input" id="entryemailId" style="background:#fff;color:#777;border: 1px solid #ddd;border: 1px solid #ddd; border-radius: 9px;     font-size: 15px;
    height: 40px;"/> 
	<div class="email-option-text-popup">(Optional)</div>
	</div>
		<div class="pt-4"> 
	<label id="error-message-country2" class="entery-pop-country" style="display:none">Please enter country</label>
	<select class="form-control custom-select  select-option-country1 selectcountry" style=" font-size:15px; height: 40px;" id="countryDet" name="countryDet" onchange="getstateData(this.value,'popupform');" required>
		<option value=""> Your Country	</option> 
		    		<option value="98"  selected>India</option>
		    		<option value="1"  >Afghanistan</option>
		    		<option value="2"  >Albania</option>
		    		<option value="3"  >Algeria</option>
		    		<option value="4"  >American Samoa</option>
		    		<option value="5"  >Andorra</option>
		    		<option value="6"  >Angola</option>
		    		<option value="7"  >Anguilla</option>
		    		<option value="8"  >Antarctica</option>
		    		<option value="9"  >Antigua and Barbuda</option>
		    		<option value="10"  >Argentina</option>
		    		<option value="11"  >Armenia</option>
		    		<option value="12"  >Aruba</option>
		    		<option value="13"  >Australia</option>
		    		<option value="14"  >Austria</option>
		    		<option value="15"  >Azerbaijan</option>
		    		<option value="16"  >Bahamas</option>
		    		<option value="17"  >Bahrain</option>
		    		<option value="18"  >Bangladesh</option>
		    		<option value="19"  >Barbados</option>
		    		<option value="20"  >Belarus</option>
		    		<option value="21"  >Belgium</option>
		    		<option value="22"  >Belize</option>
		    		<option value="23"  >Benin</option>
		    		<option value="24"  >Bermuda</option>
		    		<option value="25"  >Bhutan</option>
		    		<option value="26"  >Bolivia</option>
		    		<option value="27"  >Bosnia and Herzegovina</option>
		    		<option value="28"  >Botswana</option>
		    		<option value="29"  >Bouvet Island</option>
		    		<option value="30"  >Brazil</option>
		    		<option value="31"  >British Indian Ocean Territory</option>
		    		<option value="32"  >British Virgin Islands</option>
		    		<option value="33"  >Brunei</option>
		    		<option value="34"  >Bulgaria</option>
		    		<option value="35"  >Burkina Faso</option>
		    		<option value="36"  >Burundi</option>
		    		<option value="37"  >Cambodia</option>
		    		<option value="38"  >Cameroon</option>
		    		<option value="39"  >Canada</option>
		    		<option value="40"  >Cape Verde</option>
		    		<option value="41"  >Cayman Islands</option>
		    		<option value="42"  >Central African Republic</option>
		    		<option value="43"  >Chad</option>
		    		<option value="44"  >Chile</option>
		    		<option value="45"  >China</option>
		    		<option value="46"  >Christmas Island</option>
		    		<option value="47"  >Cocos Islands</option>
		    		<option value="48"  >Colombia</option>
		    		<option value="49"  >Comoros</option>
		    		<option value="50"  >Congo</option>
		    		<option value="51"  >Cook Islands</option>
		    		<option value="52"  >Costa Rica</option>
		    		<option value="53"  >Croatia</option>
		    		<option value="54"  >Cuba</option>
		    		<option value="55"  >Cyprus</option>
		    		<option value="56"  >Czech Republic</option>
		    		<option value="57"  >Denmark</option>
		    		<option value="58"  >Djibouti</option>
		    		<option value="59"  >Dominica</option>
		    		<option value="60"  >Dominican Republic</option>
		    		<option value="61"  >East Timor</option>
		    		<option value="62"  >Ecuador</option>
		    		<option value="63"  >Egypt</option>
		    		<option value="64"  >El Salvador</option>
		    		<option value="65"  >Equatorial Guinea</option>
		    		<option value="66"  >Eritrea</option>
		    		<option value="67"  >Estonia</option>
		    		<option value="68"  >Ethiopia</option>
		    		<option value="69"  >Falkland Islands</option>
		    		<option value="70"  >Faroe Islands</option>
		    		<option value="71"  >Fiji</option>
		    		<option value="72"  >Finland</option>
		    		<option value="73"  >France</option>
		    		<option value="74"  >French Guiana</option>
		    		<option value="75"  >French Polynesia</option>
		    		<option value="76"  >French Southern Territories</option>
		    		<option value="77"  >Gabon</option>
		    		<option value="78"  >Gambia</option>
		    		<option value="79"  >Georgia</option>
		    		<option value="80"  >Germany</option>
		    		<option value="81"  >Ghana</option>
		    		<option value="82"  >Gibraltar</option>
		    		<option value="83"  >Greece</option>
		    		<option value="84"  >Greenland</option>
		    		<option value="85"  >Grenada</option>
		    		<option value="86"  >Guadeloupe</option>
		    		<option value="87"  >Guam</option>
		    		<option value="88"  >Guatemala</option>
		    		<option value="89"  >Guinea</option>
		    		<option value="90"  >Guinea-Bissau</option>
		    		<option value="91"  >Guyana</option>
		    		<option value="92"  >Haiti</option>
		    		<option value="93"  >Heard and McDonald Islands</option>
		    		<option value="94"  >Honduras</option>
		    		<option value="95"  >Hong Kong</option>
		    		<option value="96"  >Hungary</option>
		    		<option value="97"  >Iceland</option>
		    		<option value="99"  >Indonesia</option>
		    		<option value="100"  >Iran</option>
		    		<option value="101"  >Iraq</option>
		    		<option value="102"  >Ireland</option>
		    		<option value="103"  >Israel</option>
		    		<option value="104"  >Italy</option>
		    		<option value="105"  >Ivory Coast</option>
		    		<option value="106"  >Jamaica</option>
		    		<option value="107"  >Japan</option>
		    		<option value="108"  >Jordan</option>
		    		<option value="109"  >Kazakhstan</option>
		    		<option value="110"  >Kenya</option>
		    		<option value="111"  >Kiribati</option>
		    		<option value="112"  >Korea, North</option>
		    		<option value="113"  >Korea, South</option>
		    		<option value="114"  >Kuwait</option>
		    		<option value="115"  >Kyrgyzstan</option>
		    		<option value="116"  >Laos</option>
		    		<option value="117"  >Latvia</option>
		    		<option value="118"  >Lebanon</option>
		    		<option value="119"  >Lesotho</option>
		    		<option value="120"  >Liberia</option>
		    		<option value="121"  >Libya</option>
		    		<option value="122"  >Liechtenstein</option>
		    		<option value="123"  >Lithuania</option>
		    		<option value="124"  >Luxembourg</option>
		    		<option value="125"  >Macau</option>
		    		<option value="126"  >Macedonia</option>
		    		<option value="127"  >Madagascar</option>
		    		<option value="128"  >Malawi</option>
		    		<option value="129"  >Malaysia</option>
		    		<option value="130"  >Maldives</option>
		    		<option value="131"  >Mali</option>
		    		<option value="132"  >Malta</option>
		    		<option value="133"  >Marshall Islands</option>
		    		<option value="134"  >Martinique</option>
		    		<option value="135"  >Mauritania</option>
		    		<option value="136"  >Mauritius</option>
		    		<option value="137"  >Mayotte</option>
		    		<option value="138"  >Mexico</option>
		    		<option value="139"  >Micronesia, Federated States of</option>
		    		<option value="140"  >Moldova</option>
		    		<option value="141"  >Monaco</option>
		    		<option value="142"  >Mongolia</option>
		    		<option value="143"  >Montserrat</option>
		    		<option value="144"  >Morocco</option>
		    		<option value="145"  >Mozambique</option>
		    		<option value="146"  >Myanmar</option>
		    		<option value="147"  >Namibia</option>
		    		<option value="148"  >Nauru</option>
		    		<option value="149"  >Nepal</option>
		    		<option value="150"  >Netherlands</option>
		    		<option value="151"  >Netherlands Antilles</option>
		    		<option value="152"  >New Caledonia</option>
		    		<option value="153"  >New Zealand</option>
		    		<option value="154"  >Nicaragua</option>
		    		<option value="155"  >Niger</option>
		    		<option value="156"  >Nigeria</option>
		    		<option value="157"  >Niue</option>
		    		<option value="158"  >Norfolk Island</option>
		    		<option value="159"  >Northern Mariana Islands</option>
		    		<option value="160"  >Norway</option>
		    		<option value="161"  >Oman</option>
		    		<option value="162"  >Pakistan</option>
		    		<option value="163"  >Palau</option>
		    		<option value="164"  >Panama</option>
		    		<option value="165"  >Papua New Guinea</option>
		    		<option value="166"  >Paraguay</option>
		    		<option value="167"  >Peru</option>
		    		<option value="168"  >Philippines</option>
		    		<option value="169"  >Pitcairn Island</option>
		    		<option value="170"  >Poland</option>
		    		<option value="171"  >Portugal</option>
		    		<option value="172"  >Puerto Rico</option>
		    		<option value="173"  >Qatar</option>
		    		<option value="174"  >Reunion</option>
		    		<option value="175"  >Romania</option>
		    		<option value="176"  >Russia</option>
		    		<option value="177"  >Rwanda</option>
		    		<option value="178"  >S. Georgia and S. Sandwich Isls.</option>
		    		<option value="179"  >Saint Kitts & Nevis</option>
		    		<option value="180"  >Saint Lucia</option>
		    		<option value="181"  >Saint Vincent and The Grenadines</option>
		    		<option value="182"  >Samoa</option>
		    		<option value="183"  >San Marino</option>
		    		<option value="184"  >Sao Tome and Principe</option>
		    		<option value="185"  >Saudi Arabia</option>
		    		<option value="186"  >Senegal</option>
		    		<option value="187"  >Seychelles</option>
		    		<option value="188"  >Sierra Leone</option>
		    		<option value="189"  >Singapore</option>
		    		<option value="190"  >Slovakia</option>
		    		<option value="191"  >Slovenia</option>
		    		<option value="192"  >Somalia</option>
		    		<option value="193"  >South Africa</option>
		    		<option value="194"  >Spain</option>
		    		<option value="195"  >Sri Lanka</option>
		    		<option value="196"  >St. Helena</option>
		    		<option value="197"  >St. Pierre and Miquelon</option>
		    		<option value="198"  >Sudan</option>
		    		<option value="199"  >Suriname</option>
		    		<option value="200"  >Svalbard and Jan Mayen Islands</option>
		    		<option value="201"  >Swaziland</option>
		    		<option value="202"  >Sweden</option>
		    		<option value="203"  >Switzerland</option>
		    		<option value="204"  >Syria</option>
		    		<option value="205"  >Taiwan</option>
		    		<option value="206"  >Tajikistan</option>
		    		<option value="207"  >Tanzania</option>
		    		<option value="208"  >Thailand</option>
		    		<option value="209"  >Togo</option>
		    		<option value="210"  >Tokelau</option>
		    		<option value="211"  >Tonga</option>
		    		<option value="212"  >Trinidad and Tobago</option>
		    		<option value="213"  >Tunisia</option>
		    		<option value="214"  >Turkey</option>
		    		<option value="215"  >Turkmenistan</option>
		    		<option value="216"  >Turks and Caicos Islands</option>
		    		<option value="217"  >Tuvalu</option>
		    		<option value="218"  >Uganda</option>
		    		<option value="219"  >Ukraine</option>
		    		<option value="220"  >United Arab Emirates</option>
		    		<option value="221"  >United Kingdom</option>
		    		<option value="222"  >United States of America</option>
		    		<option value="223"  >Uruguay</option>
		    		<option value="224"  >Uzbekistan</option>
		    		<option value="225"  >Vanuatu</option>
		    		<option value="226"  >Vatican City</option>
		    		<option value="227"  >Venezuela</option>
		    		<option value="228"  >Vietnam</option>
		    		<option value="229"  >Virgin Islands</option>
		    		<option value="230"  >Wallis and Futuna Islands</option>
		    		<option value="231"  >Western Sahara</option>
		    		<option value="232"  >Yemen</option>
		    		<option value="233"  >Yugoslavia (Former)</option>
		    		<option value="234"  >Zaire</option>
		    		<option value="235"  >Zambia</option>
		    		<option value="236"  >Zimbabwe</option>
		    		<option value="237"  >DR Congo</option>
			</select> 
	</div>
	<div class="pt-4"> 
	<span id="statelist1">
	<label id="error-message-state2" class="entery-pop-state" style="display:none">Please enter state</label>
	<select class="form-control custom-select  select-option-country1 selectcountry" style=" font-size:15px; height: 40px;" id="stateDet" name="stateDet" onblur="popentryformStateValidation()"  onchange="getcityData(this.value,'popupform');" required>
	<option value=""> Your State</option> 
			<option class="select-value" value="1">Andaman & Nicobar</option>
				<option class="select-value" value="2">Andhra Pradesh</option>
				<option class="select-value" value="3">Arunachal Pradesh</option>
				<option class="select-value" value="4">Assam</option>
				<option class="select-value" value="5">Bihar</option>
				<option class="select-value" value="6">Chandigarh</option>
				<option class="select-value" value="7">Chhattisgarh</option>
				<option class="select-value" value="8">Dadra & Nagar Haveli</option>
				<option class="select-value" value="9">Daman & Diu</option>
				<option class="select-value" value="10">Delhi / NCR</option>
				<option class="select-value" value="11">Goa</option>
				<option class="select-value" value="12">Gujarat</option>
				<option class="select-value" value="13">Haryana</option>
				<option class="select-value" value="14">Himachal Pradesh</option>
				<option class="select-value" value="15">Jammu & Kashmir</option>
				<option class="select-value" value="16">Jharkand</option>
				<option class="select-value" value="17">Karnataka</option>
				<option class="select-value" value="18">Kerala</option>
				<option class="select-value" value="19">Lakshwadeep</option>
				<option class="select-value" value="20">Madhya Pradesh</option>
				<option class="select-value" value="21">Maharashtra</option>
				<option class="select-value" value="22">Manipur</option>
				<option class="select-value" value="23">Meghalaya</option>
				<option class="select-value" value="24">Mizoram</option>
				<option class="select-value" value="25">Nagaland</option>
				<option class="select-value" value="26">Orissa</option>
				<option class="select-value" value="27">Pondicherry</option>
				<option class="select-value" value="28">Punjab</option>
				<option class="select-value" value="29">Rajasthan</option>
				<option class="select-value" value="30">Sikkim</option>
				<option class="select-value" value="31">Tamil Nadu</option>
				<option class="select-value" value="36">Telangana</option>
				<option class="select-value" value="32">Tripura</option>
				<option class="select-value" value="33">Uttar Pradesh</option>
				<option class="select-value" value="34">Uttarakhand</option>
				<option class="select-value" value="35">West Bengal</option>
			</select>
	</span>
	</div>
	<div class="pt-4"> 
	<span id="citylist1">
	<label id="city-error-message-name1" class="entery-pop-city" style="display:none">Please enter city</label>
	<select class="form-control custom-select  select-option-country1 selectcountry" style=" font-size:15px; height: 40px;" id="cityselect2" name="cityoption2" required>
	<option value=""> Your City	</option> 
	</select>
	</span>
	</div>
		<input type=hidden name="getinvite1" value='getinvite1'>
	<input type="hidden" name="countryCodeDet" id='countryCodeDet' value='98'/>
	<iframe id="ga" scrolling="no" frameborder = 0 src="#" style="height:1px;">&nbsp;</iframe>
	<div class="btn-center"><button class="btn btn-register pull-center getbtn boldtxt smalltxt" type="button" value="submit" onclick="return popupValidation('getinvite1','index');" id="getinv1" style="width:70%;font-size: 15px;">
	<!-- <img src="revamp-images/elite-btn-img.png" class="mr-2 xs-none" alt="Elite Button"> -->
	Get Invited</button></div>
	</div>
	</form>

	<script>
	function getcountryDet(detLocation,locationval)
	{
		var countryDetchk = {"98":"India","1":"Afghanistan","2":"Albania","3":"Algeria","4":"American Samoa","5":"Andorra","6":"Angola","7":"Anguilla","8":"Antarctica","9":"Antigua and Barbuda","10":"Argentina","11":"Armenia","12":"Aruba","13":"Australia","14":"Austria","15":"Azerbaijan","16":"Bahamas","17":"Bahrain","18":"Bangladesh","19":"Barbados","20":"Belarus","21":"Belgium","22":"Belize","23":"Benin","24":"Bermuda","25":"Bhutan","26":"Bolivia","27":"Bosnia and Herzegovina","28":"Botswana","29":"Bouvet Island","30":"Brazil","31":"British Indian Ocean Territory","32":"British Virgin Islands","33":"Brunei","34":"Bulgaria","35":"Burkina Faso","36":"Burundi","37":"Cambodia","38":"Cameroon","39":"Canada","40":"Cape Verde","41":"Cayman Islands","42":"Central African Republic","43":"Chad","44":"Chile","45":"China","46":"Christmas Island","47":"Cocos Islands","48":"Colombia","49":"Comoros","50":"Congo","51":"Cook Islands","52":"Costa Rica","53":"Croatia","54":"Cuba","55":"Cyprus","56":"Czech Republic","57":"Denmark","58":"Djibouti","59":"Dominica","60":"Dominican Republic","61":"East Timor","62":"Ecuador","63":"Egypt","64":"El Salvador","65":"Equatorial Guinea","66":"Eritrea","67":"Estonia","68":"Ethiopia","69":"Falkland Islands","70":"Faroe Islands","71":"Fiji","72":"Finland","73":"France","74":"French Guiana","75":"French Polynesia","76":"French Southern Territories","77":"Gabon","78":"Gambia","79":"Georgia","80":"Germany","81":"Ghana","82":"Gibraltar","83":"Greece","84":"Greenland","85":"Grenada","86":"Guadeloupe","87":"Guam","88":"Guatemala","89":"Guinea","90":"Guinea-Bissau","91":"Guyana","92":"Haiti","93":"Heard and McDonald Islands","94":"Honduras","95":"Hong Kong","96":"Hungary","97":"Iceland","99":"Indonesia","100":"Iran","101":"Iraq","102":"Ireland","103":"Israel","104":"Italy","105":"Ivory Coast","106":"Jamaica","107":"Japan","108":"Jordan","109":"Kazakhstan","110":"Kenya","111":"Kiribati","112":"Korea, North","113":"Korea, South","114":"Kuwait","115":"Kyrgyzstan","116":"Laos","117":"Latvia","118":"Lebanon","119":"Lesotho","120":"Liberia","121":"Libya","122":"Liechtenstein","123":"Lithuania","124":"Luxembourg","125":"Macau","126":"Macedonia","127":"Madagascar","128":"Malawi","129":"Malaysia","130":"Maldives","131":"Mali","132":"Malta","133":"Marshall Islands","134":"Martinique","135":"Mauritania","136":"Mauritius","137":"Mayotte","138":"Mexico","139":"Micronesia, Federated States of","140":"Moldova","141":"Monaco","142":"Mongolia","143":"Montserrat","144":"Morocco","145":"Mozambique","146":"Myanmar","147":"Namibia","148":"Nauru","149":"Nepal","150":"Netherlands","151":"Netherlands Antilles","152":"New Caledonia","153":"New Zealand","154":"Nicaragua","155":"Niger","156":"Nigeria","157":"Niue","158":"Norfolk Island","159":"Northern Mariana Islands","160":"Norway","161":"Oman","162":"Pakistan","163":"Palau","164":"Panama","165":"Papua New Guinea","166":"Paraguay","167":"Peru","168":"Philippines","169":"Pitcairn Island","170":"Poland","171":"Portugal","172":"Puerto Rico","173":"Qatar","174":"Reunion","175":"Romania","176":"Russia","177":"Rwanda","178":"S. Georgia and S. Sandwich Isls.","179":"Saint Kitts & Nevis","180":"Saint Lucia","181":"Saint Vincent and The Grenadines","182":"Samoa","183":"San Marino","184":"Sao Tome and Principe","185":"Saudi Arabia","186":"Senegal","187":"Seychelles","188":"Sierra Leone","189":"Singapore","190":"Slovakia","191":"Slovenia","192":"Somalia","193":"South Africa","194":"Spain","195":"Sri Lanka","196":"St. Helena","197":"St. Pierre and Miquelon","198":"Sudan","199":"Suriname","200":"Svalbard and Jan Mayen Islands","201":"Swaziland","202":"Sweden","203":"Switzerland","204":"Syria","205":"Taiwan","206":"Tajikistan","207":"Tanzania","208":"Thailand","209":"Togo","210":"Tokelau","211":"Tonga","212":"Trinidad and Tobago","213":"Tunisia","214":"Turkey","215":"Turkmenistan","216":"Turks and Caicos Islands","217":"Tuvalu","218":"Uganda","219":"Ukraine","220":"United Arab Emirates","221":"United Kingdom","222":"United States of America","223":"Uruguay","224":"Uzbekistan","225":"Vanuatu","226":"Vatican City","227":"Venezuela","228":"Vietnam","229":"Virgin Islands","230":"Wallis and Futuna Islands","231":"Western Sahara","232":"Yemen","233":"Yugoslavia (Former)","234":"Zaire","235":"Zambia","236":"Zimbabwe","237":"DR Congo"};
		if(locationval == 'country')
		{
			document.getElementById("countryDet").value = detLocation;
			document.getElementById("locationDet").value = countryDetchk[detLocation];
		}

		if(locationval == 'state')
		{
			document.getElementById("stateDet").value = detLocation;
		}

		if(locationval == 'city')
		{
			document.getElementById("cityDet").value = detLocation;
		}

	}
	function getcountryDet2(detLocation,locationval)
	{
		var countryDetchk = {"98":"India","1":"Afghanistan","2":"Albania","3":"Algeria","4":"American Samoa","5":"Andorra","6":"Angola","7":"Anguilla","8":"Antarctica","9":"Antigua and Barbuda","10":"Argentina","11":"Armenia","12":"Aruba","13":"Australia","14":"Austria","15":"Azerbaijan","16":"Bahamas","17":"Bahrain","18":"Bangladesh","19":"Barbados","20":"Belarus","21":"Belgium","22":"Belize","23":"Benin","24":"Bermuda","25":"Bhutan","26":"Bolivia","27":"Bosnia and Herzegovina","28":"Botswana","29":"Bouvet Island","30":"Brazil","31":"British Indian Ocean Territory","32":"British Virgin Islands","33":"Brunei","34":"Bulgaria","35":"Burkina Faso","36":"Burundi","37":"Cambodia","38":"Cameroon","39":"Canada","40":"Cape Verde","41":"Cayman Islands","42":"Central African Republic","43":"Chad","44":"Chile","45":"China","46":"Christmas Island","47":"Cocos Islands","48":"Colombia","49":"Comoros","50":"Congo","51":"Cook Islands","52":"Costa Rica","53":"Croatia","54":"Cuba","55":"Cyprus","56":"Czech Republic","57":"Denmark","58":"Djibouti","59":"Dominica","60":"Dominican Republic","61":"East Timor","62":"Ecuador","63":"Egypt","64":"El Salvador","65":"Equatorial Guinea","66":"Eritrea","67":"Estonia","68":"Ethiopia","69":"Falkland Islands","70":"Faroe Islands","71":"Fiji","72":"Finland","73":"France","74":"French Guiana","75":"French Polynesia","76":"French Southern Territories","77":"Gabon","78":"Gambia","79":"Georgia","80":"Germany","81":"Ghana","82":"Gibraltar","83":"Greece","84":"Greenland","85":"Grenada","86":"Guadeloupe","87":"Guam","88":"Guatemala","89":"Guinea","90":"Guinea-Bissau","91":"Guyana","92":"Haiti","93":"Heard and McDonald Islands","94":"Honduras","95":"Hong Kong","96":"Hungary","97":"Iceland","99":"Indonesia","100":"Iran","101":"Iraq","102":"Ireland","103":"Israel","104":"Italy","105":"Ivory Coast","106":"Jamaica","107":"Japan","108":"Jordan","109":"Kazakhstan","110":"Kenya","111":"Kiribati","112":"Korea, North","113":"Korea, South","114":"Kuwait","115":"Kyrgyzstan","116":"Laos","117":"Latvia","118":"Lebanon","119":"Lesotho","120":"Liberia","121":"Libya","122":"Liechtenstein","123":"Lithuania","124":"Luxembourg","125":"Macau","126":"Macedonia","127":"Madagascar","128":"Malawi","129":"Malaysia","130":"Maldives","131":"Mali","132":"Malta","133":"Marshall Islands","134":"Martinique","135":"Mauritania","136":"Mauritius","137":"Mayotte","138":"Mexico","139":"Micronesia, Federated States of","140":"Moldova","141":"Monaco","142":"Mongolia","143":"Montserrat","144":"Morocco","145":"Mozambique","146":"Myanmar","147":"Namibia","148":"Nauru","149":"Nepal","150":"Netherlands","151":"Netherlands Antilles","152":"New Caledonia","153":"New Zealand","154":"Nicaragua","155":"Niger","156":"Nigeria","157":"Niue","158":"Norfolk Island","159":"Northern Mariana Islands","160":"Norway","161":"Oman","162":"Pakistan","163":"Palau","164":"Panama","165":"Papua New Guinea","166":"Paraguay","167":"Peru","168":"Philippines","169":"Pitcairn Island","170":"Poland","171":"Portugal","172":"Puerto Rico","173":"Qatar","174":"Reunion","175":"Romania","176":"Russia","177":"Rwanda","178":"S. Georgia and S. Sandwich Isls.","179":"Saint Kitts & Nevis","180":"Saint Lucia","181":"Saint Vincent and The Grenadines","182":"Samoa","183":"San Marino","184":"Sao Tome and Principe","185":"Saudi Arabia","186":"Senegal","187":"Seychelles","188":"Sierra Leone","189":"Singapore","190":"Slovakia","191":"Slovenia","192":"Somalia","193":"South Africa","194":"Spain","195":"Sri Lanka","196":"St. Helena","197":"St. Pierre and Miquelon","198":"Sudan","199":"Suriname","200":"Svalbard and Jan Mayen Islands","201":"Swaziland","202":"Sweden","203":"Switzerland","204":"Syria","205":"Taiwan","206":"Tajikistan","207":"Tanzania","208":"Thailand","209":"Togo","210":"Tokelau","211":"Tonga","212":"Trinidad and Tobago","213":"Tunisia","214":"Turkey","215":"Turkmenistan","216":"Turks and Caicos Islands","217":"Tuvalu","218":"Uganda","219":"Ukraine","220":"United Arab Emirates","221":"United Kingdom","222":"United States of America","223":"Uruguay","224":"Uzbekistan","225":"Vanuatu","226":"Vatican City","227":"Venezuela","228":"Vietnam","229":"Virgin Islands","230":"Wallis and Futuna Islands","231":"Western Sahara","232":"Yemen","233":"Yugoslavia (Former)","234":"Zaire","235":"Zambia","236":"Zimbabwe","237":"DR Congo"};
		if(locationval == 'country')
		{
			document.getElementById("countryDet2").value = detLocation;
			document.getElementById("locationDet2").value = countryDetchk[detLocation];
		}

		if(locationval == 'state')
		{
			document.getElementById("stateDet2").value = detLocation;
		}

		if(locationval == 'city')
		{
			document.getElementById("cityDet2").value = detLocation;
		}

	}
	function getstateData(countryData,pageType)
	{
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				if(countryData == 98)
				{
					if(pageType == 'leadform')
					{
						document.getElementById("statelist").innerHTML=xmlhttp.responseText;
					}else if(pageType == 'popupform'){
						document.getElementById("statelist1").innerHTML=xmlhttp.responseText;
					}else if(pageType == 'centerform'){
						document.getElementById("statelist2").innerHTML=xmlhttp.responseText;
					}
				}else{
					if(pageType == 'leadform')
					{
						document.getElementById("statelist").innerHTML="";
						document.getElementById("citylist").innerHTML="";
					}else if(pageType == 'popupform'){
						document.getElementById("statelist1").innerHTML="";
						document.getElementById("citylist1").innerHTML="";
					}else if(pageType == 'centerform'){
						document.getElementById("statelist2").innerHTML="";
						document.getElementById("citylist2").innerHTML="";
					}
				}
			}
		}
		xmlhttp.open("GET.html","getStateDetails0851.html?c_id="+countryData+"&pageType="+pageType,true);
		xmlhttp.send();
	}

	function getcityData(stageData,pageType)
	{
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				if(pageType == 'leadform')
				{
					document.getElementById("citylist").innerHTML=xmlhttp.responseText;
				}else if(pageType == 'popupform'){
					document.getElementById("citylist1").innerHTML=xmlhttp.responseText;
				}else if(pageType == 'centerform'){
					document.getElementById("citylist2").innerHTML=xmlhttp.responseText;
				}
				
			}
		}
		xmlhttp.open("GET.html","getCityDetails0153.html?s_id="+stageData+"&pageType="+pageType+"&topcity=1",true);
		xmlhttp.send();
	}
	function changeCityDet(stageData,pageType,topcity)
	{
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				if(topcity == 'no')
				{
					if(pageType == 'leadform')
					{
						document.getElementById("citylist").innerHTML=xmlhttp.responseText;
					}else if(pageType == 'popupform'){
						document.getElementById("citylist1").innerHTML=xmlhttp.responseText;
					}else if(pageType == 'centerform'){
						document.getElementById("citylist2").innerHTML=xmlhttp.responseText;
					}
				}
			}
		}
		xmlhttp.open("GET.html","getCityDetails0153.html?s_id="+stageData+"&pageType="+pageType+"&topcity=0",true);
		xmlhttp.send();
	}
	// if you want to use the 'fire' or 'disable' fn,
	// you need to save OuiBounce to an object
	  
	var _ouibounce = ouibounce(document.getElementById('ouibounce-modals'), {
	aggressive: true,
	timer: 0,
	callback: function() { 
	
	console.log('ouibounce fired!'); 
	 var subtrack1 = document.getElementById('getinv1').value;				
			ga('send', 'pageview');
			ga('send', 'event', {
			'eventCategory': 'Form',
			'eventAction': 'HP',
			'eventLabel': subtrack1
			}); 
	}
	});
 

	$('#ouibounce-modals .modals-close').on('click', function() {
	$('#ouibounce-modals').hide();
	});

	$('#ouibounce-modals .modals').on('click', function(e) {
	e.stopPropagation();
	});

		</script>
	</div>				        
	</div>
	</div>
	</div>
	<!-- Exitpoup End -->
	
	<!-- SS Modal Start -->
	<div class="modal fade" id="sspopupone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-width">
		<div class="modal-content">
		  <div class="modal-header">
			<div>
				<span class="ss-popup-profile-img"><img src="{{asset('frontend/revamp-images/elite-ss-left-1.png')}}" alt="Elite Success Story Image"></span>
				<span class="ss-popup-profile-text">Souvick and Tania</span>
			</div>
			  <span aria-hidden="true" class="close" data-dismiss="modal" aria-label="Close">
				<img src="{{asset('frontend/revamp-images/ss-popup-close.svg')}}" alt="Close Icon" class="ss-popup-close">
			  </span>
		  </div>
		  <div class="modal-body">
			<div>Finding a partner who fit both Souvick's personal preferences and his family's values was a top priority. Thankfully, Tania's profile on Elite Matrimony seemed to tick all the boxes! She possessed the educational background Souvick desired and came from a family-oriented background that resonated with his family. An added bonus? Their horoscopes perfectly matched, bringing a sense of ease and joy to both families.</div>
			<div class="ss-popup-paratext">After initial online communication and heartwarming virtual conversations, Souvick and Tania met in person. Their connection grew even stronger, leading to a happy marriage that celebrates both family traditions and modern love.
			<div class="ss-popup-paratext">- Matched by Utsav, Elite Relationship Manager</div>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
	
	<div class="modal fade" id="sspopuptwo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-width">
		<div class="modal-content">
		  <div class="modal-header">
			<div>
				<span class="ss-popup-profile-img"><img src="{{asset('frontend/revamp-images/elite-ss-left-2.png')}}" alt="Elite Success Story Image"></span>
				<span class="ss-popup-profile-text">Nikita and Indrajit</span>
			</div>
			  <span aria-hidden="true" class="close" data-dismiss="modal" aria-label="Close">
				<img src="{{asset('frontend/revamp-images/ss-popup-close.svg')}}" alt="Close Icon" class="ss-popup-close">
			  </span>
		  </div>
		  <div class="modal-body">
			<div>Nikita, a successful businesswoman from Kolkata, knew exactly what she was looking for in a partner – someone with a strong educational background, preferably from Kolkata, and who shared her desire for a lasting commitment. Elite Matrimony presented her with Indrajit's profile, and it seemed like a perfect match! Both Kolkata residents with impressive academic backgrounds, they also discovered their horoscopes beautifully aligned. </div>
			<div class="ss-popup-paratext">After connecting and feeling a strong initial spark, Nikita and Indrajit decided to take things further. Their successful marriage is a testament to the power of finding a partner who not only complements you professionally but also shares your values and aspirations.
			<div class="ss-popup-paratext">- Matched by Utsav, Elite Relationship Manager</div>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
	
	<div class="modal fade" id="sspopupthree" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-width">
		<div class="modal-content">
		  <div class="modal-header">
			<div>
				<span class="ss-popup-profile-img"><img src="{{asset('frontend/revamp-images/elite-ss-left-3.png')}}" alt="Elite Success Story Image"></span>
				<span class="ss-popup-profile-text">Prasenjit and Samrajni</span>
			</div>
			  <span aria-hidden="true" class="close" data-dismiss="modal" aria-label="Close">
				<img src="{{asset('frontend/revamp-images/ss-popup-close.svg')}}" alt="Close Icon" class="ss-popup-close">
			  </span>
		  </div>
		  <div class="modal-body">
			<div>Prasenjit, looking for a partner with similar values and goals, found himself connected with Samrajni through Elite Matrimony's matchmaking services. After reviewing profiles and getting to know each other a bit online, they discovered a shared sense of humor and a deep appreciation for family.</div>
			<div class="ss-popup-paratext">Their conversations on Skype blossomed, filled with laughter and genuine connection. With the support of their families, Prasenjit and Samrajni are now happily planning their wedding, excited to embark on their life together.
			<div class="ss-popup-paratext">- Matched by Sutripti, Elite Relationship Manager</div>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
	
	<div class="modal fade" id="sspopupfour" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-width">
		<div class="modal-content">
		  <div class="modal-header">
			<div>
				<span class="ss-popup-profile-img"><img src="{{asset('frontend/revamp-images/elite-ss-left-4.png')}}" alt="Elite Success Story Image"></span>
				<span class="ss-popup-profile-text">Siddharth and Parnarshee</span>
			</div>
			  <span aria-hidden="true" class="close" data-dismiss="modal" aria-label="Close">
				<img src="{{asset('frontend/revamp-images/ss-popup-close.svg')}}" alt="Close Icon" class="ss-popup-close">
			  </span>
		  </div>
		  <div class="modal-body">
			<div>Siddharth's family, established in business, sought a bride who shared their background and was open to relocating to Kolkata. Elite Matrimony's Relationship Manager meticulously searched their database and discovered Parnarshee's profile, perfectly matching their requirements. She not only hailed from a business family but also expressed a willingness to move.</div>
			<div class="ss-popup-paratext">After connecting online, Siddharth and Parnarshee discovered a strong connection, their conversations filled with shared goals and aspirations. Their successful marriage showcases the importance of finding a partner who aligns with your life plans and complements your personal and professional ambitions.
			<div class="ss-popup-paratext">- Matched by Utsav, Elite Relationship Manager</div>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
	
	<div class="modal fade" id="sspopupfive" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-width">
		<div class="modal-content">
		  <div class="modal-header">
			<div>
				<span class="ss-popup-profile-img"><img src="{{asset('frontend/revamp-images/elite-ss-left-5.png')}}" alt="Elite Success Story Image"></span>
				<span class="ss-popup-profile-text">Anurag and Anuradha</span>
			</div>
			  <span aria-hidden="true" class="close" data-dismiss="modal" aria-label="Close">
				<img src="{{asset('frontend/revamp-images/ss-popup-close.svg')}}" alt="Close Icon" class="ss-popup-close">
			  </span>
		  </div>
		  <div class="modal-body">
			<div>Finding someone who respected tradition and shared her family's values was important to Anuradha. The Relationship Manager at Elite Matrimony understood this and presented her with Anurag's profile. Anurag's respect for tradition and his similar outlook on life resonated deeply with Anuradha</div>
			<div class="ss-popup-paratext">As they began talking, they discovered a beautiful connection built on shared beliefs and a deep appreciation for family. Their marriage is a beautiful example of how love can blossom when hearts and minds are aligned in their values and respect for tradition.
			<div class="ss-popup-paratext">- Matched by Sutripti, Elite Relationship Manager</div>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
	
	<div class="modal fade" id="sspopupsix" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-width">
		<div class="modal-content">
		  <div class="modal-header">
			<div>
				<span class="ss-popup-profile-img"><img src="{{asset('frontend/revamp-images/elite-ss-left-6.png')}}" alt="Elite Success Story Image"></span>
				<span class="ss-popup-profile-text">Krishna and Soumaya</span>
			</div>
			  <span aria-hidden="true" class="close" data-dismiss="modal" aria-label="Close">
				<img src="{{asset('frontend/revamp-images/ss-popup-close.svg')}}" alt="Close Icon" class="ss-popup-close">
			  </span>
		  </div>
		  <div class="modal-body">
			<div>Krishna joined Elite Matrimony hoping to find his ideal partner, someone who would complement his life and share his dreams. The Relationship Manager worked closely with Krishna and his family to understand their preferences and refine their search criteria. After careful consideration, they presented Krishna with Soumaya's profile, which seemed like a perfect fit!</div>
			<div class="ss-popup-paratext">They started talking and quickly realized they had a strong connection, filled with shared interests and a genuine spark. Krishna and Soumaya's story highlights the importance of patience and clear communication in finding a lasting love. Their successful marriage is a testament to the value of personalized guidance and support offered by Elite Matrimony's matchmaking services.
			<div class="ss-popup-paratext">- Matched by Ravi Parashar, Elite Relationship Manager</div>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
	<!-- SS Modal End -->
	
	 


	<script>

	// function popuphide() {
	// document.getElementById('exitpoup').style.display = 'none';
	// }
	function formpopuphide() {
	document.getElementById('ouibounce-modals').style.display = 'none';
	}
	function topformhide() {
	document.getElementById('thankyouId').style.display = 'none';
	}
	function bottomformhide() {
	document.getElementById('thankyouIdv').style.display = 'none';
	}
	</script>
	<!-- Thank you End -->
	
	
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="js/jquery-slim-min.js"></script> -->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.ui.js')}}"></script>
	<script src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
	
	<script>
	// Get the container element
	var btnContainer = document.getElementById("radio-btn");

	// Get all buttons with class="btn" inside the container
	var btns = btnContainer.getElementsByClassName("radiobox-width");

	// Loop through the buttons and add the active class to the current/clicked button
	for (var i = 0; i < btns.length; i++) {
	  btns[i].addEventListener("click", function() {
		var current = document.getElementsByClassName("active-radio");
		current[0].className = current[0].className.replace(" active-radio", "");
		this.className += " active-radio";
	  });
	}
	
	// Slider carousel  
		$('.carousel').carousel({
	  interval: false,
	});
	</script>
	
	
	<!-- Initialize Swiper -->
  <script>
    
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      <!-- centeredSlides: true, -->
	  centeredSlides: false,
      spaceBetween: 10,
      grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
	  
	 
    });
  </script>
  
   <script>
    var swiper = new Swiper('.swiper-container-cus', {
      slidesPerView: 'auto',
      <!-- centeredSlides: true, -->
	  centeredSlides: false,
      spaceBetween: 10,
      grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
	  
	  // Navigation arrows
	  navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	  },
    });
  </script>

  
  <!-- Read More And Less  -->
  <script>
	document.querySelectorAll(".showmore").forEach(function (showless) {
	showless.querySelector("a").addEventListener("click", function () {
	showless.classList.toggle("show");
	this.textContent = showless.classList.contains("show") ? "Show Less" : "Show More";
	});
	});
</script>
	
	

<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0019/1042.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<script>
function menustip() {
$(".menustrip").css("display","block");
		if($("#section1").hasClass('active')){
			$(".menustrip").css("display","none");
		}
}

// Country dropdown selection ========================

$('#countryCodeSelID option:selected').html($('#countryCodeSelID option:selected').attr('data-value')); // already changed onload
$('#countryCodeSelID1 option:selected').html($('#countryCodeSelID1 option:selected').attr('data-value')); // already changed onload
$('#countryCodeSelIDPopup option:selected').html($('#countryCodeSelIDPopup option:selected').attr('data-value')); // already changed onload
$('#memcountrycode option:selected').html($('#memcountrycode option:selected').attr('data-value')); // already changed onload

			function getCountryDropDownOnChange(id) {
				$('#'+id+' option').each(function () {
					$(this).html($(this).attr('data-text'));
					console.log("getCountryDropDownOnChange");
				});
				$('#'+id+' option:selected').html($('#'+id+' option:selected').attr('data-value'));
				if(id=='countryCodeSelID1'){
					$("#phoneno1").focus();
				}else{
					$("#phoneno").focus();
				}
			}

			function getCountryDropDownFocus(id) {
				$('#'+id+' option').each(function () {
					console.log("getCountryDropDownFocus");
					$(this).html($(this).attr('data-text'));
				});
			}


// Country dropdown selection ========================
</script>
 
		<script type="text/javascript">
		$("#ThanksTitle").css('display','none');
		$("#thankyouId").css('display','none');
		$("#thankyouIdv").css('display','none');
		$("#InviteFormPage").css('display','block');

		</script>	
	
<script type="text/javascript">	
    var _ss_track={"id":"889aa182-cddb-4317-a731-e147619f0418","events":[],"handlers":[],"alarms":[],"options":{}};
    (function() {
        var ss = document.createElement('script'); ss.type = 'text/javascript'; ss.async = true; ss.id = "__ss";
        ss.src = '../cdn-jp.gsecondscreen.com/static/ssclient.min.js';
        var fs = document.getElementsByTagName('script')[0]; fs.parentNode.insertBefore(ss, fs);
    })();
	function triggergamooga(arg){
		if(arg==1){	  
			_ss_track.handlers.push(['connect',function() {_ss_track.api.live_chat_click(); }]); 	  
		}		
	}

	
		function popgatrackclick() {	
		var subtrack1 = document.getElementById('getinv1').value;				
		//ga('create', 'UA-51830629-1', 'elitematrimony.com');
		ga('send', 'pageview');
		//console.log("jhdfhdjfhj");
		ga('send', 'event', {
		'eventCategory': 'Form',
		'eventAction': 'HP',
		'eventLabel': subtrack1+'Submitted'
		//'eventValue': subtrack
		});  
	}
	
</script>

<script type="text/javascript" src="../www.googleadservices.com/pagead/f.txt"></script>
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0019/1042.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '../connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '369794679836920']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script> 
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>

<script>
 
</script>

<!-- Menu Strip -->
<script>
    jQuery(function() {
        jQuery(window).scroll(function() {
            var sticky = jQuery('.site-header'),
                scroll = jQuery(window).scrollTop();

            if (scroll >= 50) sticky.addClass('header-fixed');
            else sticky.removeClass('header-fixed');
        });
    });
	
	jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
				
    });
$('.mob-panel,.mob-click').click(function(e){
	//console.log("hi"); 
	if($(e.target).hasClass('mob-click')){
	 return true;
	}else{
	return false;
	}
});

$(document).click(function(e) {
	//console.log(e.target.parent());
	$('.collapse').collapse('hide');

});

$(document).ready(function(){

	$('#openSidebarMenu').on('click', function(){
		var toggleMenu = $(this).attr('menuToggle');
		$(this).attr('menuToggle', toggleMenu=='false'?'true': 'false');
		if(toggleMenu=='false'){
			$('#menu-overlay-id').css('display', 'block');
		} else{
			$('#menu-overlay-id').css('display', 'none');
		}
	});

	$('#menu-overlay-id').on('click', function(){
		$('#openSidebarMenu').trigger('click');
	});

});

function auto_tab_input() {
	$(".code-inputs .form-control").keyup(function () {
		if (this.value.length == this.maxLength) {
			$(this).nextAll(".code-inputs .form-control:enabled:first").focus();
		}
	});
}
function auto_backspace() {
	$(".code-inputs .form-control").keyup(function (e) {
		if (e.keyCode == 8) {
			if ($(this).prev().length > 0) {
				$(this).prev("input").focus();
			}
		}
	});
}

$(document).ready(function () {
	auto_tab_input();
	auto_backspace();
});

$(function () {
	var currentDate = new Date();
	currentDate.setFullYear(new Date().getFullYear()-18);

	  $('.datepicker').datepicker({
		language: "es",
		autoclose: true,
		viewMode: "years",
		format: "dd-mm-yyyy",
	    endDate: "currentDate",
	    maxDate: currentDate
	  });
	});


</script>

<script>
    var swiper = new Swiper('.swiper-package-new11', {
      slidesPerView: 'auto',
      <!-- centeredSlides: true, -->
	  centeredSlides: false,
	  // slidesPerView: 2.9,
      // spaceBetween: 20,
	  
	    breakpoints: {  
    '320': {
      slidesPerView: 1.1,
      spaceBetween: 20,},
    '1200': {
      slidesPerView: 2.8,
      spaceBetween: 20, },
  },
	  
      grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
	  
	  // Navigation arrows
	  navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	  },
    });
  </script>

</body>

 </html>