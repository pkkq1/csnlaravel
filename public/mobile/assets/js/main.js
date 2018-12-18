var swiper1 = new Swiper('.swiper1', {
    slidesPerView: 2,
    paginationClickable: true,
    freeMode: true,
    loop: false,
    resizeReInit: true,
    watchSlidesProgress: true,
    onSetTransition: function(swiper) {
        var n = swiper.activeIndex;
        var slideActive = [];
        for (var i = 0; i < swiper.slides.length; i++) {
            var slide = swiper.slides[i];
            slideActive[i] = $(slide).position().left
        }
        var translate = slideActive[n];
        $(".swiper1 .swiper-wrapper").css({
            transform: 'translate3d(-' + translate + 'px,0,0)'
        });
    },
    onTab: function(swiper) {
        var n = swiper1.clickedIndex;
    }
});
swiper1.slides.each(function(index, val) {
    var ele = $(this);
    ele.on("click", function() {
        setCurrentSlide(ele, index);
        swiper2.slideTo(index, 300, false);
        swiper1.slideTo(index, 300, false);
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
    onSlideChangeEnd: function(swiper) {
        var n = swiper.activeIndex;
        setCurrentSlide($(".swiper1 .swiper-slide").eq(n), n);
        swiper1.slideTo(n, 300, false);
    },
    onTransitionEnd: function(swiper) {
        if (typeof slideSwiperChange !== 'undefined' && typeof slideSwiperChange === 'function') {
            slideSwiperChange(swiper, 'drag');
        }
    }
});

function setCurrentSlide(ele, index) {
    $(".swiper1 .swiper-slide").removeClass("selected");
    ele.addClass("selected");
}

jQuery(document).ready(function($) {
    'use strict';
    // $('#time_player').slider();
    // $('#playlist_time_player').slider();
    // $('#binhluan_time_player').slider();

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

    $(document).on("click", ".reply_comment", function(e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.block_form_comment').find('.form_reply_comment').slideToggle('fast');
    })

    // Hiển thị sub
    $(document).on("click", ".button-test-swiper", function(e) {
        e.preventDefault();
        $('body').find('#show_content').fadeToggle('fast', function() {
            swiper2.update();
        });
    })
});