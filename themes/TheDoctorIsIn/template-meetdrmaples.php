<?php
/*
Template Name: Meet Dr Maples
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
                
				<div id="affiliations">
					<?php query_posts('post_type=affiliations&order=ASC'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); $counter++; ?>		        					
            
                        <?php 
                            $excerpt = stripslashes(get_post_meta($post->ID, 'mini_excerpt', true)); 
                            $button = get_post_meta($post->ID, 'mini_readmore', true);
                        ?>
    
                        <li data-hovercolor="#fff">
                            
                                <h3><?php echo get_the_title(); ?></h3>
                                <p><?php echo the_content(); ?></p>
                                <br>
                        </li>     
           
                    <?php endwhile; endif; ?> 
                </div><!--affiliations-->
    		</div><!--Index Articles-->



<?php get_footer(); ?>
