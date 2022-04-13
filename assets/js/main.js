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


    var Softimslider = function ($scope, $) {

        $scope.find('.client-area').each(function () {
            var settings = $(this).data('softim');

            // Js Start
            var swiper = new Swiper('.client-slider', {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.client-pagination',
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + '">' + (index + 1) + '</span>';
                    },
                },
                navigation: {
                    nextEl: '.slider-next',
                    prevEl: '.slider-prev',
                },
                autoplay: {
                    speeds: 2000,
                    delay: 4000,
                },
                speed: 1000,
                breakpoints: {
                    1199: {
                        slidesPerView: 2,
                    },
                    991: {
                        slidesPerView: 2,
                    },
                    767: {
                        slidesPerView: 1,
                    },
                    575: {
                        slidesPerView: 1,
                    },
                }
            });
            // Js End
        });

    };
    var Bannerslider = function ($scope, $) {

        $scope.find('.brand-slider-area').each(function () {
            var settings = $(this).data('softim');

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
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-one-widget.default', Softimslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-widget.default', Bannerslider);

        } else {
            console.log('Elementor frontend mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-one-widget', Softimslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-widget.default', Bannerslider);
        }
    });
    console.log('addon js loaded');
})(jQuery);