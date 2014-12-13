<?php
/*
Template Name: Directions
*/
?>

<?php get_header(); ?>


	<!--Content-->
	<div id="content">

		<!--Slider-->
		<div id="showcasepage">
			<div id="sliderpage">
						<div class="slidepage">
							<h1 class="myclass"><?php the_title(); ?></h3>

						</div>

			</div>
		</div>
    
    		<!--Index Articles-->
		<div id="index_articles">	
        	<div class="indexdesclarge"> 
        
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    
                                <?php the_content(); ?>
                                
                <?php endwhile; ?>
    		</div>



<?php get_footer(); ?>
