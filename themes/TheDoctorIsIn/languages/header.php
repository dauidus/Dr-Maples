<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Dr. Monty Maples</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
	
	<!--CSS Main-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" />
    	<!--[if IE]>
        	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie.css" type="text/css" />
        <![endif]-->
		
	
	
	<!--Scripts-->
	<!--JQuery-->
	
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    
    
    
	<?php 
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/iphone/i', $user_agent))
            print
                '';
        
        else {
            echo
                '<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/jquery.spritely-0.2.1.js"></script>';
            };
    ?> 
            
            
             
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/script.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/javascript.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/execute.js"></script>



    
	<?php
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/iphone/i', $user_agent))
            echo    
                '<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/iphone.css"/>';
    
        else {
            print    
                '';
            };
    ?>  
	
	
	<!--Easyslider-->	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sliders/easyslider/easySlider1.7.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true,
				continuous: true 
			});
		});	
	</script>	  

	
	<!--PNG Fix-->
	<!--[if lt IE 7]>
	<script src="js/ie6pngfix/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
	DD_belatedPNG.fix('.logo, #header, #footer, #content, .zoom a span, .sliderimg, #prevBtn a, #nextBtn a');
	</script>
	<![endif]-->
	<!--End PNG Fix-->
	
    
<script language="javascript">
	$(document).ready(function() {
		window.setTimeout(function() {
			$('.skype_pnh_container').html('');
			$('.skype_pnh_print_container').removeClass('skype_pnh_print_container');
		}, 800);
	});
</script>
	  
	
</head>

<body>

		<?php 
			$user_agent = $_SERVER['HTTP_USER_AGENT'];
			if (preg_match('/iphone/i', $user_agent))
				print
					'';
			
			
			else {
				print
					'
					<div id="stage" class="stage">
						<div id="cloud1" class="stage"></div>
						<div id="cloud2" class="stage"></div>
						<div id="cloud3" class="stage"></div>
					</div>
					';
				};
			?>     




<div id="main_top">
</div>

<div id="main">


	<!--Header-->
	<div id="header">
		
			<div id="greenleaf"></div>
        	<div id="redleaf"></div>
<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo2.png" class="logo" alt="" /></a>
			

		

			
			<!--Navigation-->
			<div id="nav">
			    <ul class="sf-menu">
			    	<li><a href="<?php bloginfo('url'); ?>/meet-the-doctor/">Meet the<br />Doctor</a></li>
			    	<li><a href="<?php bloginfo('url'); ?>/insurance-accepted/">Insurance<br />Accepted</a></li>
			    	<li><a href="<?php bloginfo('url'); ?>/map-and-parking/">Map and<br />Parking</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/after-hours-care/">After Hours<br />Care</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/whats-a-do/">What is<br />a D.O.?</a></li>
			    </ul>    
			
				<!--Menu corners-->
				<img src="<?php bloginfo('template_directory'); ?>/images/nav_tl.gif" class="nav_tl" alt="" />
				<img src="<?php bloginfo('template_directory'); ?>/images/nav_tr.gif" class="nav_tr" alt="" />
				<img src="<?php bloginfo('template_directory'); ?>/images/nav_bl.gif" class="nav_bl" alt="" />
				<img src="<?php bloginfo('template_directory'); ?>/images/nav_br.gif" class="nav_br" alt="" />
				
			</div>
			
	</div>
    
