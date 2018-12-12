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
            noSwiping: false,
            autoHeight: true,
            resizeReInit: true,
            noSwipingClass: 'owl-carousel',
            onTouchStart: function(swiper,event) {
                var button = event.target.className;
                if (button.indexOf('button-test-swiper') >= 0 ) {
                    if ($('.sub_line').length) {
                        $('body').find('.sub_line').fadeToggle('fast',function(){
                            swiper2.update();
                        });
                    }
                }
            },
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
        });/*
        swiper2.on("click",function(swiper,event){
            console.log('event');
            if ($('#show_content').length) {
                $('body').find('#show_content').fadeToggle('fast',function(){
                    var heightE = $('body').find('.container-text-heiht-swiper').innerHeight();
                    $('body').find('.swiper2 .swiper-slide.swiper-slide-active').height(heightE);
                    swiper2.update();
                });
            }
        });*/
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
    });

    $('.slide-chude').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 1.6,
        dots: false,
    });

    $('.slide-album').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 2.3,
        dots: false,
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

    $(document).on("click",".reply_comment",function(e){
        e.preventDefault();
        var $this = $(this);
        $this.parents('.block_form_comment').find('.form_reply_comment').slideToggle('fast');
    })
});