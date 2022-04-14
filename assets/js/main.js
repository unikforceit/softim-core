(function ($) {
    "use strict";

    var AgelandGlobal = function ($scope, $) {

        // Js Start

        $('.video').lightcase();

        $('.img-popup').lightcase();

//Create Background Image
        (function background() {
            let img = $('.bg_img');
            img.css('background-image', function () {
                var bg = ('url(' + $(this).data('background') + ')');
                return bg;
            });
        })();

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
    var Teamslider = function ($scope, $) {

        $scope.find('.team-slider-area').each(function () {
            var settings = $(this).data('softim');

            // Js Start
            var swiper = new Swiper('.team-slider', {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
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
                    991: {
                        slidesPerView: 2,
                    },
                    767: {
                        slidesPerView: 2,
                    },
                    575: {
                        slidesPerView: 1,
                    },
                }
            });
            // Js End
        });

    };
    var Testislider = function ($scope, $) {

        $scope.find('.client-area').each(function () {
            var settings = $(this).data('softim');

            // Js Start
            var swiper = new Swiper('.client-slider-two', {
                slidesPerView: 2,
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
                    991: {
                        slidesPerView: 1,
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


    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            console.log('Elementor editor mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-one-widget.default', Softimslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-widget.default', Bannerslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-team-one-widget.default', Teamslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-two-widget.default', Testislider);

        } else {
            console.log('Elementor frontend mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-one-widget', Softimslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-widget.default', Bannerslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-team-one-widget.default', Teamslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-two-widget.default', Testislider);
        }
    });
    console.log('addon js loaded');
})(jQuery);