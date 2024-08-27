jQuery(document).ready(function(){

    if($('input[name=packages]:checked').length>=0){
    
    
    
        if($('input[name="packages"]:checked').val()=='6monthsIN') 
            {
                
                $(".packageDetails").attr({
                    "value":'105600'                    
                }); 
                
            } else if ($('input[name="packages"]:checked').val()=='6monthsUS') 
            {
            
                 $(".packageDetails").attr({
                        "value":'2280'                  
                    });
            } else if ($('input[name="packages"]:checked').val()=='6monthsAED') 
            {
                
                  $(".packageDetails").attr({
                        "value":'8550'                  
                    });
            }
    
    
    }
        $('#subscribe').click(function(){ 
            if($('input[name=packages]:checked').length<=0)
            {
                alert("Please Select Any one of Packages");
                return false;
            }
                 
            $('#packageDet').submit();
                
        });
    
        jQuery("#countryCodeSel").change(function(){
            var state =  jQuery("#countryCodeSel").val();
            jQuery("#phoneno").prop("value","");
            if(state != 98){
                $("#location").css("display", "none");
            }
        
            txt = "";
            if(state==91){
                jQuery.ajax({
    
                    url: "//www.elitematrimony.com/arrayrevamp.php?state="+state,
                    type:'GET',
                    success: function(output_string){
            
                        if(output_string!= null && output_string!=0){
                            txt =output_string;                 
                            jQuery("#location").css("display", "block");
                            $('#ButtonHeight').css({
                                "padding-top":"0px"
                            });
                            jQuery("#phoneno").prop("value","");
                            jQuery("#residCity").html(txt);
                        } else {
                            jQuery("#location").css("display", "none");
                            $('#ButtonHeight').css();
                        }
             
             
                    }
                });
    
            }
        });
    
        $("#ematriid").blur(function(){
            var eliteid = $("#ematriid").val();
            $.ajax({
                type: "GET",
                url: "validId.php?eliteId="+eliteid,                
                success:function(msg){
                    if(msg == 0) {
                        alert("Invalid Elite Matriid");
                        $("#eliteInvalid").attr({
                            "value":'1'                 
                        }); 
                        return false;
                    } else if(msg == 1){
                        $("#eliteInvalid").attr({
                            "value":'0'                 
                        });
                        return false;
                    }
    
                }
            });
        });
    
        $('#memberId').click(function(){         
            if($(this).prop('checked')){
                $('#elitematriid').css({
                    "display":"block"
                });
               
            }else{
                $('#elitematriid').css({
                    "display":"none"
                });
              
            }
        });

        // validation
        $('.elite-invite-form .e-inline-label-div #elite-invite-fm-name').on('blur', function(){
            inviteFormNameValidation(false);
        });
         // Share-validation
         $('.share-form .elite-inline-label-div .elite-share-fm-name').on('blur', function(){
            shareFormNameValidation(false);
        });
         // Share-validation-Phone number
         $('.share-form .elite-inline-plabel-div ').on('blur', function(){
            phoneNumberShareValidation(false);
        });
            // Popupentry form name validation
    $('.popentry-form #entryname').on('blur', function () {
        popentryformNameValidation();
    });
    // Popupentry form numbeer validation
    $('.popentry-form #entryphoneno').on('blur', function () {
        popentryformNumberValidation();
    });
     // Popupentry form email validation
     $('.popentry-form #entryemailId').on('blur', function () {
        popentryformEmailValidation();
    });
      // Popupentry form country validation
      $('.popentry-form #countryDet').on('blur', function () {
        popentryformCountryValidation();
    });
    // Popupentry form state validation
    $('.popentry-form #stateDet, .popentry-form #stateselect2').on('blur', function () {
        popentryformStateValidation();
    });
      // Popupentry form city validation
      $('.popentry-form #cityDet, .popentry-form #cityselect2').on('blur', function () {
        popentryformCityValidation();
    });
     // Popupentry form country validation
     $('.locationfrm #countryDet').on('blur', function () {
        popentryFirstformCountryValidation();
    });
      // Popupentry form country validation
     $('.locationfrm2 #countryDet').on('blur', function () {
        popentrSencondformCountryValidation();
    });
});
    //GET INVITED VALIDATION
    function Validation(page,i){
    
        var frm = document.entryFrm;
            
        if(page == "sendinterest"){
                
            var nameval = document.getElementById('name'+i).value.trim();
            var nameRegex = /^[A-Za-z ]{3,40}$/;        
            if(nameval === ""){
                alert('Please enter name');
                document.getElementById('name'+i).focus();
                return false;               
            } else if(nameval.length<3){
                alert('Please enter alteast 3 characters');
                document.getElementById('name'+i).focus();
                return false;               
            } else if(nameval.length==0){
                alert('Please enter name');
                document.getElementById('name'+i).focus();
                return false;               
            }
    
            if(nameval.match(nameRegex)== null) {
                alert('Please enter valid name');
                document.getElementById('name'+i).focus();
                return false;           
            }
                
            var emailval = document.getElementById('email'+i).value.trim();
            
            if(emailval==="") {
                alert('Please enter email id');
                document.getElementById('email'+i).focus();
                return false;   
            }
            
            if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(emailval))) {
                alert('Please enter valid email id');               
                document.getElementById('email'+i).focus();
                return false;
            }
    
            var countrycodeval = document.getElementById('countryCodeSel'+i).value.trim();
    
            if(countrycodeval==="" || countrycodeval==="Country code") {
                alert('Please select country code');            
                document.getElementById('countryCodeSel'+i).focus();
                return false;
            }
            
            if(isNaN(countrycodeval)) {
                alert('Please select country code');
                document.getElementById('countryCodeSel'+i).focus();
                return false;
            }
    
            var phoneval = document.getElementById('phoneno'+i).value.trim();
    
            if(phoneval==="") {
                alert('Please enter phone number');
                document.getElementById('phoneno'+i).focus();
                return false;
            }
    
            if(isNaN(phoneval)) {
                alert('Please enter valid number');
                document.getElementById('phoneno'+i).focus();
                return false;
            }
    
            if(countrycodeval=='91'){
                if((phoneval.length < 10) || (phoneval.length > 10)) {
                    alert('Please enter 10 digit number');
                    document.getElementById('phoneno'+i).focus();
                    return false;
                }       
            }
            if(countrycodeval=='91'){       
                if(phoneval.value.charAt(0)>='6' && phoneval.value.charAt(0)<='9'){         
                            
                } else {                
                    alert('Please enter 10 digit number');
                    frm.phoneno.focus();
                    return false;   
                }
    
            }
            
    
            if(countrycodeval!='91'){
               if((phoneval.length < 6)) {
                    alert('Please enter valid number');
                    document.getElementById('phoneno'+i).focus();
                    return false;
                }
                else{
                var phonelen = phoneval.value.replace(/^[0]+/g,"");
                if((phonelen.length < 6)) {
                   alert('Please enter valid Minimum 6 digits phone number');
                    document.getElementById('phoneno'+i).focus();
                    return false;
                    }
                }
                
    }
            
            var besttimeval = document.getElementById('besttime'+i).value.trim();
            var alphanumeric = /^[A-Za-z0-9 ]{3,20}$/;
            if(besttimeval=="" || besttimeval=="Eg: After 8 pm,Weekends-9 am to 7pm") {
                alert('Please enter best time to reach you. Example : 6 AM / Any Time');
                document.getElementById('besttime'+i).focus();
                return false;   
            } else if(besttimeval.match(alphanumeric)==null){
                alert('Please enter valid best time to reach you. Example : 6 AM / Any Time');
                document.getElementById('besttime'+i).focus();
                return false;   
            } 
    
            document.getElementById('sendinterest'+i).value=page;       
            document.getElementById('entryFrm'+i).submit();
        } 
    else if(page == "campaign"){
            
            var nameval = frm.name.value.trim();
            
            if(frm.name.value=="" || frm.name.value=="Your Name"){
                alert('Please enter name');
                frm.name.focus();
                return false;   
            } else if(frm.name.value.length<3){
                alert('Please enter alteast 3 characters');
                frm.name.focus();
                return false; 
            } else if(nameval.length==0){
                alert('Please enter name');
                frm.name.focus();
                return false;   
            }
        
            var nameRegex = /^[A-Za-z ]{3,40}$/;    
            if(frm.name.value.match(nameRegex)== null) {
                alert('Please enter valid name');
                frm.name.focus();
                return false;
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
            
    
            if(frm.phoneNo.value=="") {
                alert('Please enter phone number');
                frm.phoneNo.focus();
                return false;
            }
            
    
            if(isNaN(frm.phoneNo.value)) {
                alert('Please enter valid number');
                frm.phoneNo.focus();
                return false;
            }
            
         if(frm.countryCode.value=='91'){
            if((frm.phoneNo.value.length < 10) || (frm.phoneNo.value.length > 10)) {
                   alert('Please enter 10 digit number');
                    frm.phoneNo.focus();
                    return false;
                }
            
            }
            
             if(frm.countryCode.value!='91'){
               if((frm.phoneNo.value.length < 6)) {
                    alert('Please enter valid number');
                    frm.phoneNo.focus();
                    return false;
                }
                else{
                var phonelen = frm.phoneNo.value.replace(/^[0]+/g,"");
              if((phonelen.length < 6)) {
                   alert('Please enter valid Minimum 6 digits phone number');
                    frm.phoneNo.focus();
                    return false;
                    }
                }
        }
            
            
    
            if(frm.countryCode.value=='91'){        
                if(frm.phoneNo.value.charAt(0)>='6' && frm.phoneNo.value.charAt(0)<='9'){           
                            
                } else {                
                    alert('Please enter 10 digit number');
                    frm.phoneNo.focus();
                    return false;   
                }
    
            }
            
            if(frm.emailId.value=="" || frm.emailId.value=="Eg: abc@gmail.com") {
                alert('Please enter email id');
                frm.emailId.focus();
                return false;   
            }
            
            if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(frm.emailId.value))) {
                alert('Please enter valid email id');               
                frm.emailId.focus();
                return false;
            }               
    
            var alphanumeric = /^[A-Za-z0-9: ]{3,20}$/;
            if(frm.besttimetoreach.value=="" || frm.besttimetoreach.value=="Eg: After 8 pm,Weekends-9 am to 7pm") {
                alert('Please enter best time to reach you. Example : 6 AM / Any Time');
                frm.besttimetoreach.focus();
                return false;   
            } else if(frm.besttimetoreach.value.match(alphanumeric)==null){
                alert('Please enter valid best time to reach you. Example : 6 AM / Any Time');
                frm.besttimetoreach.focus();
                return false;   
            } 
            
    
            document.getElementById('Send').value=page;      
            document.getElementById('entryFrm').submit();
            return true;
    
            
        } else {
            var indexcount=i;
            var frm = document.eliteshareFrm;
            var nameval = frm.name.value.trim();
            //document.getElementById("error-message-name1").style.display = "none"; 
            //document.getElementById("error-message-phone1").style.display = "none"; 
			// document.getElementById("error-message-name1").classList.remove('error-border');
            
            if(!shareFormNameValidation(true)){
                return false;
            }
                
            // if(frm.towhom.value=='0') {
                // alert('Please select for whom you are seeking alliance');
                // frm.towhom.focus();
                // return false;   
            // }    
    
            // if(frm.emailId.value=="" || frm.emailId.value=="Eg: abc@gmail.com") {
                // alert('Please enter email id');
                // frm.emailId.focus();
                // return false;   
            // }
            /*var emaillengthcount = frm.emailId.value.length;
            if(emaillengthcount>0){
            if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(frm.emailId.value))) {
                alert('Please enter valid email id');               
                frm.emailId.focus();
                return false;
            }}*/
            
            
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
            
    
            if(!phoneNumberShareValidation())
            {
                return false;
            }
			
			/* Home Pages Email Validation Start */
			
            /* if (frm.emailId.value == "" || frm.emailId.value == "Eg: abc@gmail.com") {

                $('.share-form .elite-inline-plabel-div2 #email-error-message-name').text('Please enter email id');
                $('.share-form .elite-inline-plabel-div2 #email-error-message-name').css('display', 'inline-block');
                $('.share-form .elite-inline-plabel-div2 .share-email').addClass('err-txt-border');
                frm.emailId.focus();
                return false;
            }
            var emaillengthcount = frm.emailId.value.length;
            if (emaillengthcount > 0) {
                if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(frm.emailId.value))) {
                    //alert('Please enter valid email id');      
                    $('.share-form .elite-inline-plabel-div2 #email-error-message-name').text('Please enter valid email id');
                    $('.share-form .elite-inline-plabel-div2 #email-error-message-name').css('display', 'inline-block');
                    frm.emailId.focus();
                    return false;
                }
            } 
            $('.share-form .elite-inline-plabel-div2 #email-error-message-name').text('');
            $('.share-form .elite-inline-plabel-div2 .share-email').removeClass('err-txt-border'); */
			
			/* Home Pages Email Validation End */

        //NEW SCRIPT ADDED FOR COUNTRY STATE CITY
        if (frm.countryCodeDet.value == 98) 
        {
           
            /*if (frm.countryDet.value == "" || frm.locationDet.value == "") {
                
                $('.share-form .elite-inline-plabel-div3 #location-error-message-name').text('Please enter state');
                $('.share-form .elite-inline-plabel-div3 #location-error-message-name').css('display', 'inline-block');
                $('.share-form .elite-inline-plabel-div3 .share-location').addClass('err-txt-border');
                frm.locationDet.focus();
                return false;
            }else{*/
                if(frm.locationDet.value == "India")
                {
                    if (frm.stateDet.value == "") {
                    
                        $('.share-form .elite-inline-plabel-div3 #location-error-message-name').text('Please enter state');
                        $('.share-form .elite-inline-plabel-div3 #location-error-message-name').css('display', 'inline-block');
                        $('.share-form .elite-inline-plabel-div3 .share-location').addClass('err-txt-border');
                        frm.locationDet.focus();
                        return false;
                    }
                    if (frm.cityDet.value == "" || frm.cityDet.value == "no") {
                    
                        $('.share-form .elite-inline-plabel-div3 #location-error-message-name').text('Please enter city');
                        $('.share-form .elite-inline-plabel-div3 #location-error-message-name').css('display', 'inline-block');
                        $('.share-form .elite-inline-plabel-div3 .share-location').addClass('err-txt-border');
                        frm.locationDet.focus();
                        return false;
                    }
                }
            //}
            
        }  
        $('.share-form .elite-inline-plabel-div3 #location-error-message-name').text('');
        $('.share-form .elite-inline-plabel-div3 .share-location').removeClass('err-txt-border');
            
            
            if(frm.countryCode.value=='91'){
                var lengthVal = frm.rcity.value.trim();
                    
             if(indexcount!='index'){
                if(frm.rcity){ 
                    if(frm.rcity.value=='0' || frm.rcity.value=='' ) {
                        alert('Please enter location');     
                        frm.rcity.focus();
                        return false;   
                    } else if(lengthVal.length==0){
                        alert('Please enter location');     
                        frm.rcity.focus();
                        return false;   
    
                    } 
                    var alphanumeric = /^[A-Za-z ]{3,30}$/;
                    if(frm.rcity.value.match(alphanumeric)==null){
                        alert('Please enter valid location');
                        frm.rcity.focus();
                        return false;   
                    } 
                
                }
            }
         }
            
                
            
            if(frm.language.value=='0'){
                alert('Please select language')
                frm.language.focus();
                return false;
            }
            
             
            var alphanumeric = /^[A-Za-z0-9 ]{3,20}$/;
            if(frm.besttimetoreach.value=="" || frm.besttimetoreach.value=="Eg: After 8 pm,Weekends-9 am to 7pm") {
                alert('Please enter best time to reach you. Example : 6 AM / Any Time');
                frm.besttimetoreach.focus();
                return false;   
            } else if(frm.besttimetoreach.value.match(alphanumeric)==null){
                alert('Please enter valid best time to reach you. Example : 6 AM / Any Time');
                frm.besttimetoreach.focus();
                return false;   
            } 
              
                /*var date=new Date(); 
                var day=date.getDate();  
                var month=date.getMonth()+1;  
                var year=date.getFullYear();  
                var username=day+"/"+month+"/"+year;            
                var res = GetCookie(username)   
                
                if(res == null){
                var value = 1;
                }else if(res == 1){         
                var value = 2;
                }else{
                var value = 3;
                }
                if(res == 3){
                alert("Sorry you can't register more than three times in the same day");
                return false;           
                }
                setCookie(username,value)*/
      
            frm.getinvite.value=page;   
            document.eliteshareFrm.submit();
        }
            
        
            
    }
    
    //SUBSCRIBE PAGE VALIDATION
    function Validate(page){
        var frm = document.payment;     
    
        if($('#memberId').prop('checked')){ 
            var result = /^[a-z0-9\.;,:\s]{1,100}$/i.exec($('#ematriid').val());    
                
            if($('#ematriid').val()==''){
                alert('Please Enter Matriid');
                return false;
            } else if(result == null){
                alert('Please Enter Valid Matriid');
                return false;
    
            } else if($('#eliteInvalid').val()==1){
    
                alert("Invalid Elite MatriId");
                return false;
            }
        }
    
        if(frm.Name.value==""){
            alert("Please Enter Your Name");
            frm.Name.focus();
            return false;   
        }   
        var nameRegex = /^[a-zA-Z\s]+$/;
        if(frm.Name.value.match(nameRegex)== null) {
            alert("Please Enter Valid Name");
            return false;
        }
    
            
        if(frm.countryCode.value=='' || frm.countryCode.value=="Country code" ){
            alert("Please Select The Country");
            frm.countryCode.focus();
            return false;
        }
        var y = frm.mobilenumber.value;
    
        if(frm.mobilenumber.value=="")
        {
            alert("Pleas Enter Mobile Number");
            frm.mobilenumber.focus();
            return false;
        }
    
        if(isNaN(y)||y.indexOf(" ")!=-1){
            alert("Please Enter numeric value in Phone Number/Mobile Number Field");
            frm.mobilenumber.focus();
            return false; 
        }
            
        if(y!=''){
            if(frm.countryCode.value=='91'){    
                var valmob = frm.mobilenumber.value.length;
                if((valmob < 10) || (valmob >= 11)) {
                    alert("Mobile Number Must be 10 Digits");
                    frm.mobilenumber.focus();
                    return false;
                }
                
                if(!(frm.mobilenumber.value.charAt(0)>='7' && frm.mobilenumber.value.charAt(0)<='9')){
                    alert("Mobile Number Starts With 7-9");
                    frm.mobilenumber.focus();
                    return false;
                            
                } 
            }
        }
    
        if(frm.email.value==""){
            alert("Please Enter Email Id");
            frm.email.focus();
            return false;   
        }
            
            
        if (!(/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9._%-]+\.[a-zA-Z]{2,4}\s*$/.test(frm.email.value))) {
            alert("Please Enter Valid Email Id");
            frm.email.focus();
            return false;
        }
            
            
    }
    
    function eliteValidation(page,i){
    
        var indexcount=i;
        var frm = document.eliteentryFrm;
        
        if(!inviteFormNameValidation(true)){
            return false;
        }
    
        // if(frm.towhom.value=='0') {
        // alert('Please select for whom you are seeking alliance');
        // frm.towhom.focus();
        // return false;   
        // }    

        // if(frm.emailId.value="" || frm.emailId.value=="Eg: abc@gmail.com") {
        // alert('Please enter email id');
        // frm.emailId.focus();
        // return false;   
        // }
        var lengthcount = frm.emailId.value.length; 
        if(lengthcount>0){
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(frm.emailId.value))) {
        alert('Please enter valid email id');               
        frm.emailId.focus();
        return false;
        }}


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

        if(!eliteEntryphoneNumberValidation())
        {
            return false;
        }
        if (frm.emailId.value == "" || frm.emailId.value == "Eg: abc@gmail.com") {

            document.getElementById("error-message-emailId").textContent = "Please enter emailId";
            document.getElementById("error-message-emailId").style.display = "block";
            frm.emailId.classList.add('err-txt-border');
            frm.emailId.focus();
            return false;
        }
        var emaillengthcount = frm.emailId.value.length;
        if (emaillengthcount > 0) {
            if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(frm.emailId.value))) {
                //alert('Please enter valid email id');      
                document.getElementById("error-message-emailId").textContent = "Please enter valid email id";
                document.getElementById("error-message-emailId").style.display = "block";
                frm.emailId.classList.add('err-txt-border');
                frm.emailId.focus();
                return false;
            }
        }
        document.getElementById("error-message-emailId").textContent = " ";
        frm.emailId.classList.remove('err-txt-border');

        //NEW SCRIPT ADDED FOR COUNTRY STATE CITY
        if (frm.countryCodeDet.value == 98)
        {
            /*if (frm.countryDet2.value == "" || frm.locationDet2.value == "") {
                document.getElementById("error-message-location3").textContent = "Please enter country";
                document.getElementById("error-message-location3").style.display = "block";
                frm.locationDet2.classList.add('err-txt-border');
                frm.locationDet2.focus();
                return false;
            }else{*/
                if (frm.locationDet2.value == "India")
                {
                    if (frm.stateDet2.value == "") {
                        document.getElementById("error-message-location3").textContent = "Please enter state";
                        document.getElementById("error-message-location3").style.display = "block";
                        frm.locationDet2.classList.add('err-txt-border');
                        frm.locationDet2.focus();
                        return false;
                    }
                    if (frm.cityDet2.value == "" || frm.cityDet2.value == "no") {
                        document.getElementById("error-message-location3").textContent = "Please enter city";
                        document.getElementById("error-message-location3").style.display = "block";
                        frm.locationDet2.classList.add('err-txt-border');
                        frm.locationDet2.focus();
                        return false;
                    }else{
                        document.getElementById("error-message-location3").textContent = " ";
                        frm.locationDet2.classList.remove('err-txt-border');
                    }
                }
            //}
           
        }
      

        if(frm.countryCode.value=='91'){
            var lengthVal = frm.rcity.value.trim();

            if(indexcount!='index'){
            if(frm.rcity){ 
            if(frm.rcity.value=='0' || frm.rcity.value=='' ) {
            alert('Please enter location');     
            frm.rcity.focus();
            return false;   
            } else if(lengthVal.length==0){
            alert('Please enter location');     
            frm.rcity.focus();
            return false;   

            } 
            var alphanumeric = /^[A-Za-z ]{3,30}$/;
            if(frm.rcity.value.match(alphanumeric)==null){
            alert('Please enter valid location');
            frm.rcity.focus();
            return false;   
            } 

            }
            }
        }



        if(frm.language.value=='0'){
        alert('Please select language')
        frm.language.focus();
        return false;
        }


        var alphanumeric = /^[A-Za-z0-9 ]{3,20}$/;
        if(frm.besttimetoreach.value=="" || frm.besttimetoreach.value=="Eg: After 8 pm,Weekends-9 am to 7pm") {
        alert('Please enter best time to reach you. Example : 6 AM / Any Time');
        frm.besttimetoreach.focus();
        return false;   
        } else if(frm.besttimetoreach.value.match(alphanumeric)==null){
        alert('Please enter valid best time to reach you. Example : 6 AM / Any Time');
        frm.besttimetoreach.focus();
        return false;   
        } 

        if(page == "getinvite2"){
        popgatrackclick();
        }       
        /*var date=new Date(); 
        var day=date.getDate();  
        var month=date.getMonth()+1;  
        var year=date.getFullYear();  
        var username=day+"/"+month+"/"+year;            
        var res = GetCookie(username)   
        
        if(res == null){
        var value = 1;
        }else if(res == 1){         
        var value = 2;
        }else{
        var value = 3;
        }
        if(res == 3){
        alert("Sorry you can't register more than three times in the same day");
        return false;           
        }
        setCookie(username,value)*/

        frm.getinvite2.value=page;  
        document.eliteentryFrm.submit();
    }
    
    
  
