<?php
/*
Template Name: Staff
*/

get_header();
?>

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
 
            <div id="menu">

   			<table>



   			    <tbody>


				<?php
$args = array( 'orderby' => 'registered', 'role' => 'administrator', 'exclude' => 'admin' );
$authors = get_users( $args );
?> 

         <?php
         $c = 0; // set up a counter so we know which post we're currently showing
         $extra_class = 'even' // set up a variable to hold an extra CSS class
         ?>
    
<?php foreach( $authors as $author ) {  ?>   

<?php
         $c++; // increment the counter
         if( $c % 2 != 0) {
	  // we're on an odd post
	   $extra_class = 'odd';
         } else {
         $extra_class = 'even'; }
         ?>
         

   			    	<tr <?php post_class($extra_class) ?>>
   			    		<td class="image"> <?php echo get_avatar( $author->ID, '130' ); ?></td>
   			    		<td class="details">
   			    			<h3><?php the_author_meta( 'user_firstname', $author->ID ); ?> <?php the_author_meta( 'user_lastname', $author->ID ); ?></h3>
   			    			<?php the_author_meta( 'description', $author->ID ); ?>
   			    		</td>
   			    	</tr>

   			    <?php } ?>


        		<?php
$args = array( 'orderby' => 'registered', 'role' => 'editor' );
$authors = get_users( $args );
?> 

         <?php
         $c = 0; // set up a counter so we know which post we're currently showing
         $extra_class = 'even' // set up a variable to hold an extra CSS class
         ?>
    
<?php foreach( $authors as $author ) {  ?>   

<?php
         $c++; // increment the counter
         if( $c % 2 != 0) {
	  // we're on an odd post
	   $extra_class = 'odd';
         } else {
         $extra_class = 'even'; }
         ?>
         

   			    	<tr <?php post_class($extra_class) ?>>
   			    		<td class="image"> <?php echo get_avatar( $author->ID, '130' ); ?></td>
   			    		<td class="details">
   			    			<h3><?php the_author_meta( 'user_firstname', $author->ID ); ?> <?php the_author_meta( 'user_lastname', $author->ID ); ?></h3>
   			    			<?php the_author_meta( 'description', $author->ID ); ?>
   			    		</td>
   			    	</tr>

   			    <?php } ?>

   			    </tbody>


   			</table>

    		</div>
            </div>



<?php get_footer(); ?>