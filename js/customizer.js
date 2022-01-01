/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

 jQuery(function () {
                jQuery("a.mobile-menu,.panel-overlay, i.close").click(function(){
        jQuery(".primery-menu,.panel-overlay, a.mobile-menu").toggleClass("display");
    });
                jQuery('.menu-item-has-children').prepend('<i class="fa fa-plus d-lg-none"></i>');
        jQuery(".menu-item-has-children i.fa").click(function () {
            jQuery(this).toggleClass('submenu-opened');
            if (jQuery(this).siblings('ul').hasClass('open')) {
                jQuery(this).siblings('ul').removeClass('open').slideUp();
            } else {
                jQuery(this).siblings('ul').addClass('open').slideDown();
            }
        });
            });
            jQuery(function () {
                jQuery(window).scroll(function () {
                    if (jQuery(this).scrollTop() >= 300) {
                        jQuery("header.header").addClass('fixed wpb_start_animation animated');
                        jQuery(".gotop").css({"right": "15px", });
                    } else {
                        jQuery("header.header").removeClass('fixed wpb_start_animation animated');
                        jQuery(".gotop").css({"right": "-55px", });
                    }
                });
            });
        jQuery(function () {
            jQuery('a[href*=#page]:not([href=#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = jQuery(this.hash);
                    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        jQuery('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
jQuery(document).ready(function () {
	jQuery('.style-carousel-4').each(function () {
        jQuery(this).owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    center: false
                },
                600: {
                    items: 2,
                    nav: true,
                    center: false
                },
                992: {
                    items: 3,
                    nav: true,
                     center: false
                },
                1200: {
                    items: 4,
                    nav: true,
                 center: false}
            }
        })
    });
    jQuery('.style-carousel-3').each(function () {
        jQuery(this).owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    center: false
                },
                600: {
                    items: 2,
                    nav: true,
                    center: false
                },
                992: {
                    items: 3,
                    nav: true,
                     center: false
                },
                1200: {
                    items: 3,
                    nav: true,
                 center: false}
            }
        })
    });
    jQuery('.style-carousel-1').each(function () {
        jQuery(this).owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            dots:true,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                    dots: true,
                    center: false
                },
                600: {
                    items: 1,
                    dots: true,
                    center: false
                },
                992: {
                    items: 1,
                    dots: true,
                     center: false
                },
                1200: {
                    items: 1,
                    dots: true,
                 center: false}
            }
        })
    });
	jQuery('.style-carousel-7').each(function () {
        jQuery(this).owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            dots:true,
            autoplay: false,
            responsive: {
                0: {
                    items: 2,
                    dots: true,
                    center: false
                },
                600: {
                    items: 5,
                    dots: true,
                    center: false
                },
                992: {
                    items: 6,
                    dots: true,
                     center: false
                },
                1200: {
                    items: 7,
                    dots: true,
                 center: false}
            }
        })
    });
	jQuery('.style-carousel-6').each(function () {
        jQuery(this).owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            dots:true,
            autoplay: false,
            responsive: {
                0: {
                    items: 2,
                    dots: true,
                    center: false
                },
                600: {
                    items: 4,
                    dots: true,
                    center: false
                },
                992: {
                    items: 5,
                    dots: true,
                     center: false
                },
                1200: {
                    items: 6,
                    dots: true,
                 center: false}
            }
        })
    });
	jQuery('.style-carousel-5').each(function () {
        jQuery(this).owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            dots:true,
            autoplay: false,
            responsive: {
                0: {
                    items: 2,
                    dots: true,
                    center: false
                },
                600: {
                    items: 3,
                    dots: true,
                    center: false
                },
                992: {
                    items: 4,
                    dots: true,
                     center: false
                },
                1200: {
                    items: 5,
                    dots: true,
                 center: false}
            }
        })
    });
		jQuery('.style-carousel-2').each(function () {
        jQuery(this).owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            dots:true,
            autoplay: false,
            responsive: {
                0: {
                    items: 2,
                    dots: true,
                    center: false
                },
                600: {
                    items: 2,
                    dots: true,
                    center: false
                },
                992: {
                    items: 2,
                    dots: true,
                     center: false
                },
                1200: {
                    items: 2,
                    dots: true,
                 center: false}
            }
        })
    });
});  
