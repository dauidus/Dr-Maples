// JavaScript Document

// Animation Stuff 

$(window).load(function() {

	$('#leaves').delay(700);
	
	
	$('#greenleaf').sprite({fps: 0, no_of_frames: 1})
		.spRandom({top: 0, bottom: 100, left: 0, right: 60});
	$('#redleaf').sprite({fps: 0, no_of_frames: 1})
		.spRandom({top: 20, bottom: 110, left: 50, right: 60});
	$('#cloud1').pan({fps:15, speed: 3.5, dir: 'left', depth: 8});
	$('#cloud2').pan({fps:15, speed: 3.5, dir: 'left', depth: 8});
	$('#cloud3').pan({fps:15, speed: 3.5, dir: 'left', depth: 8});	

});