function popentryformNameValidation(){
    
    var frm = document.popentryform;
    var nameval = frm.name.value.trim();

    if (frm.name.value == "" || frm.name.value == "Your Name") {
        // alert('Please enter name');
        document.getElementById("error-message-name2").textContent = "Please enter name";
        document.getElementById("error-message-name2").style.display = "block";
        document.getElementById("entryname").classList.add('err-txt-border');
        frm.name.focus();
        return false;
    } else if (frm.name.value.length < 3) {
        // alert('Please enter alteast 3 characters');
        document.getElementById("error-message-name2").textContent = "Please enter alteast 3 characters";
        document.getElementById("error-message-name2").style.display = "block";
        document.getElementById("entryname").classList.add('err-txt-border');
        frm.name.focus();
        return false;
    } else if (nameval.length == 0) {
        // alert('Please enter name');
        document.getElementById("error-message-name2").textContent = "Please enter name";
        document.getElementById("error-message-name2").style.display = "block";
        document.getElementById("entryname").classList.add('err-txt-border');
        console.log("name");
        frm.name.focus();
        return false;
    }

    var nameRegex = /^[A-Za-z ]{3,40}$/;
    if (frm.name.value.match(nameRegex) == null) {
        // alert('Please enter valid name');
        document.getElementById("error-message-name2").textContent = "Please enter valid name";
        document.getElementById("error-message-name2").style.display = "block";
        document.getElementById("entryname").classList.add('err-txt-border');
        frm.name.focus();
        return false;
    }
    else {
        document.getElementById("error-message-name2").textContent = " "; 
        document.getElementById("entryname").classList.remove('err-txt-border');
    }
    return true;
}

