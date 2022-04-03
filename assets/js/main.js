;(function ($) {
    "use strict";
    /*---------------------------------------------------
      * Initialize all widget js in elementor init hook
      ---------------------------------------------------*/
    $(window).on('elementor/frontend/init', function () {
        // Brand Slider
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-brand-carousel-one-widget.default', function ($scope) {
            activeBrandSlider($scope);
        });
        // Brand Slider
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-gallery-carousel-one-widget.default', function ($scope) {
            activeGallerySlider($scope);
        });
        // Case Slider
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-performance-single-item-widget.default', function ($scope) {
            activePerformanceSliderOne($scope);
        });
        // Case Slider
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-course-slider-one-widget.default', function ($scope) {
            activePerformanceSliderOne($scope);
        });
        // Header Slider Three
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-header-slider-three-widget.default', function ($scope) {
            activeHeaderSliderOne($scope);
        });
        // Service Slider
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-service-slider-one-widget.default', function ($scope) {
            activeServiceGridSliderOne($scope);
        });
        // Service Slider Four
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-service-slider-four-widget.default', function ($scope) {
            activeServiceGridSliderOne($scope);
        });
        // Testimonial Slider one
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-one-widget.default', function ($scope) {
            activeTestimonialSliderOne($scope);
        });
        // Testimonial Slider two
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-two-widget.default', function ($scope) {
            activeTestimonialSliderOne($scope);
        });
        // Testimonial Slider three
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-testimonial-three-widget.default', function ($scope) {
            activeTestimonialSliderOne($scope);
        });
        // Packages Slider one
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-packages-single-slider-widget.default', function ($scope) {
            activeTestimonialSliderOne($scope);
        });
        // Packages Slider two
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-packages-single-slider-two-widget.default', function ($scope) {
            activeTestimonialSliderOne($scope);
        });
        // Packages Slider one
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-deals-single-slider-widget.default', function ($scope) {
            activeTestimonialSliderOne($scope);
        });
        // Team Slider
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-team-member-one-widget.default', function ($scope) {
            activeTeamMemberSliderOne($scope);
        });
        // Blog Slider
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-blog-one-widget.default', function ($scope) {
            activeBlogGridSliderOne($scope);
        });
        // Blog Slider Two
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-blog-two-widget.default', function ($scope) {
            activeBlogGridSliderOne($scope);
        });
        // Blog Slider Three
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-blog-three-widget.default', function ($scope) {
            activeBlogGridSliderOne($scope);
        });
        /* Counter Up */
        elementorFrontend.hooks.addAction('frontend/element_ready/softim-counterup-one-widget.default', function ($scope) {
            counterupInit($scope.find('.count-num'));
        });

    });


    $(window).on('elementor/frontend/init', function () {

        elementorFrontend.hooks.addAction('frontend/element_ready/global', function ($scope, $) {
            progressBarInit();
        });

    });
    // JS for rtl
    var rtlEnable = $('html').attr('dir');
    var SlickRtlValue = !(typeof rtlEnable === 'undefined' || rtlEnable === 'ltr');
    /*------------------------------
    *    Progressbar init
    * ------------------------------*/
    function progressBarInit() {
        var neatProgressInit = $('.neaterller-progress-init');
        if (neatProgressInit.length > 0) {
            neatProgressInit.each(function (value) {
                var eel = $(this);
                eel.rProgressbar({
                    percentage: eel.data('percent'),
                    fillBackgroundColor: eel.data('fillbgcolor')
                });
            });
        }
    }

    /*-----------------------------
    *   Header Slider
    * ----------------------------*/

    // main-slider
    function activeHeaderSliderOne($scope) {
        var el = $scope.find('.main-slider');
        var elSettings = el.data('settings');
        if ((el.children('div').length < 2) || (elSettings.items === '0' || elSettings.items === '' || typeof elSettings.items == 'undefined')) {
            return
        }
        let $selector = '#' + el.attr('id');

        let sliderSettings = {
            dots: false,
            infinete: elSettings.loop === 'yes',
            slidesToShow: elSettings.items,
            rtl: SlickRtlValue,
            slidesToScroll: 1,
            autoplaySpeed: elSettings.autoplaytimeout,
            autoplay: elSettings.autoplay === 'yes',
            arrows: false,
            asNavFor: '.main-slider-nav',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        }

        wowSlickInit($selector, sliderSettings);
    }


    /*----------------------------------
       Case Slider Widget
   --------------------------------*/
    function activeCaseSlider($scope) {
        var el = $scope.find('.case-carousel')
        var elSettings = el.data('settings');
        if ((el.children('div').length < 2) || (elSettings.items === '0' || elSettings.items === '' || typeof elSettings.items == 'undefined')) {
            return;
        }
        let $selector = '#' + el.attr('id');

        let sliderSettings = {
            infinite: elSettings.loop === 'yes',
            slidesToShow: elSettings.items,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            rtl: SlickRtlValue,
            autoplaySpeed: elSettings.autoplaytimeout,
            autoplay: elSettings.autoplay === 'yes',
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        }
        wowSlickInit($selector, sliderSettings);
    }

    /*----------------------------------
        Brand Slider Widget
    --------------------------------*/
    function activeBrandSlider($scope) {
        var el = $scope.find('.brands-carousel')
        var elSettings = el.data('settings');
        if ((el.children('div').length < 1) || (elSettings.items === '0' || elSettings.items === '' || typeof elSettings.items == 'undefined')) {
            return;
        }
        let $selector = '#' + el.attr('id');

        let sliderSettings = {
            infinite: elSettings.loop === 'yes',
            slidesToShow: elSettings.items,
            slidesToScroll: 1,
            arrows: elSettings.nav === 'yes',
            dots: elSettings.dot === 'yes',
            autoplaySpeed: elSettings.autoplaytimeout,
            autoplay: elSettings.autoplay === 'yes',
            centerMode: elSettings.center === 'yes',
            centerPadding: elSettings.centerpadding + 'px',
            rtl: SlickRtlValue,
            appendArrows: $scope.find('.slick-carousel-controls .slider-nav'),
            appendDots: $scope.find('.slick-carousel-controls .slider-dots'),
            prevArrow: '<div class="prev-arrow">' + elSettings.navleft + '</div>',
            nextArrow: '<div class="next-arrow">' + elSettings.navright + '</div>',
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        }
        wowSlickInit($selector, sliderSettings);
    }

    /*----------------------------------
    Gallery Slider Widget
--------------------------------*/
    function activeGallerySlider($scope) {
        var el = $scope.find('.brands-carousel')
        var elSettings = el.data('settings');
        if ((el.children('div').length < 1) || (elSettings.items === '0' || elSettings.items === '' || typeof elSettings.items == 'undefined')) {
            return;
        }
        let $selector = '#' + el.attr('id');

        let sliderSettings = {
            infinite: elSettings.loop === 'yes',
            // slidesToShow: elSettings.items,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: elSettings.nav === 'yes',
            dots: elSettings.dot === 'yes',
            autoplaySpeed: elSettings.autoplaytimeout,
            autoplay: elSettings.autoplay === 'yes',
            centerMode: elSettings.center === 'yes',
            rtl: SlickRtlValue,
            centerPadding: '375px',
            appendArrows: $scope.find('.slick-carousel-controls .slider-nav'),
            appendDots: $scope.find('.slick-carousel-controls .slider-dots'),
            prevArrow: '<div class="prev-arrow">' + elSettings.navleft + '</div>',
            nextArrow: '<div class="next-arrow">' + elSettings.navright + '</div>',
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        centerPadding: '175px',
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        centerPadding: '100px',
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        centerPadding: '25px',
                        arrows: false
                    }
                }
            ]
        }
        wowSlickInit($selector, sliderSettings);
    }

    /*----------------------------
       * performance Slider
       * --------------------------*/
    function activePerformanceSliderOne($scope) {
        var el = $scope.find('.performance-carousel');
        var elSettings = el.data('settings');
        if ((el.children('div').length < 2) || (elSettings.items === '0' || elSettings.items === '' || typeof elSettings.items == 'undefined')) {
            return
        }

        let $selector = '#' + el.attr('id');

        let sliderSettings = {
            infinite: elSettings.loop === 'yes',
            slidesToShow: elSettings.items,
            slidesToScroll: 1,
            arrows: elSettings.nav === 'yes',
            dots: elSettings.dot === 'yes',
            autoplaySpeed: elSettings.autoplaytimeout,
            autoplay: elSettings.autoplay === 'yes',
            centerMode: elSettings.center === 'yes',
            rtl: SlickRtlValue,
            appendArrows: $scope.find('.slick-carousel-controls .slider-nav'),
            appendDots: $scope.find('.slick-carousel-controls .slider-dots'),
            prevArrow: '<div class="prev-arrow">' + elSettings.navleft + '</div>',
            nextArrow: '<div class="next-arrow">' + elSettings.navright + '</div>',
            centerPadding: '0',
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        }
        wowSlickInit($selector, sliderSettings);

    }


    /*----------------------------
    * Testimonial Slider
    * --------------------------*/
    function activeTestimonialSliderOne($scope) {
        var el = $scope.find('.testimonial-carousel');
        var elSettings = el.data('settings');
        if ((el.children('div').length < 2) || (elSettings.items === '0' || elSettings.items === '' || typeof elSettings.items == 'undefined')) {
            return
        }

        let $selector = '#' + el.attr('id');

        let sliderSettings = {
            infinite: elSettings.loop === 'yes',
            slidesToShow: elSettings.items,
            slidesToScroll: 1,
            arrows: elSettings.nav === 'yes',
            dots: elSettings.dot === 'yes',
            autoplaySpeed: elSettings.autoplaytimeout,
            autoplay: elSettings.autoplay === 'yes',
            centerMode: elSettings.center === 'yes',
            vertical: elSettings.vertical === 'yes',
            rtl: SlickRtlValue,
            appendArrows: $scope.find('.slick-carousel-controls .slider-nav'),
            appendDots: $scope.find('.slick-carousel-controls .slider-dots'),
            prevArrow: '<div class="prev-arrow">' + elSettings.navleft + '</div>',
            nextArrow: '<div class="next-arrow">' + elSettings.navright + '</div>',
            centerPadding: elSettings.centerpadding + 'px',
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        centerPadding: 0,
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        centerPadding: 0,

                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerPadding: 0,
                        arrows: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerPadding: 0,
                        arrows: false

                    }
                }
            ]
        }
        wowSlickInit($selector, sliderSettings);

    }

    /*----------------------------
    * Blog Post Grid Slider
    * --------------------------*/
    function activeBlogGridSliderOne($scope) {
        var el = $scope.find('.blog-grid-carousel');
        var elSettings = el.data('settings');
        if ((el.children('div').length < 2) || (elSettings.items === '0' || elSettings.items === '' || typeof elSettings.items == 'undefined')) {
            return
        }
        let $selector = '#' + el.attr('id');
        let sliderSettings = {
            infinete: elSettings.loop === 'yes',
            slidesToShow: elSettings.items,
            slidesToScroll: 1,
            arrows: elSettings.nav === 'yes',
            appendArrows: $scope.find('.blog-slider-controls .slider-nav'),
            prevArrow: '<div class="prev-arrow">' + elSettings.navleft + '</div>',
            nextArrow: '<div class="next-arrow">' + elSettings.navright + '</div>',
            dots: false,
            rtl: SlickRtlValue,
            autoplaySpeed: elSettings.autoplaytimeout,
            autoplay: elSettings.autoplay === 'yes',
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        }
        wowSlickInit($selector, sliderSettings);
    }


    /*----------------------------
       * Service Grid Slider
       * --------------------------*/
    function activeServiceGridSliderOne($scope) {
        var el = $scope.find('.service-grid-carousel');
        var elSettings = el.data('settings');
        if ((el.children('div').length < 2) || (elSettings.items === '0' || elSettings.items === '' || typeof elSettings.items == 'undefined')) {
            return
        }

        let $selector = '#' + el.attr('id');

        let sliderSettings = {
            infinite: elSettings.loop === 'yes',
            slidesToShow: elSettings.items,
            slidesToScroll: 1,
            arrows: elSettings.nav === 'yes',
            appendArrows: $scope.find('.service-slider-controls .slider-nav'),
            prevArrow: '<div class="prev-arrow">' + elSettings.navleft + '</div>',
            nextArrow: '<div class="next-arrow">' + elSettings.navright + '</div>',
            dots: false,
            autoplaySpeed: elSettings.autoplaytimeout,
            autoplay: elSettings.autoplay === 'yes',
            centerMode: elSettings.center === 'yes',
            centerPadding: '0',
            rtl: SlickRtlValue,
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        }
        wowSlickInit($selector, sliderSettings);
    }


    /*----------------------------
         Team Member Slider
    * --------------------------*/
    function activeTeamMemberSliderOne($scope) {
        var el = $scope.find('.team-member-carousel');
        var elSettings = el.data('settings');
        if ((el.children('div').length < 2) || (elSettings.items === '0' || elSettings.items === '' || typeof elSettings.items == 'undefined')) {
            return
        }

        let $selector = '#' + el.attr('id');

        let sliderSettings = {
            infinite: elSettings.loop === 'yes',
            slidesToShow: elSettings.items,
            slidesToScroll: 1,
            arrows: elSettings.nav === 'yes',
            dots: elSettings.dot === 'yes',
            appendArrows: $scope.find('.slick-carousel-controls .slider-nav'),
            appendDots: $scope.find('.slick-carousel-controls .slider-dots'),
            prevArrow: '<div class="prev-arrow">' + elSettings.navleft + '</div>',
            nextArrow: '<div class="next-arrow">' + elSettings.navright + '</div>',
            autoplaySpeed: elSettings.autoplaytimeout,
            autoplay: elSettings.autoplay === 'yes',
            rtl: SlickRtlValue,
            centerMode: elSettings.center === 'yes',
            centerPadding: '0',
            cssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]
        }
        wowSlickInit($selector, sliderSettings);
    }

    //slick init function
    function wowSlickInit($selector, settings, animateOut = false) {
        $($selector).slick(settings);
    }

    /*------------------------------
            counter section activation
          -------------------------------*/
    function counterupInit($scope) {
        $scope.counterUp({
            delay: 20,
            time: 3000
        });
    }

    $(document).ready(function () {
        /*--------------------
          wow js init
      ---------------------*/
        new WOW().init();

        /*---------------------------------
        * Magnific Popup
        * --------------------------------*/
        $('.video-play-btn,.video-play-btn-02,.play-video-btn,.button-video').magnificPopup({
            type: 'video'
        });
        // Nice select
        $("select").niceSelect(),
            //Call Widget
            $('.call-widget-btn').on('click', function () {
                $('.call-widget-wrapper').toggleClass('open');
            });
        // book + - start here
        $(function () {
            $(".qtybutton").on("click", function () {
                var $button = $(this);
                var oldValue = $button.parent().find("input").val();
                if ($button.text() === "+") {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 1) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 1;
                    }
                }
                $button.parent().find("input").val(newVal);
            });
        });

    });

})(jQuery);

