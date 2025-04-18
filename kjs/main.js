(function($) {
    "use strict";
    $(window).on('scroll', function(event) { var scroll = $(window).scrollTop(); if (scroll < 20) { $(".navigation").removeClass("sticky"); } else { $(".navigation").addClass("sticky"); } });
    var scrollLink = $('.page-scroll');
    $(window).scroll(function() {
        var scrollbarLocation = $(this).scrollTop();
        scrollLink.each(function() {
            var sectionOffset = $(this.hash).offset().top - 73;
            if (sectionOffset <= scrollbarLocation) {
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        });
    });
    $(".navbar-nav a").on('click', function() { $(".navbar-collapse").removeClass("show"); });
    $(".navbar-toggler").on('click', function() { $(this).toggleClass("active"); });
    $(".navbar-nav a").on('click', function() { $(".navbar-toggler").removeClass('active'); });
    new WOW().init();
    $('.counter').counterUp({ time: 1000 });
    $('#producto').mixItUp();
    var owl = $(".touch-slider");
    owl.owlCarousel({ navigation: false, pagination: true, slideSpeed: 1000, stopOnHover: true, autoPlay: true, items: 2, itemsDesktop: [1199, 2], itemsDesktopSmall: [1024, 2], itemsTablet: [600, 1], itemsMobile: [479, 1] });
    $('.touch-slider').find('.owl-prev').html('<i class="fa fa-chevron-left"></i>');
    $('.touch-slider').find('.owl-next').html('<i class="fa fa-chevron-right"></i>');
    $(window).on('scroll', function() { if ($(window).scrollTop() > 200) { $('.header-top-area').addClass('menu-bg'); } else { $('.header-top-area').removeClass('menu-bg'); } });
    $('.video-popup').magnificPopup({ disableOn: 700, type: 'iframe', mainClass: 'mfp-fade', removalDelay: 160, preloader: false, fixedContentPos: false, });
    var scrollAnimationTime = 1200,
        scrollAnimation = 'easeInOutExpo';
    $('a.scrollto').on('bind', 'click.smoothscroll', function(event) {
        event.preventDefault();
        var target = this.hash;
        $('html, body').stop().animate({ 'scrollTop': $(target).offset().top }, scrollAnimationTime, scrollAnimation, function() { window.location.hash = target; });
    });
    var offset = 200;
    var duration = 500;
    $(window).scroll(function() { if ($(this).scrollTop() > offset) { $('.back-to-top').fadeIn(400); } else { $('.back-to-top').fadeOut(400); } });
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 600);
        return false;
    })
    $('.lightbox').nivoLightbox({ effect: 'fadeScale', keyboardNav: true, });
    $.stellar({ horizontalScrolling: true, verticalOffset: 40, responsive: true });
    $('#loader').fadeOut();

}(jQuery));