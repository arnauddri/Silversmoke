$('#myTab a').click(function (e) {
	e.preventDefault()
	$(this).tab('show')
});

/* $('.usp1').hover(function(){
	$(this).height(200);
	$(this).width(300);
});
*/


$.stellar();


$(document).scroll(function() {

	var paytop=Math.min(($(document).scrollTop())/(jQuery('.progress').offset().top),100);

	$('.progress-bar').width(Math.min(Math.round(100*paytop)-10,90)+'%');
	$('.percent-text').html(Math.round(100*paytop)+'%');
	$('.puffs').html(Math.round(($(document).scrollTop()*0.6)));
	$('.cigs').html(Math.round(($(document).scrollTop()*0.6)/11));
	$('.packs').html(Math.round(($(document).scrollTop()*0.6)/(11*20)));

	/*
	var alpha = Math.min(0.5 + 0.4 * $(this).scrollTop() / 210, 0.9);
	var channel = Math.round(alpha * 255);
	$('.progress-bar').css('background-color', 'rgb(' + Math.round(alpha * 241) + ',' + Math.round(alpha * 196)+ ',' + Math.round(alpha * 15) + ')');
	*/

});


$('.usp1').hover(
	function() {
		$('.usp1-1').stop().animate({ top: -200 }); 
		$('.usp1-2').stop().animate({ top: 0 }); 
	}, 
	function() {
		$('.usp1-1').stop().animate({ top: 0 }); 
		$('.usp1-2').stop().animate({ top: 200 }); 
	}
	);

$('.usp2').hover(
	function() {
		$('.usp2-1').stop().animate({ top: -200 }); 
		$('.usp2-2').stop().animate({ top: 0 }); 
	}, 
	function() {
		$('.usp2-1').stop().animate({ top: 0 }); 
		$('.usp2-2').stop().animate({ top: 200 }); 
	}
	);

$('.usp3').hover(
	function() {
		$('.usp3-1').stop().animate({ top: -200 }); 
		$('.usp3-2').stop().animate({ top: 0 }); 
	}, 
	function() {
		$('.usp3-1').stop().animate({ top: 0 }); 
		$('.usp3-2').stop().animate({ top: 200 }); 
	}
	);

$('.usp4').hover(
	function() {
		$('.usp4-1').stop().animate({ top: -200 }); 
		$('.usp4-2').stop().animate({ top: 0 }); 
	}, 
	function() {
		$('.usp4-1').stop().animate({ top: 0 }); 
		$('.usp4-2').stop().animate({ top: 200 }); 
	}
	);



var catTopPosition4 = jQuery('#whats-included').offset().top-50;

    // When #scroll is clicked
    jQuery('#signup').click(function(){
        // Scroll down to 'catTopPosition'
        jQuery('html, body').animate({scrollTop:catTopPosition4}, 'slow');
        // Stop the link from acting like a normal anchor link
        return false;
    });

    jQuery('#reserve').click(function(){
        // Scroll down to 'catTopPosition'
        jQuery('html, body').animate({scrollTop:catTopPosition4}, 'slow');
        // Stop the link from acting like a normal anchor link
        return false;
    });



    $(document).ready(function() { 


    	$('#congrats').height($('#congrats-container').height());
    	$('#competition-desc').height($('#competition-image').height());
    	$('#consumption-cap .col-md-6.iphone-screenshot').height($('#consumption-cap .col-md-6.desc').height());

    	$('#consumption-cap-iphone').height($('#consumption-cap-desc').height());

    });