function popentryformNumberValidation(){
    var frm = document.popentryform;

    if (frm.phoneNo.value == "") {
        // alert('Please enter phone number');
        document.getElementById("error-message-phone2").textContent = "Please enter phone number";
        document.getElementById("error-message-phone2").style.display = "block";
        document.getElementById("entryphoneno").classList.add('err-txt-border');
        frm.phoneNo.focus();
        return false;
    }


    if (isNaN(frm.phoneNo.value)) {

        // alert('Please enter valid number');
        document.getElementById("error-message-phone2").textContent = "Please enter valid number";
        document.getElementById("error-message-phone2").style.display = "block";
        frm.phoneNo.focus();
        return false;
    }


    if (frm.countryCode.value == '91') {
        if ((frm.phoneNo.value.length < 10) || (frm.phoneNo.value.length > 10)) {
            // alert('Please enter 10 digit number');
            document.getElementById("error-message-phone2").textContent = "Please enter 10 digit number";
            document.getElementById("error-message-phone2").style.display = "block";
            frm.phoneNo.focus();
            return false;
        }

    } 

    document.getElementById("error-message-phone2").textContent = " "; 
    document.getElementById("entryphoneno").classList.remove('err-txt-border');
    return true;
}
function popentryformEmailValidation(){
    /* var frm = document.popentryform;
    var lengthcount = frm.emailId.value.length;
    if (lengthcount > 0) {
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(frm.emailId.value))) {
            alert('Please enter valid email id');
            frm.emailId.focus();
            return false;
        }
    }
    if (frm.emailId.value == "" || frm.emailId.value == "Eg: abc@gmail.com") {

        document.getElementById("error-message-email2").textContent = "Please enter email id";
        document.getElementById("error-message-email2").style.display = "block";
        document.getElementById("entryemailId").classList.add('err-txt-border');
        frm.emailId.focus();
        return false;
    }
    var emaillengthcount = frm.emailId.value.length;
    if (emaillengthcount > 0) {
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(frm.emailId.value))) {
            //alert('Please enter valid email id');      
            document.getElementById("error-message-email2").textContent = "Please enter valid email id";
            document.getElementById("error-message-email2").style.display = "block";
            frm.emailId.focus();
            return false;
        }
    }   
    document.getElementById("error-message-email2").textContent = " "; 
    document.getElementById("entryemailId").classList.remove('err-txt-border'); */
    return true;
}
function popentryformCountryValidation(){
    
    var frm = document.popentryform; 

    if (frm.countryCode.value == "" || frm.countryCode.value == "Country") {
        alert('Please select country code');
        frm.countryCode.focus();
        return false;
    }

    if (isNaN(frm.countryCode.value)) {
        alert('Please select country code');
        frm.countryCode.focus();
        return false;
    } 
    if (frm.countryCodeDet.value == 98) {
        if (frm.countryDet.value == "") {  
             
            document.getElementById("error-message-country2").textContent = "Please enter country";
            document.getElementById("error-message-country2").style.display = "block";
            frm.countryDet.classList.add('err-txt-border');
            frm.countryDet.focus();
            return false;
        }else{
            document.getElementById("error-message-country2").style.display = "none";
            frm.countryDet.classList.remove('err-txt-border');
        }
    }
    return true;
}

