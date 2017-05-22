<?php
  /*
  * Section =>  PRESS-BOX
  */
  
  // Sticky Press Post Query
  $args_sticky = array(
  	'post_type' => 'press',
  	'posts_per_page' => -1,
  	'order' => 'DESC',
  	'meta_key' => 'press_sticky',
  	'meta_compare' => '==',
  	'meta_value' => 1
  );

  $press = new WP_Query( $args_sticky );

  if ( $press->have_posts() ) : while( $press->have_posts() ) : $press->the_post(); 
    $image = get_field('press_image'); ?>

    <div class="press-clipping">
      <div class="date">
        <?php echo get_the_date('M Y'); ?>
      </div>
      <div class="image" 
        style="background-image: url(<?php echo $image['url']; ?>)">
        </div>
      <p>
        <?php echo get_the_content(); ?>
      </p>
      <h3>
        <?php echo get_the_title(); ?>
      </h3>
      <a class="read-more" target="_blank"
        href="<?php echo get_field('press_ctl'); ?>" >
        Read More
      </a>
    </div>

  <?php 
    endwhile;endif; wp_reset_postdata();

    // Remaining Press Post Query
    $args_nosticky = array(
    	'post_type' => 'press',
    	'posts_per_page' => -1,
    	'order' => 'DESC',
    	'meta_key' => 'press_sticky',
    	'meta_compare' => '==',
    	'meta_value' => 0
    );

    $press = new WP_Query( $args_nosticky );


    if ( $press->have_posts() ) : while( $press->have_posts() ) : $press->the_post(); 
    $image = get_field('press_image'); ?>

    <div class="press-clipping">
      <div class="date">
        <?php echo get_the_date('M Y'); ?>
      </div>
      <div class="image" 
        style="background-image: url(<?php echo $image['url']; ?>)">
        </div>
      <p>
        <?php echo get_the_content(); ?>
      </p>
      <h3>
        <?php echo get_the_title(); ?>
      </h3>
      <a class="read-more" target="_blank"
        href="<?php echo get_field('press_ctl'); ?>" >
        Read More
      </a>
    </div>

<?php endwhile;endif; wp_reset_postdata(); ?>