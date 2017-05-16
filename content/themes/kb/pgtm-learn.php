<?php
/** 
 * Template Name: Learn
 *
 * Learn template file
 *
 * @link KB
 *
 * @package KB
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  get_header(); ?>

  <!-- ==== SECTION -> HEAD ==== -->
  <?php $image = get_field('bn_image'); ?>
  <section class="head" 
    style="background: url(<?php echo $image['url']; ?>)">
    <h1>
    	<?php echo get_field('bn_copy'); ?> 
    </h1>
    <div class="overlay"></div>
  </section>

  <!-- ==== SECTION -> INNER NAV ==== -->
  <div class="learn-nav">
	  <ul class="links">
	    <li>
	      <a href="#link-story">Story</a>
	    </li>
	    <li>
	      <a href="#link-roaster">Roaster</a>
	    </li>
	    <li>
	      <a href="#link-stockist">Stockist</a>
	    </li>
	  </ul>
  </div>  

	<!-- ==== SECTION -> STORY ==== -->
  <section class="story">
    <h2>
    	<?php echo get_field('st_copy'); ?>
    </h2>
    <p>
    	<?php echo get_field('st_sub-copy'); ?>
    </p>
    <?php $image = get_field('st_image'); ?>
    <div class="story-image"
      style="background: url(<?php echo $image['url']; ?>)">
    </div>
    <div class="people">
    	<?php $count = 0;
    	  if ( have_rows('st_people') ) : while ( have_rows('st_people') ) : the_row();  ?>
    		<div class="person-<?php echo $count; ?>">
    		  <div class="name-title">
	    		  <h3>
	    		    <?php echo get_sub_field('st_person'); ?>
	    		  </h3>
	    		  <h3>
	    		    <?php echo get_sub_field('st_title'); ?>
	    		  </h3>
    		  </div>
    		  <div class="bio">
    		    <p><?php echo get_sub_field('st_bio'); ?></p>
    		  </div>
    		</div>
    	<?php $count++;endwhile;endif; ?>
    </div>
  </section>

	<!-- ==== SECTION -> ROASTER ==== -->
  <section class="roaster">
    <h3><?php echo get_field('rs_copy'); ?></h3>
    <div class="facts">
    	<?php $count = 0; 
    	  if ( have_rows('rs_facts') ) : while ( have_rows('rs_facts') ) : the_row();  
    	    $image = get_sub_field('rs_facts-img'); ?>
    	  <div class="image">
    	    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    	  </div>
    	  <div class="copy">
    	    <h3><?php echo get_sub_field('rs_facts-bold'); ?></h3>
    	    <div class="data">
    	    	<div class="num">
    	    	  <?php echo get_sub_field('rs_facts-num'); ?>
    	    	</div>
    	    	<div class="unit">
    	    		<?php echo get_sub_field('rs_facts-num-unit'); ?>
    	    	</div>
    	    </div>
    	    <p>
    	    	<?php if( get_sub_field('rs_facts-script') ) :
    	    	  $script = get_sub_field('rs_facts-script');
    	    	  echo file_get_contents( $script['url'] );
    	        endif; ?>
    	    </p>
    	  </div>

    	<? $count++;endwhile;endif; ?>
    </div>
  </section>

	<!-- ==== SECTION -> STOCKIST ==== -->
  <section class="stockist">
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
  </section>

  <?php get_footer();