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
        var delay = 160;
        if ( $('.responsive-menu').hasClass('responsive-menu-show') ) {
            $('.responsive-menu').removeClass('responsive-menu-show');
            $('.mobile-overlay').removeClass('mobile-overlay-on');
            $('.hamburger').removeClass('active-burger');
            $('.close-nav').removeClass('close-nav-show');
            $('.responsive-menu li').removeClass('mobile-item-slide');
        } else {
            $('.responsive-menu').addClass('responsive-menu-show');
            $('.mobile-overlay').addClass('mobile-overlay-on');
            $('.hamburger').addClass('active-burger');
            $('.close-nav').addClass('close-nav-show');

            $('.responsive-menu-show li').each(function() {
                var $li = $(this);
                setTimeout(function() {
                    $li.addClass('mobile-item-slide');
                }, delay+=120);
            });
        }
    });

    $('.responsive-menu .menu-item-has-children a').click(function() {
        $('.responsive-menu').addClass('mobile-submenu-active');
        $(this).siblings('ul').addClass('active-submenu');
        $('.back-nav').addClass('back-nav-show');
        $('.close-nav').removeClass('close-nav-show');
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
    $('.mobile-nav').cleanWhitespace();


// --------------------------------------------------------------------------------------
// Wrap h1 and h2 elements --------------------------------------------------------------------
// --------------------------------------------------------------------------------------
    // because they have to be set to display inline --------------------------------
    $('h1,h2').each(function() {
        $(this).wrap( "<div class='title-wrap'></div>" )
    });


// --------------------------------------------------------------------------------------
// Buttons - add Duck Feet --------------------------------------------------------------------
// --------------------------------------------------------------------------------------
    $('a.button').prepend("<div class='button-duck-walk'><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg><svg class='button-foot' x='0px' y='0px' viewBox='0 0 12 18' width='12' height='18' preserveAspectRatio='xMidYMid meet'><path d='M12,17.8v-0.6c0-0.1-0.1-0.2-0.2-0.2H11l-1.1-3.5c0,0,0,0,0,0l1-3.9c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2V8.7 c0-0.1-0.1-0.2-0.2-0.2h-0.9c0,0,0,0,0,0l-1-3.8c0,0,0,0,0,0L11,1.1h0.7C11.9,1.1,12,1,12,0.9V0.2C12,0.1,11.9,0,11.8,0h-0.9 c0,0-0.7,0-0.7,0c0,0,0,0,0,0L0.4,7.2C0.1,7.4,0,7.7,0,8v2c0,0.3,0.1,0.6,0.4,0.7l9.8,7.3c0,0,0,0,0,0h0.8h0h0.8 C11.9,18,12,17.9,12,17.8z'/></svg></div>");


// --------------------------------------------------------------------------------------
// Console Credits ------------------------------------------------------
// --------------------------------------------------------------------------------------
console.log("%c ----------------------------------------------------------------------------------------------","color: #000700;");
console.log("%c Website powered by THUNDERSTRUCK SALES AND MARKETING (https://thunderstrucksales.com/)","font-weight: bold; color: #C12032;");
console.log("%c Duck Foot distributed in the US by THUNDERSTRUCK AG (https://thunderstruckag.com/)","font-weight: bold; color: #000700;");
console.log("%c ----------------------------------------------------------------------------------------------","color: #000700;");

    
});
