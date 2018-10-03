
$(document).ready(function () {


        // $('h1').click(function (){
        //     $(this).css('background-color', '#ff0000');
        // })
        //

    $(window).on('scroll', function(){
        var scroll = $(window).scrollTop();
        if (scroll>840) {
            $('#laravel-nav').addClass('makeSticky');
        } else {
            $('#laravel-nav').removeClass('makeSticky');
        }
    });


//Scroll on buttons

    $('.js--scroll-to-plan').click(function () {

        $('html, body').animate({scrollTop: $('js--section-plans').offset().top },1000);
    });


/*

    
)
*/
});







// (function($) {
//     "use strict";
//
//     $('[data-typer-targets]').typer();
//     $.typer.options.clearOnHighlight=false;
//
// })(