<?php
/**
* A Simple Category Template
*/

get_header(); ?> 

<div id="main">
  <div id="content">

    <?php if ( have_posts() ) : ?>
     <div id="wrapper_grid">

	  <!-- the loop -->
	
	     <?php while ( have_posts() ) : the_post(); ?>
		
		    <span class="grid_item">
     		<a href="<?php the_permalink(); ?>" >
    		    <figure>
    		        <?php the_post_thumbnail('thumbnail');?>
    		        <figcaption>
    		            <?php the_title(); ?>
    		            <?php the_excerpt(); ?>
    		        </figcaption>
    		    </figure>
		    </a>
		    <p><?php echo get_field('etat',get_the_ID()); ?></p>
	        </span>
	<?php endwhile; ?>
	<!-- end of the loop -->

     </div>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
                    
     </div>
</div>
    
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>