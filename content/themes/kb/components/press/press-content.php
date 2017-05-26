<?php
  /*
  * Section =>  PRESS-BOX
  */
  $image = get_field('press_image'); 

 if ( have_rows( 'press_content' ) ) : 
    while ( have_rows( 'press_content' ) ) : 
      the_row(); 
      if ( get_row_layout() == 'press_content-link-to-url' ) : 
      	$press_link = get_sub_field('press_content-ctl');
      elseif ( get_row_layout() == 'press_content-upload-pdf' ) :
        $press_link = get_sub_field('press_content-pdf');
  endif;endwhile;endif; 
 ?>

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
  <?php if( isset($press_link) ): ?>
	  <a class="read-more" target="_blank"
	    href="<?php echo $press_link; ?>" >
	    Read More
	  </a>
  <?php else: ?>
	  <a class="read-more" target="_blank"
	    href="" >
	    
	  </a>
  <?php endif; ?>
</div>