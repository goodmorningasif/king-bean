<?php 
  /*
  * Section =>  STOCKIST COL2
  */

  // get States
  $args = array(
     'taxonomy' => 'state',
     'hide_empty' => false          
  );
  $states = get_terms( $args );
  $count = 0;
  foreach ( $states as $state ) : ?>

	  <h3><?php echo $state->name; ?></h3>
	  <ul>
	    <?php 
	      // get retailers associated with State
	      $sub_args = array(
	      	'post_type' => 'stockist',
	      	'posts_per_page' => -1,
	      	'orderby' => 'tax_query',
	      	'order' => 'ASC',
	      	'tax_query' => array(
	      		array(
	      			'taxonomy' => 'state',
	      			'field' => 'slug',
	      			'terms' => $state->slug,
	      		),
	      	),
	      );

	      $retailers = new WP_Query( $sub_args );

	      if ( $retailers->have_posts() ) : while( $retailers->have_posts() ) : $retailers->the_post(); ?>
	      <li class="retailer">
	        <?php the_title(); ?>
	      <?php
	        // get location for retailer
	        if ( have_rows('biz_loc') ) : while ( have_rows('biz_loc') ) : the_row(); 
	          $retail_state = get_sub_field('biz_loc-state'); 
	            // only print data if retail_state equals current state
	            if( $retail_state[0] ) : if ( $retail_state[0]->name === $state->name ) : ?>
		          <p class="location">
		          	<?php echo get_sub_field('biz_loc-city'); ?>&#44;
		          	<?php echo $state->name; ?>
		          </p>
              <?php endif;endif; ?>
          <?php endwhile;endif; ?>
	      </li>
	      <?php $count++;endwhile;endif; ?>
	  </ul>
  <?php endforeach; ?>