jQuery(document).ready(function($) {
    'use strict';
    // $('#time_player').slider();
    // $('#playlist_time_player').slider();
    // $('#binhluan_time_player').slider();
    var swiperMenu = function() {
        var itemMenu = $(".swiper1").data('itemmenu');

        function setCurrentSlide(ele, index) {
            $(".swiper1 .swiper-slide").removeClass("selected");
            ele.addClass("selected");
        }

        var swiper1 = new Swiper('.swiper1', {
            slidesPerView: itemMenu,
            paginationClickable: true,
            spaceBetween: 10,
            freeMode: true,
            loop: false,
            resizeReInit: true,
            onTab: function(swiper) {
                var n = swiper1.clickedIndex;
            }
        });
        swiper1.slides.each(function(index, val) {
            var ele = $(this);
            ele.on("click", function() {
                setCurrentSlide(ele, index);
                swiper2.slideTo(index, 500, false);                
                swiper1.slideTo(index, 500, false);
                if (typeof slideSwiperChange !== 'undefined' && typeof slideSwiperChange === 'function') {
                    slideSwiperChange(swiper1, 'click');
                }
            });
        });


        var swiper2 = new Swiper('.swiper2', {
            direction: 'horizontal',
            loop: false,
            autoHeight: true,
            resizeReInit: true,
            onSlideChangeEnd: function(swiper) {
                var n = swiper.activeIndex;
                setCurrentSlide($(".swiper1 .swiper-slide").eq(n), n);
                swiper1.slideTo(n, 500, false);
            },
            onTransitionEnd: function (swiper) {
                if (typeof slideSwiperChange !== 'undefined' && typeof slideSwiperChange === 'function') {
                    slideSwiperChange(swiper, 'drag');
                }
            }
        });
        
    }
    if ($('.swiper-container').length) {
    swiperMenu();
    }
    $('.slider_home').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        center: true,
        items: 1.3,
        dots: true,
        autoplay: true,
        touchDrag: false,
        mouseDrag: false,
    });

    $('.slide-chude').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 1.6,
        dots: false,
        touchDrag: false,
        mouseDrag: false,
    });

    $('.slide-album').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 2.3,
        dots: false,
        touchDrag: false,
        mouseDrag: false,
    });

    $('.header_top .navbar-toggler').click(function(e) {
        e.preventDefault();
        var $body = $(this).parents('body');
        $(this).toggleClass('show');
        $body.toggleClass('show_menu overlay');
        $body.find('.menumain').fadeToggle('fast');
        $body.scrollTop(0);
    });

    $('.button_search').click(function(e) {
        e.preventDefault();
        var $body = $(this).parents('body');
        $body.addClass('overlay');
        $body.find('.wrap-search').addClass('open');
        $body.scrollTop(0);
    });    
    $('.button_close').click(function(e) {
        e.preventDefault();
        var $body = $(this).parents('body'); 
        $body.removeClass('overlay');
        $(this).parents('.wrap-search').removeClass('open');    
    });
    $('.toggle_wishlist').click(function(e) {
        e.preventDefault();
        var $body = $(this).parents('body'); 
        $(this).toggleClass('selector');  
    });

    var openModal = function(button,containerModal) {
        $(button).click(function(e) {
            e.preventDefault();
            var height = $(containerModal).innerHeight();
            var $body = $(this).parents('body');
            $body.addClass('overlay');
            $body.find(containerModal).fadeIn('400');            
            $body.scrollTop(0);
        });
    }
    var closeModal = function(button,containerModal) {
        $(button).click(function(e) {
            e.preventDefault();
            var $body = $(this).parents('body');
            $body.removeClass('overlay');
            $body.find(containerModal).slideUp('400'); 
            $body.scrollTop(0);
        });
    }
    openModal('.modal-edit-profile','.wrap-edit-profile');
    closeModal('.cancel_model_profile','.wrap-edit-profile');
    /*$('.cancel_model_profile').click(function(e) {
        e.preventDefault();
        var $body = $(this).parents('body');
        $body.find('.wrap-search').addClass('open');
    });*/


    $('.block_more .icon').click(function(e) {
        $('.wrap-bottom-sheet').show();
        $('.bottom-sheet').slideDown();
    });
    $('.wrap-bottom-sheet').click(function(e) {
        $(this).hide();
        $('.bottom-sheet').slideUp();
    });

    $('.block_button .icon').click(function(e) {
        $('.wrap-bottom-sheet').show();
        jQuery('.bottom-sheet').slideDown();
    });
});