// JavaScript Document

// Animation Stuff 
		(function($) {
			$(document).ready(function() {
				$('#cloud1').pan({fps:5, speed: 5.0, dir: 'left', depth: 8});
				$('#cloud2').pan({fps:5, speed: 5.0, dir: 'left', depth: 8});
				$('#cloud3').pan({fps:5, speed: 5.0, dir: 'left', depth: 8});
				$('#cloud4').pan({fps:5, speed: 1.0, dir: 'left', depth: 8});
				$('#cloud5').pan({fps:5, speed: 1.0, dir: 'left', depth: 8});
				$('#cloud6').pan({fps:5, speed: 1.0, dir: 'left', depth: 8});

			});

		});