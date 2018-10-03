
$(document).ready(function () {


        // $('h1').click(function (){
        //     $(this).css('background-color', '#ff0000');
        // })
        //
    var $nav = $('#laravel-nav');
    $(window).on('scroll', function(){
        var scroll = $(window).scrollTop();
        if (scroll>840) {
            if (!$nav.hasClass('makeSticky'))
                $nav.hide().addClass('makeSticky').fadeIn();
        }
        else if (scroll < 100 && !$nav.is(':visible')) {
            $nav.fadeIn();
        }
        else {
            if ($nav.hasClass('makeSticky'))
                $nav.fadeOut(function () {
                    $nav.removeClass('makeSticky');
                });
        }
    });


//Scroll on buttons

    $('.js--scroll-to-plan').click(function () {

        $('html, body').animate({scrollTop: $('.js--section-plans').offset().top - 100 },1000);
    });
    $('.js--scroll-to-start').click(function () {

        $('html, body').animate({scrollTop: $('.js--section-features').offset().top },1000);
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