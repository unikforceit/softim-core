(function ($) {
    "use strict";

    var AgelandGlobal = function ($scope, $) {

        // Js Start
        $('[data-background]').each(function () {
            $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
        });

        AOS.init();

        // Js End

    };


    var Agelandvideo = function ($scope, $) {

        $scope.find('.hero_banner').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            var $videoSrc;
            $('.video-btn').on('click', function () {
                $videoSrc = $(this).data("src");
            });
            //console.log($videoSrc);


            // when the modal is opened autoplay it
            $('#myModal').on('shown.bs.modal', function (e) {

                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
                $("#video").attr('src', $videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1");
            })


            // stop playing the youtube video when I close the modal
            $('#myModal').on('hide.bs.modal', function (e) {
                // a poor man's stop video
                $("#video").attr('src', $videoSrc);
            })
            // Js End
        });

    };
    var Bannerslider = function ($scope, $) {

        $scope.find('.brand-slider-area').each(function () {
            var settings = $(this).data('ageland');

            // Js Start
            var swiper = new Swiper('.brand-slider', {
                slidesPerView: 4,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    speeds: 2000,
                    delay: 4000,
                },
                speed: 1000,
                breakpoints: {
                    991: {
                        slidesPerView: 3,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    575: {
                        slidesPerView: 1,
                    },
                    420: {
                        slidesPerView: 1,
                    },
                }
            });
            // Js End
        });

    };


    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            console.log('Elementor editor mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-banner.default', Agelandvideo);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-widget.default', Bannerslider);

        } else {
            console.log('Elementor frontend mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/ageland-banner.default', Agelandvideo);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-widget.default', Bannerslider);
        }
    });
    console.log('addon js loaded');
})(jQuery);