
$(document).ready(function(){
	reloadIndex();
});

function reloadIndex(){
	$('.pagination a').bind("click",function(e){
		
        e.preventDefault();
        var link = $(this).attr('href');
        $('#publicaciones').fadeOut(900, function(){	
            $(this).load(link + ' #publicaciones', function() {
                $(this).fadeIn(500);
                reloadIndex();
            });
        });
    });
}


$(function() {
var fixadent = $("#menu"), pos = fixadent.offset();
var main = $(".ia-container");
var mainCat= $("#mainContainer");
var slide= $("#slide");
$(window).scroll(function() {
if($(this).scrollTop() > (pos.top + 0) && fixadent.css('position') == 'static') 
	{ 
		fixadent.addClass('fixed'); 
		main.addClass('mainFixed');
		slide.addClass('slideFixed');
        mainCat.addClass("mainFixed");
	}
else if($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed'))
	{ 
		fixadent.removeClass('fixed'); 
		main.removeClass('mainFixed');
		slide.removeClass('slideFixed');
        mainCat.removeClass("mainFixed");
	}
})
});

$( '#menuIntL li:has(ul)' ).doubleTapToGo();








 
    
