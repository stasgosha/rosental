$(function(){

	// Tabs
	$('.tabs-nav').prepend('<div class="substrate"></div>');

	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings().hide(0);
		$(this).addClass('current').siblings().removeClass('current');

		var left = $(this).position().left - 1;
		var width = $(this).outerWidth() + 2;

		$(this).closest('.tabs-nav').children('.substrate').css({'left': left+'px', 'width': width+'px'});
	});

	setTimeout(function(){
		$("[data-tab].current").click();
	}, 300);


	// Sliders
	$('.reviews-slider').slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: false,
		arrows: true
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
	var scene = document.getElementById('parallax-viewport');
	var parallaxInstance = new Parallax(scene);

	// Top Nav
	$('.top-nav > li').hover(function(){
		clearTimeout($.data(this,'timer'));
		$('ul',this).stop(true,true).slideDown(200);
		$('ul',this).css({'z-index':55});
	}, function(){
		$.data(this,'timer', setTimeout($.proxy(function() {
			$('ul',this).stop(true,true).slideUp(200);
			$('ul',this).css({'z-index':50});
		}, this), 200));
	});
});