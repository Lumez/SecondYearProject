$(document).ready( function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() < 250) {
                $("#toTopLeft:visible").fadeOut('slow');
                //$("#toTopRight:visible").fadeOut('slow');
                //$("#navigation_hide:visible").fadeOut('fast');
            }
            else {
                $("#toTopLeft:hidden").fadeIn('slow');
                //$("#toTopRight:hidden").fadeIn('slow');
                //$("#navigation_hide:hidden").fadeIn('fast');
            }
        });
        
        $('#toTopLeft').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
});