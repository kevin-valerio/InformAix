
    $(function(){ 
        $(window).scroll(function () {
            if ($(this).scrollTop() > 120) {
                $('.menu').addClass("fixMenu"); 
            } else { 
            $('.menu').removeClass("fixMenu");
            }
         }); 
    }); 
