	  
$(document).ready(function() {          
     
    /* Responsive Menu */
    $('#dl-menu').dlmenu({
          animationClasses: {
              classin: 'dl-animate-in-5',
              classout: 'dl-animate-out-5'
           }
    });


	// Button Up
	var btnUp = $('<div/>', {'class':'btntoTop'});
	btnUp.appendTo('body');
	$(document)
			.on('click', '.btntoTop', function() {
				$('html, body').animate({
					scrollTop: 0
				}, 700);
			});
			
	$(window)
			.on('scroll', function() {
				if ($(this).scrollTop() > 300)
					$('.btntoTop').addClass('active');
				else
					$('.btntoTop').removeClass('active');
			});			
});