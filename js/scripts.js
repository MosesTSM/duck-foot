jQuery( document ).ready( function ( $ ) {

// --------------------------------------------------------------------------------------
// Scrolled Header --------------------------------------------------------------------
// --------------------------------------------------------------------------------------
    $(window).scroll(function() { 
        var scroll = $(window).scrollTop();

        if (scroll >= 75) {
            $("header").addClass("scrolled-header");
        } else {
            $("header").removeClass("scrolled-header");
        }
    });

// --------------------------------------------------------------------------------------
// Mobile Navigation --------------------------------------------------------------------
// --------------------------------------------------------------------------------------
    $('a.hamburger, .close-nav').click(function() {
        $('.responsive-menu').toggleClass('responsive-menu-show');
        $('.mobile-overlay').toggleClass('mobile-overlay-on');
        $('.close-nav').toggleClass('close-nav-show');
        $('.mobile-caution-tape').toggleClass('mobile-caution-tape-show');
    });

    $('.responsive-menu .menu-item-has-children a').click(function() {
        $('.responsive-menu').addClass('mobile-submenu-active');
        $(this).siblings('ul').addClass('active-submenu');
        $('.back-nav').addClass('back-nav-show');
        $('.close-nav').removeClass('close-nav-show');
    });

    $('.mobile-overlay').click(function() {
        if ( $('.responsive-menu').hasClass('mobile-submenu-active') ) {
            $('.responsive-menu').removeClass('mobile-submenu-active');
            $('.sub-menu').removeClass('active-submenu');
            $('.back-nav').removeClass('back-nav-show');
            $('.close-nav').addClass('close-nav-show');
        }
        else {
            $('.responsive-menu').removeClass('responsive-menu-show');
            $('.mobile-overlay').removeClass('mobile-overlay-on');
            $('.close-nav').removeClass('close-nav-show');
            $('.mobile-caution-tape').removeClass('mobile-caution-tape-show');
        }
    });

    $('.back-nav').click(function() {
        $('.mobile-menu').removeClass('mobile-submenu-active');
        $('.sub-menu').removeClass('active-submenu');
        $('.back-nav').removeClass('back-nav-show');
        $('.close-nav').addClass('close-nav-show');
    });
    
    
    // Mobile sub nav --------------------------------------------------------------------
    $('.responsive-menu .menu-item-has-children li a').addClass('sub-anchor')
    $(function () {
        $('.responsive-menu .menu-item-has-children a:not(.sub-anchor)').on("click", function (e) {
            e.preventDefault();
        });
    });


// --------------------------------------------------------------------------------------
// Clear Whitespace ------------------------------------------------------
// --------------------------------------------------------------------------------------
    jQuery.fn.cleanWhitespace = function() {
        this.contents().filter(
            function() { return (this.nodeType == 3 && !/\S/.test(this.nodeValue)); })
            .remove();
        return this;
    }
    // Elements to clear whitespace (select parent element)
    $('ul#main-menu-left').cleanWhitespace();
    $('ul#main-menu-right').cleanWhitespace();



// --------------------------------------------------------------------------------------
// Home Banner effects ------------------------------------------------------
// --------------------------------------------------------------------------------------
    $(window).scroll(function(e){
      pagescroll();
    });

    function pagescroll(){
      var scrolled = $(window).scrollTop();
      $('#home-page-hero h1').css('letter-spacing',1-(scrolled*(-0.0125)));
      $('#home-page-hero h1').css('opacity',1-(scrolled*0.001));
      $('img.home-banner-crop').css('transform','translate(' + (-(scrolled*0.1)) + 'px,-50%)');
    }


// --------------------------------------------------------------------------------------
// Console Credits ------------------------------------------------------
// --------------------------------------------------------------------------------------
console.log("%c ----------------------------------------------------------------------------------------------","color: #000700;");
console.log("%c Website powered by THUNDERSTRUCK SALES AND MARKETING (https://thunderstrucksales.com/)","font-weight: bold; color: #C12032;");
console.log("%c Duck Foot distributed by THUNDERSTRUCK AG (https://thunderstruckag.com/)","font-weight: bold; color: #000700;");
console.log("%c ----------------------------------------------------------------------------------------------","color: #000700;");

    
});
