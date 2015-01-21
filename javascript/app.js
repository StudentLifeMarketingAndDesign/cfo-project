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

var hello = "world";
var goodbye = "world";
var yellow = "blue";
var green = "yellow";
var blue = "black";