function popentryformStateValidation(){
    var frm = document.popentryform;
    if(frm.countryCodeDet.value == 98)
    {
       
        if (frm.stateDet.value == "") {
            document.getElementById("error-message-state2").textContent = "Please enter state";
            document.getElementById("error-message-state2").style.display = "block";
            frm.stateDet.classList.add('err-txt-border');
            frm.stateDet.focus();
            return false;
        }else{
            document.getElementById("error-message-state2").style.display = "none";
            frm.stateDet.classList.remove('err-txt-border');
        }
    } 
    return true;
}

function popentryformCityValidation(){
    var frm = document.popentryform; 
    if(frm.countryCodeDet.value == 98)
    {
        if (frm.cityDet.value == "" || frm.cityDet.value == "no") {
            document.getElementById("error-message-city2").textContent = "Please enter city";
            document.getElementById("error-message-city2").style.display = "block";
            frm.cityDet.classList.add('err-txt-border');
            frm.cityDet.focus();
            return false;
        }else{
            document.getElementById("error-message-city2").style.display = "none";
            frm.cityDet.classList.remove('err-txt-border');
        }
    }
    return true;
}

function popupValidation(page, i) {

    var frm = document.popentryform;

    {
        var indexcount = i;
        
        if(!popentryformNameValidation()){
            return false;
        }
        if(!popentryformNumberValidation()){
            return false;
        }
        if(!popentryformEmailValidation()){
            return false;
        }
        if(frm.countryCodeDet.value=='98')
        {
            if(!popentryformCountryValidation()){
                return false;
            }
            if(frm.countryDet.value == 98)
            {
                if(!popentryformStateValidation()){
                    return false;
                }
                if(!popentryformCityValidation()){
                    return false;
                }
            }
           
        }
        // if(frm.towhom.value=='0') {
        // alert('Please select for whom you are seeking alliance');
        // frm.towhom.focus();
        // return false;   
        // }    

        // if(frm.emailId.value="" || frm.emailId.value=="Eg: abc@gmail.com") {
        // alert('Please enter email id');
        // frm.emailId.focus();
        // return false;   
        // }
        
         
        }

        if (frm.countryCode.value != '91') {
            if ((frm.phoneNo.value.length < 6)) {
                // alert('Please enter valid number');
                document.getElementById("error-message-phone2").textContent = "Please enter valid number";
                document.getElementById("error-message-phone2").style.display = "block";
                frm.phoneNo.focus();
                return false;
            }
            else {
                var phonelen = frm.phoneNo.value.replace(/^[0]+/g, "");
                if ((phonelen.length < 6)) {
                    // alert('Please enter valid Minimum 6 digits phone number');
                    document.getElementById("error-message-phone2").textContent = "Please enter valid Minimum 6 digits phone number";
                    document.getElementById("error-message-phone2").style.display = "block";
                    frm.phoneNo.focus();
                    return false;
                }
            }
            
        }else {
            document.getElementById("error-message-phone2").textContent = " "; 
            document.getElementById("entryphoneno").classList.remove('err-txt-border');
        }
        if (frm.countryCode.value == '91') {
            if (frm.phoneNo.value.charAt(0) >= '6' && frm.phoneNo.value.charAt(0) <= '9') {

            } else {
                // alert('Please enter 10 digit number');
                document.getElementById("error-message-phone2").textContent = "Please enter 10 digit number";
                document.getElementById("error-message-phone2").style.display = "block";
                frm.phoneNo.focus();
                return false;
            }

        }


        if (frm.countryCode.value == '91') {
            var lengthVal = frm.rcity.value.trim();

            if (indexcount != 'index') {
                if (frm.rcity) {
                    if (frm.rcity.value == '0' || frm.rcity.value == '') {
                        alert('Please enter location');
                        frm.rcity.focus();
                        return false;
                    } else if (lengthVal.length == 0) {
                        alert('Please enter location');
                        frm.rcity.focus();
                        return false;

                    }
                    var alphanumeric = /^[A-Za-z ]{3,30}$/;
                    if (frm.rcity.value.match(alphanumeric) == null) {
                        alert('Please enter valid location');
                        frm.rcity.focus();
                        return false;
                    }

                }
            }
        }



        if (frm.language.value == '0') {
            alert('Please select language')
            frm.language.focus();
            return false;
        }


        var alphanumeric = /^[A-Za-z0-9 ]{3,20}$/;
        if (frm.besttimetoreach.value == "" || frm.besttimetoreach.value == "Eg: After 8 pm,Weekends-9 am to 7pm") {
            alert('Please enter best time to reach you. Example : 6 AM / Any Time');
            frm.besttimetoreach.focus();
            return false;
        } else if (frm.besttimetoreach.value.match(alphanumeric) == null) {
            alert('Please enter valid best time to reach you. Example : 6 AM / Any Time');
            frm.besttimetoreach.focus();
            return false;
        }

        if (page == "getinvite1") {
            popgatrackclick();
        } 

        frm.getinvite1.value = page;
        document.popentryform.submit();
}
    function searchvalidation(){
        var frm = document.searchFilter;
        var PPFROMAGE = $('#agefrom').val();
        var PPTOAGE = $('#ageto').val();
        var Caste = $('#CASTE').val();
        var Gender = $('#GENDER').val();
        if ((PPFROMAGE == '' && PPTOAGE=='') && Caste==0 && Gender == 0) {
             alert('Please select any one of search criteria');
             document.getElementById('agefrom').focus();
             return false;   
        }
        if((PPFROMAGE == '' && PPTOAGE!='')){
             alert('Please Enter the Age From');
             document.getElementById('agefrom').focus();
             return false;
        }
        if((PPFROMAGE != '' && PPTOAGE=='')){
             alert('Please Enter the Age To');
             document.getElementById('ageto').focus();
             return false;
        }
        if(Gender == 0){
            alert('Please select the Gender');
            document.getElementById('GENDER').focus();
            return false;  
        }
        if(Gender==1){
            if((PPFROMAGE < 18 || PPFROMAGE > 70)){
                 alert('Invalid Age - Please provide the age range between 18 to 70');
                 document.getElementById('agefrom').focus();
                 return false;  
            }
        }
        if(Gender==2){
           if((PPFROMAGE < 21 || PPFROMAGE > 70)){
                 alert('Invalid Age - Please provide the age range between 21 to 70');
                 document.getElementById('agefrom').focus();
                 return false;  
            } 
        }
         if(PPTOAGE!=70 && PPFROMAGE!=70){
              if (PPTOAGE <= PPFROMAGE) {
                  alert('Invalid Age');
                  document.getElementById('agefrom').focus();
                  return false;
              }      
         }
     }          
    function setCookie(username,value)
    {
    var expdate = new Date(Date.now() + 86400e3);
    var expires = expdate.toUTCString();
    document.cookie = [username] + "=" + value + ";" + expires + ";path=/";
    } 
    
    
    function GetCookie(name)
    {
    var cname = name + "=";
    var dc = document.cookie;
        if (dc.length > 0)
        { 
            begin = parseInt(dc.indexOf(cname));
            if (begin >= 0)
            {
                begin += cname.length;
                end = dc.indexOf(";", begin);
                if (end == -1) end = dc.length;
                return unescape(dc.substring(begin, end));
            }
        }
    return null;
    }     

    function inviteFormNameValidation(isFormSubmission){

        var frm = document.eliteentryFrm;
        var nameval = frm.name.value.trim();
        var nameRegex = /^[A-Za-z ]{3,40}$/;
        var validName = true;
        var errMessage = '';

        if(frm.name.value=="" || frm.name.value=="Your Name" || nameval.length==0){
            errMessage = 'Please enter name';
            validName = false;
        } else if(frm.name.value.length < 3){
            errMessage = 'Please enter alteast 3 characters';
            validName = false;
        } else if(!nameRegex.test(frm.name.value)) {
            errMessage = 'Please enter valid name';
            validName = false;
        }

        if(!validName){
            $('.elite-invite-form .e-inline-label-div #error-message-name3').text(errMessage);
            $('.elite-invite-form .e-inline-label-div #error-message-name3').css('display','inline-block');
            $('.elite-invite-form .e-inline-label-div #elite-invite-fm-name').addClass('err-txt-border');
        } else {
            $('.elite-invite-form .e-inline-label-div #error-message-name3').text('');
            $('.elite-invite-form .e-inline-label-div #error-message-name3').css('display','none');
            $('.elite-invite-form .e-inline-label-div #elite-invite-fm-name').removeClass('err-txt-border');
        }

        if(isFormSubmission){
            frm.name.focus();
        }

        return validName;
    }
    function shareFormNameValidation(isFormSubmission){

        var frm = document.eliteshareFrm;
        var nameval = frm.name.value.trim();
        var nameRegex = /^[A-Za-z ]{3,40}$/;
        var validName = true;
        var errMessage = '';

        if(frm.name.value=="" || frm.name.value=="Your Name" || nameval.length==0){
            errMessage = 'Please enter name';
            validName = false;
        } else if(frm.name.value.length < 3){
            errMessage = 'Please enter alteast 3 characters';
            validName = false;
        } else if(!nameRegex.test(frm.name.value)) {
            errMessage = 'Please enter valid name';
            validName = false;
        }

        if(!validName){
            $('.share-form .elite-inline-label-div #share-error-message-name').text(errMessage);
            $('.share-form .elite-inline-label-div #share-error-message-name').css('display','inline-block');
            $('.share-form .elite-inline-label-div .elite-share-fm-name').addClass('err-txt-border');
        } else {
            $('.share-form .elite-inline-label-div #share-error-message-name').text('');
            $('.share-form .elite-inline-label-div #share-error-message-name').css('display','none');
            $('.share-form .elite-inline-label-div .elite-share-fm-name').removeClass('err-txt-border');
        }

        if(isFormSubmission){
            frm.name.focus();
        }

        return validName;
    }
    
    function phoneNumberShareValidation()
    {
        var frm = document.eliteshareFrm;
        if(frm.phoneNo.value=="") {
        $('.share-form .elite-inline-plabel-div #phone-error-message-name').text('Please enter phone number');
        $('.share-form .elite-inline-plabel-div #phone-error-message-name').css('display','inline-block');
        $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');

            frm.phoneNo.focus();
            return false;
        }
        

        if(isNaN(frm.phoneNo.value)) {
            $('.share-form .elite-inline-plabel-div #phone-error-message-name').text('Please enter valid number');
            $('.share-form .elite-inline-plabel-div #phone-error-message-name').css('display','inline-block');
            $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
            frm.phoneNo.focus();
            return false;
        }
        
        
        if(frm.countryCode.value=='91'){
        if((frm.phoneNo.value.length < 10) || (frm.phoneNo.value.length > 10)) {
            $('.share-form .elite-inline-plabel-div #phone-error-message-name').text('Please enter 10 digit number');
            $('.share-form .elite-inline-plabel-div #phone-error-message-name').css('display','inline-block');
            $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
            //    alert('Please enter 10 digit number');
                frm.phoneNo.focus();
                return false;
            }
        
        }
         
        if(frm.countryCode.value!='91'){
           if((frm.phoneNo.value.length < 6)) {
            $('.share-form .elite-inline-plabel-div #phone-error-message-name').text('Please enter valid number');
            $('.share-form .elite-inline-plabel-div #phone-error-message-name').css('display','inline-block');
            $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
                // alert('Please enter valid number');
                frm.phoneNo.focus();
                return false;
            }
            else{
            var phonelen = frm.phoneNo.value.replace(/^[0]+/g,"");
            if((phonelen.length < 6)) {
            $('.share-form .elite-inline-plabel-div #phone-error-message-name').text('Please enter valid Minimum 6 digits phone number');
            $('.share-form .elite-inline-plabel-div #phone-error-message-name').css('display','inline-block');
            $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
                frm.phoneNo.focus();
                return false;
                }
            }
    }
        if(frm.countryCode.value=='91'){        
            if(frm.phoneNo.value.charAt(0)>='6' && frm.phoneNo.value.charAt(0)<='9'){           
                        
            } else {                
                $('.share-form .elite-inline-plabel-div #phone-error-message-name').text('Please enter 10 digit number');
                $('.share-form .elite-inline-plabel-div #phone-error-message-name').css('display','inline-block');
                $('.share-form .elite-inline-plabel-div ').addClass('err-txt-border');
                frm.phoneNo.focus();
                return false;   
            }

        }

        $('.share-form .elite-inline-plabel-div #phone-error-message-name').css('display','none');
        $('.share-form .elite-inline-plabel-div ').removeClass('err-txt-border');

        return true;
    }

    function eliteEntryphoneNumberValidation()
    {
        var frm = document.eliteentryFrm;
        if(frm.phoneNo.value=="") {
                // alert('Please enter phone number');
                document.getElementById("error-message-phone3").textContent = "Please enter phone number";
                document.getElementById("error-message-phone3").style.display = "block";
                frm.phoneNo.classList.add('err-txt-border');
                frm.phoneNo.focus();
                return false;
            }
    
    
            if(isNaN(frm.phoneNo.value)) {
    
                // alert('Please enter valid number');
                document.getElementById("error-message-phone3").textContent = "Please enter valid number";
                document.getElementById("error-message-phone3").style.display = "block";
                frm.phoneNo.classList.add('err-txt-border');
                frm.phoneNo.focus();
                return false;
            }
    
    
            if(frm.countryCode.value=='91'){
                if((frm.phoneNo.value.length < 10) || (frm.phoneNo.value.length > 10)) {
                // alert('Please enter 10 digit number');
                document.getElementById("error-message-phone3").textContent = "Please enter 10 digit number";
                document.getElementById("error-message-phone3").style.display = "block";
                frm.phoneNo.classList.add('err-txt-border');
                frm.phoneNo.focus();
                return false;
                }
            }
    
            if(frm.countryCode.value!='91'){
                if((frm.phoneNo.value.length < 6)) {
                // alert('Please enter valid number');
                document.getElementById("error-message-phone3").textContent = "Please enter valid number";
                document.getElementById("error-message-phone3").style.display = "block";
                frm.phoneNo.classList.add('err-txt-border');
                frm.phoneNo.focus();
                return false;
                }
                else{
                var phonelen = frm.phoneNo.value.replace(/^[0]+/g,"");
                if((phonelen.length < 6)) {
                    document.getElementById("error-message-phone3").textContent = "Please enter valid Minimum 6 digits phone number";
                    document.getElementById("error-message-phone3").style.display = "block";
                    frm.phoneNo.classList.add('err-txt-border');
                // alert('Please enter valid Minimum 6 digits phone number');
                frm.phoneNo.focus();
                return false;
                }
                }
            }

            if(frm.countryCode.value=='91'){        
                if(frm.phoneNo.value.charAt(0)>='6' && frm.phoneNo.value.charAt(0)<='9'){           
                } else {                
                // alert('Please enter 10 digit number');
                document.getElementById("error-message-phone3").textContent = "Please enter 10 digit number";
                document.getElementById("error-message-phone3").style.display = "block";
                frm.phoneNo.classList.add('err-txt-border');
                frm.phoneNo.focus();
                return false;   
                }
            }

            document.getElementById("error-message-phone3").style.display = "none";
            frm.phoneNo.classList.remove('err-txt-border');

            return true;
    }

    function popentryFirstformCountryValidation(){
        var cform = document.locationpopupfrm;
        if (cform.countryDet.value == '') {
            $('.locationfrm .countrydiv #country-error-message-name').text('Please select country');
            $('.locationfrm .countrydiv #country-error-message-name').css('display', 'inline-block');
            $('.locationfrm  .countrydiv .selectcountry').addClass('err-txt-border');
    
            cform.countryDet.focus();
            return false;
        } else {
            $('.locationfrm .countrydiv #country-error-message-name').css('display', 'none');
            $('.locationfrm  .countrydiv .selectcountry').removeClass('err-txt-border');
        }
        return true;
    }
    function popentryFirstformStateValidation(){
        var cform = document.locationpopupfrm;
        if(cform.countryDet.value == 98)
        {
            if (cform.stateDet.value == '' ) {
                $('.locationfrm .statediv #state-error-message-name').text('Please select state');
                $('.locationfrm .statediv #state-error-message-name').css('display', 'inline-block');
                $('.locationfrm  .statediv .selectcountry').addClass('err-txt-border');
                cform.stateDet.focus();
                return false;
            } else {
                $('.locationfrm .statediv #state-error-message-name').css('display', 'none');
                $('.locationfrm  .statediv .selectcountry').removeClass('err-txt-border');
            }
        }
        return true;
    }
    function popentryFirstformCityValidation(){
        var cform = document.locationpopupfrm;
        if(cform.countryDet.value == 98)
        {
            if (cform.cityDet.value == '' || cform.cityDet.value == 'no') {
                $('.locationfrm .citydiv #city-error-message-name').text('Please select city');
                $('.locationfrm .citydiv #city-error-message-name').css('display', 'inline-block');
                $('.locationfrm  .citydiv .selectcountry').addClass('err-txt-border');
        
                cform.cityDet.focus();
                return false;
            } else {
                $('.locationfrm .citydiv #city-error-message-name').css('display', 'none');
                $('.locationfrm  .citydiv .selectcountry').removeClass('err-txt-border');
            }
        }
        return true;
    
    }
    function CountryValidate() {
        var cform = document.locationpopupfrm;
    //  CountryValidate | country popup
            if(!popentryFirstformCountryValidation()){
                return false;
            }
            if(!popentryFirstformStateValidation()){
                return false;
            }
            if(!popentryFirstformCityValidation()){
                return false;
            }
       
      
            document.getElementById("location-error-message-name").textContent = ""; 
            $('.share-form .elite-inline-plabel-div3 .share-location').removeClass('err-txt-border');
    
         hideModel('#locationPopup');
         document.getElementById('toast-locationformone').style="display:block";
        setTimeout(() => {
            const box = document.getElementById('toast-locationformone');
            box.style.display = 'none';
            }, 3000); //
    }
    
    function popentrSencondformCountryValidation(){
        var cform = document.locationpopupfrm2;
         if (cform.countryDet.value == '') {
            $('.locationfrm2 .countrydiv #country-error-message-name2').text('Please select country');
            $('.locationfrm2 .countrydiv #country-error-message-name2').css('display', 'inline-block');
            $('.locationfrm2  .countrydiv .selectcountry').addClass('err-txt-border');
    
            cform.countryDet.focus();
            return false;
        } else {
            $('.locationfrm2 .countrydiv #country-error-message-name2').css('display', 'none');
            $('.locationfrm2  .countrydiv .selectcountry').removeClass('err-txt-border');
        }
        return true;
    }
    function popentrSencondformStateValidation(){
        var cform = document.locationpopupfrm2;
        if(cform.countryDet.value == 98)
        {
            if (cform.stateDet.value == '' ) {
            
                $('.locationfrm2 .statediv #state-error-message-name2').text('Please select state');
                $('.locationfrm2 .statediv #state-error-message-name2').css('display', 'inline-block');
                $('.locationfrm2  .statediv .selectcountry').addClass('err-txt-border');
        
                cform.stateDet.focus();
                return false;
            } else {
                $('.locationfrm2 .statediv #state-error-message-name2').css('display', 'none');
                $('.locationfrm2  .statediv .selectcountry').removeClass('err-txt-border');
            }
        }
        return true;
    }
    function popentrSencondformCityValidation(){
        var cform = document.locationpopupfrm2; 
        if(cform.countryDet.value == 98)
        {
            if (cform.cityDet.value == '' || cform.cityDet.value == 'no') {
                $('.locationfrm2 .citydiv #city-error-message-name2').text('Please select city');
                $('.locationfrm2 .citydiv #city-error-message-name2').css('display', 'inline-block');
                $('.locationfrm2  .citydiv .selectcountry').addClass('err-txt-border');
        
                cform.cityDet.focus();
                return false;
            } else {
                $('.locationfrm2 .citydiv #city-error-message-name2').css('display', 'none');
                $('.locationfrm2  .citydiv .selectcountry').removeClass('err-txt-border');
            }
        }
        return true;
    }
    function CountryValidate2() {
        var cform = document.locationpopupfrm2;
       //  CountryValidate2 | country popup 
       if(!popentrSencondformCountryValidation()){
        return false;
        }
        if(cform.countryDet.value == 98)
        {
            if(!popentrSencondformStateValidation()){
                return false;
            }
            if(!popentrSencondformCityValidation()){
                return false;
            }
        }
        document.getElementById("location-error-message-name").textContent = " ";
        document.getElementById("error-message-location3").textContent = " ";
        document.eliteentryFrm.countryDet2s.classList.remove('err-txt-border');
    
        hideModel('#locationPopup2');
        document.getElementById('toast-locationformtwo').style="display:block";
        setTimeout(() => {
            const box = document.getElementById('toast-locationformtwo');
            box.style.display = 'none';
            }, 3000); //
    }
    
    function showModel(modelId){
        $(modelId).addClass('show-model');
    }
    function hideModel(modelId){
        $(modelId).removeClass('show-model');
    }