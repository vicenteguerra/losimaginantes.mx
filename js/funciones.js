

$(function() {
var fixadent = $("#menu"), pos = fixadent.offset();
var main = $(".ia-container");
var slide= $("#slide");
$(window).scroll(function() {
if($(this).scrollTop() > (pos.top + 0) && fixadent.css('position') == 'static') 
	{ 
		fixadent.addClass('fixed'); 
		main.addClass('mainFixed');
		slide.addClass('slideFixed');
	}
else if($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed'))
	{ 
		fixadent.removeClass('fixed'); 
		main.removeClass('mainFixed');
		slide.removeClass('slideFixed');
	}
})
});

$( '#menuIntL li:has(ul)' ).doubleTapToGo();


 
    
