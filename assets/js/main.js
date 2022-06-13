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
    var BrandFive = function ($scope, $) {

        $scope.find('.brandFiveSwiper').each(function () {
            var settings = $(this).data('softim');

            // Js Start
            var swiper = new Swiper('.brand-slider-two', {
                slidesPerView: 5,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    speeds: 2000,
                    delay: 4000,
                },
                speed: 1000,
                // breakpoints: {
                //     991: {
                //         slidesPerView: 3,
                //     },
                //     767: {
                //         slidesPerView: 2,
                //     },
                //     575: {
                //         slidesPerView: 2,
                //     },
                //     420: {
                //         slidesPerView: 1,
                //     },
                // }
            });
            // Js End
        });

    };
    var Bannerslider2 = function ($scope, $) {

        $scope.find('.banner-slider-home-04').each(function () {
            var settings = $(this).data('softim');

            // Js Start
            var swiper = new Swiper('.banner-slider', {
                slidesPerView: 2,
                spaceBetween: 30,
                centeredSlides: true,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
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
                        slidesPerView: 2,
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
    var Testislider1 = function ($scope, $) {

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
    var Testislider2 = function ($scope, $) {

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
    var Testislider3 = function ($scope, $) {

        $scope.find('.client-slider-area').each(function () {
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
    var Testislider4 = function ($scope, $) {

        $scope.find('.home-three-banner').each(function () {
            var settings = $(this).data('softim');

            // Js Start

            // Banner Three Slider
            var swiper = new Swiper('.banner-three-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: true,
                effect: "fade",
                navigation: {
                    nextEl: '.next-text',
                    prevEl: '.prev-text',
                },
                pagination: {
                    el: '.custom-pagination',
                    type: 'progressbar',
                },
                // autoplay: {
                //   speeds: 2000,
                //   delay: 4000,
                // },
                speed: 1500,
                breakpoints: {
                    1300: {
                        slidesPerView: 1,
                        centeredSlides: false,
                    },
                    1199: {
                        slidesPerView: 1,
                        centeredSlides: false,
                    },
                    991: {
                        slidesPerView: 1,
                        centeredSlides: false,
                    },
                    767: {
                        slidesPerView: 1,
                    },
                    575: {
                        slidesPerView: 1,
                        centeredSlides: false,
                    },
                }
            });
            // Js End
        });

    };
    var ChooseSlider1 = function ($scope, $) {

        $scope.find('.chooseSliderThree').each(function () {
            var settings = $(this).data('softim');

            // Js Start

            // Banner Three Slider
            var swiper = new Swiper('.service-slider-two', {
                slidesPerView: 5,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                autoplay: {
                    speeds: 2000,
                    delay: 4000,
                },
                speed: 1000,
                breakpoints: {
                    1590: {
                        slidesPerView: 3,
                    },
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
    var ClientSlider = function ($scope, $) {

        $scope.find('.clientSlider').each(function () {
            var settings = $(this).data('softim');

            // Js Start

            var swiper = new Swiper('.client-slider-three', {
                slidesPerView: 1,
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
    var Faq = function ($scope, $) {

        $scope.find('.faq-wrapper').each(function () {
            var settings = $(this).data('softim');

            // Js Start
            // faq
            $('.faq-wrapper .faq-title').on('click', function (e) {
                var element = $(this).parent('.faq-item');
                if (element.hasClass('open')) {
                    element.removeClass('open');
                    element.find('.faq-content').removeClass('open');
                    element.find('.faq-content').slideUp(300, "swing");
                } else {
                    element.addClass('open');
                    element.children('.faq-content').slideDown(300, "swing");
                    element.siblings('.faq-item').children('.faq-content').slideUp(300, "swing");
                    element.siblings('.faq-item').removeClass('open');
                    element.siblings('.faq-item').find('.faq-title').removeClass('open');
                    element.siblings('.taq-item').find('.faq-content').slideUp(300, "swing");
                }
            });
            // Js End
        });

    };
    var Odometer = function ($scope, $) {

        $scope.find('.counter-single-items').each(function () {
            var settings = $(this).data('softim');

            // Js Start
            if ($(".statistics-item,.icon-box-items,.counter-single-items").length) {
                $(".statistics-item,.icon-box-items,.counter-single-items").each(function () {
                    $(this).isInViewport(function (status) {
                        if (status === "entered") {
                            for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
                                var el = document.querySelectorAll('.odometer')[i];
                                el.innerHTML = el.getAttribute("data-odometer-final");
                            }
                        }
                    });
                });
            }
            // Js End
        });

    };

    var Masonary = function ($scope, $) {

        $scope.find('.gallery-section').each(function () {
            var settings = $(this).data('softim');

            // init Isotope
            var $grid = $('.grid').isotope({
                // options
                itemSelector: '.grid-item',
                // percentPosition: true,
                masonry: {
                    columnWidth: '.grid-item'
                }
            });
            var $gallery = $(".grid").isotope({

            });
// filter items on button click
            $('.filter-btn-group').on( 'click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            });
            $('.filter-btn-group').on( 'click', 'button', function() {
                $(this).addClass('active').siblings().removeClass('active');
            });

            $(window).on('load', function() {
                galleryMasonaryTwo();
            })

            function galleryMasonaryTwo(){
                // filter functions
                var $grid = $(".grid");
                var filterFns = {};
                $grid.isotope({
                    itemSelector: '.grid-item',
                    masonry: {
                        columnWidth: 0,
                    }
                });
                // bind filter button click
                $('ul.filter').on('click', 'li', function () {
                    var filterValue = $(this).attr('data-filter');
                    // use filterFn if matches value
                    filterValue = filterFns[filterValue] || filterValue;
                    $grid.isotope({
                        filter: filterValue
                    });
                });
                // change is-checked class on buttons
                $('ul.filter').each(function (i, buttonGroup) {
                    var $buttonGroup = $(buttonGroup);
                    $buttonGroup.on('click', 'li', function () {
                        $buttonGroup.find('.active').removeClass('active');
                        $(this).addClass('active');
                    });
                });
            }

            // Js End
        });

    };


    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            console.log('Elementor editor mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-widget.default', Bannerslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-5-widget.default', BrandFive);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-banner-four-widget.default', Bannerslider2);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-3-widget.default', Bannerslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-team-one-widget.default', Teamslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-team-two-widget.default', Teamslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-team-three-widget.default', Teamslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-team-five-widget.default', Odometer);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-one-widget.default', Testislider1);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-five-widget.default', Testislider1);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-two-widget.default', Testislider2);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-three-widget.default', Testislider3);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-banner-three-widget.default', Testislider4);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-choose-three-widget.default', ChooseSlider1);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-four-widget.default', ClientSlider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-faq-one-widget.default', Faq);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-service-core-widget.default', Faq);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-gallery-widget.default', Masonary);

        } else {
            console.log('Elementor frontend mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', AgelandGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-widget.default', Bannerslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-5-widget.default', BrandFive);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-banner-four-widget.default', Bannerslider2);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-3-widget.default', Bannerslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-team-one-widget.default', Teamslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-team-two-widget.default', Teamslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-team-three-widget.default', Teamslider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-team-five-widget.default', Odometer);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-one-widget.default', Testislider1);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-five-widget.default', Testislider1);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-two-widget.default', Testislider2);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-three-widget.default', Testislider3);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-banner-three-widget.default', Testislider4);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-choose-three-widget.default', ChooseSlider1);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-four-widget.default', ClientSlider);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-faq-one-widget.default', Faq);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-service-core-widget.default', Faq);
            elementorFrontend.hooks.addAction('frontend/element_ready/softim-gallery-widget.default', Masonary);
        }
    });
    console.log('addon js loaded');
})(jQuery);