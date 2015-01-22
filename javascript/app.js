// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

// trigger for joyride demo in KitchenSink demo
$('#start-jr').on('click', function() {
	$(document).foundation('joyride','start');
});

var navigation = responsiveNav(".nav-collapse", {
	insert: "before"
});

$('.slick-sponsors').slick({
	infinite: true,
	speed: 300,
	slidesToShow: 5,
	slidesToScroll: 1,
	autoplay: true,
	responsive: [
	{
		breakpoint: 1024,
		settings: {
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
		}
	},
	{
		breakpoint: 700,
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
});

$(document).ready(function() {
  $(".unveil").unveil();
});