/*

Main Javascript for jQuery Realistic Hover Effect
Created by Adrian Pelletier
http://www.adrianpelletier.com

*/

/* =Realistic Navigation
============================================================================== */

	// Begin jQuery
	
	$(document).ready(function() {


				
	/* =Shadow Nav
	-------------------------------------------------------------------------- */
	
		// Append shadow image to each LI
		
		$("#nav-shadow li a").append('<img class="shadow" src="http://drmaples.com/drmaples/wp-content/themes/TheDoctorIsIn/images/icons-shadow.jpg" width="90" height="27" alt="" />');
	
		// Animate buttons, shrink and fade shadow
		
		$("#nav-shadow li").hover(function() {
			var e = this;
		    $(e).find("a img").stop().animate({ marginTop: "9px" }, 250, function() {

		    });
		    $(e).find("img.shadow").stop().animate({ width: "50px", height: "20px", marginLeft: "21px", opacity: 0.25 }, 250);
		},function(){
			var e = this;
		    $(e).find("a img").stop().animate({ marginTop: "20px" }, 250, function() {
		    	
		    });
		    $(e).find("img.shadow").stop().animate({ width: "90px", height: "27px", marginLeft: "0", opacity: 1 }, 250);
		});
						
	// End jQuery
	
	});