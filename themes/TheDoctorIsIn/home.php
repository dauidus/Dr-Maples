<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

	<!--Main Content-->
	<div id="content">
	
		<!--Slider-->
        <h3 class="sliderheadline" >Dr. Charles M. Maples, D.O.</h3>
        <span class="sliderheadline" >
			Board Certified Family Medicine
		</span>
		<div id="showcase">
        
        
			<div id="slider">
            <div id="showcase2"></div>
            
            
			<?php echo do_shortcode("[promoslider slider='Main' order='DESC']"); ?>
             
                
			</div>
            
            

            
		</div>

		<!--Index Articles-->
		<div id="index_articles">	
        
             	<div class="indexdesc" style="margin-top:0px" >
                    <div class="descleft">
                        <p>3771 Katella Avenue<br>Suite 110<br />
                            Los Alamitos, CA 90720
                        </p>
                        <p>Phone: (562) 430-6850<br />
                            Fax: (562) 430-6820
                        </p>
                    </div>
                    <div class="descright" id="descright">
                        <?php dynamic_sidebar("Primary Home Sidebar"); ?> 
                    </div>
                </div> 


			<div class="clearboth"></div>

                
                <div class="indexdesclarge">  

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
					<?php the_content(); ?>
					
	<?php endwhile; ?>
    
    		<br><br><br>
    		
		    		<div class="clearboth"></div>
		    			
		    			
						<div style="width: 350px; float:left;">New Patient? Download the <em>Form Packet</em> and complete it in your own home. Its a great way to save time at the office.
						</div>
							
							<div id="nav-shadow" style="float:left; width:300px; margin-top:-30px;">
				            	<ul>
								<li>
									<a href="<?php bloginfo('url'); ?>/wp-content/uploads/2012/06/patform.pdf" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/forms.png" class="articletitlepic" alt="Patient Forms" align="left" /></a>
									<h3 class="myclass"><a href="<?php bloginfo('url'); ?>/wp-content/uploads/2012/06/patform.pdf" target="_blank">Form Packet (<em>.pdf </em>)</a></h3>
								</li>
				                </ul>
							</div>

				</div>
            
<?php get_footer(); ?>
