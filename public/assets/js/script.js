jQuery(function ($) {
	$(window).bind("load resize", function () {
		if ($(window).width() < 991) {
			new Mmenu("#mobile-menu", {
				extensions: ["position-right"]
			}, {
				offCanvas: {
					clone: true
				}
			});
		}
	});

	$('.primary-slider').slick({
		dots: false,
		arrows: true,
		slidesToShow: 1,
		slidesToScroll: 1,
	});

	$("#back-to-top").click(function () {
		$("html, body").animate({scrollTop: 0}, 300);
	});

	$('#contentTab .nav-link').on('click', function () {
		var cl = $(this).attr('data-bs-target');
		$("body").removeClass('mobi viettel vina');
		$("body").addClass(cl.replace('#', ''));
	});

	$('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
		var target = $(e.target).attr("href") // activated tab
		$('.primary-slider').slick('setPosition');
	});
});
