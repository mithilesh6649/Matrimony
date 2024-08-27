/***
 * Data Started
 */
var neftData = `{
"neft": [
{
"bankAccNo": "030999499021",
"bankName": "SBI",
"ifscCode":"SBIN0005797"
},
{
"bankAccNo": "03862320000277",
"bankName": "HDFC",
"ifscCode":"HDFC0000386"
},
{
"bankAccNo": "021205004051",
"bankName": "ICICI",
"ifscCode":"ICIC0000212"
},
{
"bankAccNo": "913020019923094",
"bankName": "AXIS",
"ifscCode":"UTIB0000866"
},
{
"bankAccNo": "12820200103833",
"bankName": "FEDERAL",
"ifscCode":"FDRL0001282"
}
]
}`;
/**
 * 
 * 
 * Scripts Started 
 * 
 * 
 */
var sampleJson = JSON.parse(neftData);
$('.net-bank-logo').on("click", function () {
    console.log($(this));
    $('.net-bank-logo').removeClass('active');
    $(this).addClass('active');
});

// neft payment script start
$('.neft-bank-logo').on("click", function () {
    //applying CSS
    $('.neft-bank-logo').removeClass('active');
    $(this).addClass('active');
    // changing table value
    var currentBankIndex = $(this).attr('bankIndex');
    var bankData = sampleJson.neft[currentBankIndex];
    // console.log(bankData);
    $('#bank-accno-id').text(bankData.bankAccNo);
    $('#bank-ifsc-id').text(bankData.ifscCode);
});

$(document).ready(function () {
    // apply on load SBI
    var sbiData = sampleJson.neft[0];
    

    $('#bank-accno-id').text(sbiData.bankAccNo);
    $('#bank-ifsc-id').text(sbiData.ifscCode);
    $('#Credit-click-hide').css('display', 'none');
    //paypal details
    $('#list-neft-bank-list').on('click', function () {
        console.log('list-neft-bank-list');
        $('#paypal-hide').css('display', 'none');
    });
    $('.neft-click-on').on('click', function () {
        $('#paypal-hide').css('display', 'flex');
    });
    //-------- Mobile view payment tab-----------
    $('.payment-mob-div').on('click', function () {
        //button
        $('.payment-mob-div').removeClass('active');
        $(this).addClass('active');
        //tab
        $('.tab-pane.fade').removeClass('active');
        $('.tab-pane.fade').removeClass('show');
        var attrValue = $(this).attr('ref-tab');
        $('#' + attrValue).addClass('active').addClass('show');
    });
    //---------card view--------
    $('.neft-bank-menu').on('click', function () {
        $('#pay-securely-id').css('display', 'none');
    });
    $('.credit-card-menu, .net-bank-menu, .upi-bank-menu').on('click', function () {
        $('#pay-securely-id').css('display', 'flex');
    });
    //---------paypal nri mobile view--------
    $('#paypal-nri-mobile-pay, #list-net-paypal-list').on('click', function () {
        $('#paypal-div').css({ 'display': 'block', 'opacity': '1' });
    });
    $('#mobPaymentOptionSliderCRID, #list-credit-card-list').on('click', function () {
        $('#paypal-div').css('display', 'none');
    });

    // START Set currently active tab in hidden input for <form> submit
    var activeTabName = $('#list-credit-card-list').attr("aria-controls");
    $("#activePaymentOptionID").val(activeTabName);

    $('#list-credit-card-list, #list-net-bank-list, #list-neft-bank-list, #list-upi-pay-list, #mobPaymentOptionSliderCRID, #mobPaymentOptionSliderNETBANK, #mobPaymentOptionSliderNEFTRTGS, #mobPaymentOptionSliderUPI').on('click', function () {
        var activeTabName = $(this).attr("aria-controls");
		$("#activePaymentOptionID").val(activeTabName);
    });
    // END Set currently active tab in hidden input for <form> submit
});

// ONLY ENTER NUMBERIC NUMBERS (cardnumber,cvv)
function isNumber(e) {
    if (e.shiftKey && e.keyCode == 9) {
        //do nothing for shift+tab
    } else if (e.shiftKey == true || (e.ctrlKey == true && (e.which == 97 || e.which == 65))) {
        e.preventDefault();
    }
    if (e.which > 31 && (e.which < 48 || e.which > 57) && !((e.ctrlKey == true && (e.which == 67 || e.which == 86 || e.which == 118 || e.which == 99)))) {
        e.preventDefault();
    }
}

// WHEN USER TYPE CARD NUMBER SPACE WILL COME AFTER ENTER 4 DIGITS
$('#cardNumberID').bind('keydown', function(e) {
    if (e.keyCode != 8) {
        $(this).val(function(index, value) {
            return value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ').trim();
        });
    }
});
// end