$(document).ready(function(){
	"use strict";
	/* =================================
	NAVBAR
	=================================== */
	jQuery(window).scroll(function () {
		var top = jQuery(document).scrollTop();
		//var batas = jQuery(window).height();
		var batas = 200;

		if ( top > batas ) {
			jQuery('.navbar-main').addClass('stiky');
		}else {
			jQuery('.navbar-main').removeClass('stiky');
		}
	});

	/* =================================
	BANNER ROTATOR IMAGE
	=================================== */
	$('#slides').superslides({
		//animation: "fade",
		play: 5000,
		slide_speed: 800,
		pagination: true,
		hashchange: false,
		scrollable: true,

	});

	/* =================================
	BACK TO TOP
	=================================== */
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) {
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

	/* =================================
	ISOTOPE
	=================================== */
	$(window).load(function(){
		// INITIALIZE ISOTOPE
		var $container = $('.grid-services');
		$container.isotope({
			filter: '*',
		});
	 	$('.portfolio_filter a').on('click', function() {
	 		$('.portfolio_filter .active').removeClass('active');
			$(this).addClass('active');

			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter: selector,
				animationOptions: {
					duration: 500,
					animationEngine : "jquery"
				}
			});
			return false;
	 	});
	});

	/* =================================
	OWL
	=================================== */
	var caro = $("#caro");
	caro.owlCarousel({
		items: 1,
		autoplay: false,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		loop: true,
	});

	var owl = $("#owl-testimony");
	owl.owlCarousel({
		autoplay: true,
		stopOnHover: true,
		margin: 30,
		items : 2,
		nav: true,
		navText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
		dots: true,
		loop: true,
		responsive:{
			0:{
				items:1
			},
			1000:{
				items:2
			}
		}
	});

	var testimony2 = $("#owl-testimony2");
	testimony2.owlCarousel({
		items: 1,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		navText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
		dots: true,
		loop: true
	});

	/* =================================
	FAQ
	=================================== */
	$('.panel-heading a').on('click', function() {
		$('.panel-heading').removeClass('active');
		$(this).parents('.panel-heading').addClass('active');
	});
});





