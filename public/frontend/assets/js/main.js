(function($){
	"use strict";
	jQuery(document).on('ready', function () {
        // Mean Menu
		jQuery('.mean-menu').meanmenu({
			meanScreenWidth: "991"
		});

		// Search Popup JS
		$(".search-popup-icon").on('click',  function() {
			$('.searchBoxTop').toggleClass('active');
		});
		$(".searchClose").on('click',  function() {
			$('.searchBoxTop').removeClass('active');
		});	

		// Preloader Text Animation
		$(".loader").append("<div class='glitch-window'></div>");
		// Fill div with clone of real header
		$( "h1.glitched" ).clone().appendTo( ".glitch-window" );
		
		// Magnific Popup
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

		// Header Sticky
		$(window).on('scroll',function() {
            if ($(this).scrollTop() > 120){  
                $('.artflex-nav').addClass("is-sticky");
            }
            else{
                $('.artflex-nav').removeClass("is-sticky");
            }
		});

        // Popup Gallery
		$('.popup-btn').magnificPopup({
            type: 'image',
            gallery:{
                enabled:true
            }
		});
	
		// Masonary Portfolio
		var $container = $('.grid');
		$container.masonry({
			itemSelector: '.item'
		});

		// Masonary Blog
		var $container = $('.blog-items');
		$container.masonry({
			itemSelector: '.grid-items'
		});

		// Home Slides
		$('.home-slides').owlCarousel({
			loop:true,
			nav:false,
			dots:true,
			smartSpeed: 2000,
			animateOut: 'slideOutDown',
			autoplayHoverPause:true,
    		animateIn: 'fadeInUp',
			items:1,
			autoplay:true,
			navText: [
                "<i class='icofont-arrow-left'></i>",
                "<i class='icofont-arrow-right'></i>"
            ],
		});
		$(".home-slides").on("translate.owl.carousel", function(){
            $(".main-banner h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner p").removeClass("animated zoomIn").css("opacity", "0");
            $(".main-banner .btn").removeClass("animated fadeInDown").css("opacity", "0");
        });
        $(".home-slides").on("translated.owl.carousel", function(){
            $(".main-banner h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner p").addClass("animated zoomIn").css("opacity", "1");
            $(".main-banner .btn").addClass("animated fadeInDown").css("opacity", "1");
		});

		// Blog Home Slides
		$('.blog-home-slides').owlCarousel({
			loop:true,
			nav:true,
			dots:false,
			smartSpeed: 2000,
			animateOut: 'slideOutDown',
			autoplayHoverPause:true,
    		animateIn: 'fadeInUp',
			autoplay:true,
			navText: [
                "<i class='icofont-arrow-left'></i>",
                "<i class='icofont-arrow-right'></i>"
			],
			responsive:{
                0:{
                    items:1,
				},
				576:{
					items:2,
				},
                768:{
                    items:2,
                },
                1200:{
                    items:3,
				}
            }
		});

		// Feedback Slides
		$('.feedback-slides').owlCarousel({
			loop:true,
			nav:true,
			dots:false,
			autoplayHoverPause:true,
			items:1,
			autoplay:true,
			navText: [
                "<i class='icofont-rounded-left'></i>",
                "<i class='icofont-rounded-right'></i>"
            ],
		});

		// Partner Slides
		$('.partner-slides').owlCarousel({
			loop:true,
			nav:false,
			dots:false,
			autoplayHoverPause:true,
			autoplay:true,
			responsive:{
                0:{
                    items:2,
                },
                768:{
                    items:3,
                },
                1200:{
                    items:5,
				}
            }
		});

		// Project Slides
		$('.project-slides').owlCarousel({
			loop:true,
			nav:false,
			dots:false,
			autoplayHoverPause:true,
			autoplay:true,
			responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
				},
				576:{
					items: 2,
				},
                1200:{
                    items:3,
				},
                1500:{
                    items:4,
                }
            }
		});

		// Services Slides
		$('.services-slides').owlCarousel({
			loop:true,
			nav:false,
			dots:true,
			autoplayHoverPause:true,
			autoplay:true,
			responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:3,
				}
            }
		});

		//Progress Bar
		if($('.progress-line').length){
			$('.progress-line').appear(function(){
				var el = $(this);
				var percent = el.data('width');
				$(el).css('width',percent+'%');
			},{accY: 0});
		}
		if($('.count-box').length){
			$('.count-box').appear(function(){
				var $t = $(this),
					n = $t.find(".count-text").attr("data-stop"),
					r = parseInt($t.find(".count-text").attr("data-speed"), 10);

				if (!$t.hasClass("counted")) {
					$t.addClass("counted");
					$({
						countNum: $t.find(".count-text").text()
					}).animate({
						countNum: n
					}, {
						duration: r,
						easing: "linear",
						step: function() {
							$t.find(".count-text").text(Math.floor(this.countNum));
						},
						complete: function() {
							$t.find(".count-text").text(this.countNum);
						}
					});
				}
				
			},{accY: 0});
		}

		// Nice Select
		$('select').niceSelect();
		
		// Product Details Image SLides
        $(".product-img-slides").owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            touchDrag: false,
            mouseDrag: true,
            autoplay: true,
            smartSpeed: 500,
            loop: true,
            autoplayHoverPause:true,
            navText: [
            "<i class='icofont-bubble-left'></i>",
            "<i class='icofont-bubble-right'></i>"
            ],
		});

		// Portfolio Details Image SLides
        $(".portfolio-details-slides").owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            touchDrag: false,
            mouseDrag: true,
            autoplay: true,
            smartSpeed: 500,
            loop: true,
            autoplayHoverPause:true,
            navText: [
            "<i class='icofont-bubble-left'></i>",
            "<i class='icofont-bubble-right'></i>"
            ],
		});
		
		// Tabs
        $("#tabs li").on("click", function(){
            var tab = $(this).attr("id");
            if ($(this).hasClass("inactive")) {
                $(this).removeClass("inactive");
                $(this).addClass("active");
                $(this).siblings().removeClass("active").addClass("inactive");
                $("#" + tab + "_content").addClass("show");
                $("#" + tab + "_content").siblings("div").removeClass("show");
            }
		});
		
		// FAQ Accordion
        $(function() {
            $('.accordion').find('.accordion-title').on('click', function(){
                // Adds Active Class
                $(this).toggleClass('active');
                // Expand or Collapse This Panel
                $(this).next().slideToggle('fast');
                // Hide The Other Panels
                $('.accordion-content').not($(this).next()).slideUp('fast');
                // Removes Active Class From Other Titles
                $('.accordion-title').not($(this)).removeClass('active');		
            });
		});
		
		// Count Time 
        function makeTimer() {
            var endTime = new Date("June 26, 2019 17:00:00 PDT");			
            var endTime = (Date.parse(endTime)) / 1000;
            var now = new Date();
            var now = (Date.parse(now) / 1000);
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }
            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");		
        }
        setInterval(function() { makeTimer(); }, 1000);
		
		// Go to Top
        $(function(){
            //Scroll event
            $(window).on('scroll', function(){
                var scrolled = $(window).scrollTop();
                if (scrolled > 300) $('.go-top').fadeIn('slow');
                if (scrolled < 300) $('.go-top').fadeOut('slow');
            });  
            //Click event
            $('.go-top').on('click', function() {
                $("html, body").animate({ scrollTop: "0" },  500);
            });
		});
	});

	// WOW JS
	$(window).on ('load', function (){
        if ($(".wow").length) { 
            var wow = new WOW({
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       20,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
          });
          wow.init();
        }
	});
	
	// Odometer FunFact
	jQuery(document).on('ready', function() {
		$('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});
	});

	// Preloader Area
	jQuery(window).on('load', function() {
		$('.preloader').fadeOut();
	});
}(jQuery));