/**
 * Electronics Store Theme - Main JavaScript
 */

(function($) {
    'use strict';

    // Mobile Menu Toggle
    $(document).ready(function() {
        // Add mobile menu functionality
        var nav = $('#site-navigation');
        
        // Create menu toggle button for mobile
        if ($(window).width() < 768) {
            nav.find('.navbar-nav').hide();
        }

        // Responsive menu
        $(window).resize(function() {
            if ($(window).width() > 768) {
                nav.find('.navbar-nav').show();
            }
        });

        // Smooth scroll for anchor links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var target = $(this.getAttribute('href'));
            if(target.length) {
                $('html, body').stop().animate({scrollTop: target.offset().top}, 1000);
            }
        });

        // Add active class to current menu item
        var pathname = window.location.pathname;
        $('#site-navigation a').each(function() {
            if(this.pathname === pathname) {
                $(this).parent('li').addClass('active');
            }
        });

        // Lazy load images
        $('img').on('error', function() {
            $(this).attr('src', 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="300" height="200"%3E%3Crect fill="%23f0f0f0" width="300" height="200"/%3E%3Ctext x="50%25" y="50%25" font-family="Arial" font-size="14" fill="%23999" text-anchor="middle" dominant-baseline="middle"%3EImage Not Found%3C/text%3E%3C/svg%3E');
        });
    });

})(jQuery);
