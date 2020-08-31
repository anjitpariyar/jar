

$(document).ready(function(){
	
	
	$('.main__carousel').slick({
		infinite: false,
		lazyLoad: 'ondemand',
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows:false,
		autoplay:false,	
		adaptiveHeight:false,
		dots:false,
		prevArrow:"<button class='slick-prev'><i class='material-icons  material-icons-outlined'>chevron_left</i></button>",
		nextArrow:"<button class='slick-next'><i class='material-icons material-icons-outlined'>chevron_right</i></button>",
		responsive: [
		{
			breakpoint: 836,
			settings: {
				slidesToShow: 1.3,
			}
		},
		]
	});

})
