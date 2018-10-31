$(document).ready(function(){

	// Tabs
	// $('.tabs-nav').prepend('<div class="substrate"></div>');

	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings().hide(0);
		$(this).addClass('current').siblings().removeClass('current');

		// var left = $(this).position().left - 1;
		// var width = $(this).outerWidth() + 2;

		// $(this).closest('.tabs-nav').children('.substrate').css({'left': left+'px', 'width': width+'px'});
	});

	setTimeout(function(){
		$("[data-tab].current").click();
	}, 300);

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'left',
		easyClose: true,
		menuWidth: '260px'
	});


	// Sliders
	$('.reviews-slider').slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					dots: true,
					arrows: true
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					dots: true,
					arrows: false
				}
			}
		]
	});

	$('.features-slider').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					dots: true,
					arrows: true
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					dots: true,
					arrows: true,
					infinite: true
				}
			}
		]
	});

	$('.products-slider').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					dots: true,
					arrows: false
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					dots: true,
					arrows: false,
					infinite: true
				}
			}
		]
	});

	$('.stats-slider').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 3,
		dots: false,
		arrows: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					dots: true,
					arrows: true
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					dots: true,
					arrows: true,
					adaptiveHeight: true,
					infinite: true
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
					arrows: true,
					adaptiveHeight: true,
					infinite: true
				}
			}
		]
	});

	$('.licensies-slider').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					dots: true
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					dots: true
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					dots: true
				}
			},
			{
				breakpoint: 375,
				settings: {
					slidesToShow: 1,
					dots: true
				}
			}
		]
	});

	$('.clients-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					dots: true
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					dots: true
				}
			}
		]
	});

	// Odometer
	window.odometerOptions = {
		auto: false,
		selector: '.odometer',
		format: '( ddd),dd',
		duration: 1500,
		theme: 'minimal',
		animation: 'count'
	};

	$(window).scroll(function(){
		var elem = $('.odometer');

		elem.each(function(){
			if ($(document).scrollTop() >= $(this).offset().top - $(window).height() * 0.9) {
				$(this).html($(this).data('val'));
			}
		});
	});

	// Parallax
	if ( $('div').is('#parallax-viewport') ) {
		var scene = document.getElementById('parallax-viewport');
		var parallaxInstance = new Parallax(scene);
	}

	// Top Nav
	$('.top-nav > li').hover(function(){
		clearTimeout($.data(this,'timer'));
		$('ul',this).stop(true,true).slideDown(200);
		$('ul',this).css({'z-index': 55});
	}, function(){
		$.data(this,'timer', setTimeout($.proxy(function() {
			$('ul',this).stop(true,true).slideUp(200);
			$('ul',this).css({'z-index': 50});
		}, this), 200));
	});

	// Tilt JS
	$('.add-tilt').tilt({
		perspective: 1500
	});

	// Lightbox
	lightbox.option({
		albumLabel: "Изображение %1 из %2"
	})

	// Accordions
	$('.accordion .accordion-header').click(function(){
		$(this).siblings('.accordion-content').stop().slideToggle(300);
		$(this).toggleClass('opened');
	});

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == '') {
				cur_url = 'index.php';
			}

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
				$(this).parents('li').addClass('current-menu-parent');
			}
		});
	});
});