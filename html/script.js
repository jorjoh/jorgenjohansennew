// index.php
$(document).ready(function(){

    $("#content").fadeIn(1000);

    $("p#name").fadeIn(1500).delay(500);
    $("p#stuideSted").fadeIn(4000).delay(1500);
    $("p#studie").fadeIn(4000).delay(1500);
    $(".menuHandlerFall").animate({ top: "90.7%" }, 1000 ).animate({opacity:'1', fontSize:"32pt"});


});

//ContactMe.php
$(document).ready(function() {

        $("p#sucsess_redirect").fadeOut(6000);
        $("p#sucsess").fadeOut(2500);
        $(".menuHandler").animate({opacity: '1', fontSize: "32pt"});

});
