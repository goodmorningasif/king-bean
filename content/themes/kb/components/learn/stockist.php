<?php
  /*
  * Section =>  STOCKIST
  */
?>

<div class="col1">
	<div class="stockist-header">
	  <?php echo file_get_contents($GLOBALS['url'].'/assets/svg/stockist-header.svg'); ?>
	</div>
	<div class="retail-inquries">
	  <div class="mail-icon">
	  	<?php echo file_get_contents($GLOBALS['url'].'/assets/svg/mail.svg'); ?>
	  </div>
	</div>
</div>
<div class="col2">
	<?php 
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

		      if ( $retailers->have_posts() ) : while( $retailers->have_posts() ) : $retailers->the_post();
		    ?>
		      <li class="retailer"><?php the_title(); ?></li>
		    <?php $count++;endwhile;endif; ?>
		  </ul>
  <?php endforeach; ?>
</div>