<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<head>
	<title>Dr. Maples / Dr. Charles Maples / Dr. Charles M. Maples / Charles Maples, D.O. / Charles M. Maples, D.O. / Monty Maples, D.O. / Dr. Monty Maples / Dr. C.M. Maples / C.M. Maples, D.O. - Los Alamitos / Long Beach / California -- Family Practice Medicine</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
	<?php woo_meta(); ?>
<?php global $woo_options; ?> 
	
	<!--CSS Main-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" />
    	<!--[if IE]>
        	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie.css" type="text/css" />
        <![endif]-->
		
	
	
	<!--Scripts-->
	<!--JQuery-->
	
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    
    
    
	<?php 
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/iphone/i', $user_agent))
            print
                '';
        
        else {
            print
                '<script type="text/javascript" src="';
            bloginfo('template_directory');
            print '/js/jquery/jquery.spritely-0.2.1.js"></script>';
            };
    ?> 
            
            
             
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/script.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/javascript.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/execute.js"></script>



    
	<?php
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/iphone/i', $user_agent)) {
            print    
                '<link rel="stylesheet" type="text/css" media="screen" href="';
            bloginfo('template_directory');
            print '/iphone.css"/>';
    	}
        else {
            print    
                '';
            };
    ?>  
	



	 

	  
<?php wp_head(); ?>
<?php woo_head(); ?>
	
	<!--PNG Fix-->
	<!--[if lt IE 7]>
	<script src="js/ie6pngfix/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
	DD_belatedPNG.fix('.logo, #header, #footer, #content, .zoom a span, .sliderimg, #prevBtn a, #nextBtn a');
	</script>
	<![endif]-->
	<!--End PNG Fix-->
	
    
<?php
if( ( is_home() || is_page_template('template-location.php') || is_active_widget( false,false,'woo_location', true ) ) ){ ?>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>   
<?php } ?>
	  
	
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
						<!-- <div id="cloud2" class="stage"></div> -->
						<div id="cloud3" class="stage"></div>
					</div>
					';
				};
			?>     




<div id="main_top">
</div>

<div id="main" data-role="page">


	<!--Header-->
	<div id="header">
		
			<div id="greenleaf"></div>
        	<div id="redleaf"></div>
<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo2.png" class="logo" alt="" /></a>
			

	

			
			<!--Navigation-->
			<div id="nav">
            

<?php
	wp_nav_menu( array( 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav fl', 'theme_location' => 'primary' ) );
?>				    	
  
			
			</div>
			
	</div>
    
