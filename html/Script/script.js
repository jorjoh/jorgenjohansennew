// index.php
$(document).ready(function () {


    $("#content").fadeIn(1000);

    $("p#name").fadeIn(1500).delay(500);
    $("p#stuideSted").fadeIn(4000).delay(1500);
    $("p#studie").fadeIn(4000).delay(1500);
    $(".menuHandler").animate({top: "90.7%"}, 1000).animate({opacity: '1', fontSize: "32pt"});


});

//about.php


//ContactMe.php
$(document).ready(function () {

    $("p#sucsess_redirect").fadeOut(6000);
    $("p#sucsess").fadeOut(2500);
    $(".menuHandler").animate({opacity: '1', fontSize: "32pt"});

    $('#send').click(function () {

        $(".error").hide();
        var hasError = false;
        var emailReg = /^[_a-z0-9]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;


        var emailaddressVal = $("#eMail").val();
        if (emailaddressVal == '') {
            $("#eMail").after('<span class="error">Please enter your email address.</span>');
            hasError = true;
        }

        else if (!emailReg.test(emailaddressVal)) {
            $("#eMail").after('<span class="error">Enter a valid email address.</span>');
            hasError = true;
        }
        else if (isBlockedEmail(emailaddressVal)) {
            $("#eMail").after('<span class="error">Domenets Email-adresse er ikke tillatt.</span>');
            hasError = true
        }
        if (hasError == true) {
            return false;
        }

    });

    function isBlockedEmail(str) {
        var blocked = ["post@jorgenjohansen.no"];
        for (var i = 0; i < blocked.length; i++) {
            if (str.indexOf(blocked[i]) != -1) {
                return true;
            }
        }
        return false;
    }


});
