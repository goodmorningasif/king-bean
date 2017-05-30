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
        $press_pdf = get_sub_field('press_content-pdf');
        $press_link = $press_pdf['url'];
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
  <?php elseif( isset($press_pdf) ) : ?>
    <a class="read-more" target="_blank"
      href="<?php echo $press_pdf['url']; ?>" >
      Read More
    </a>
  <?php else: ?>
	  <a class="read-more" target="_blank"
	    href="" >
	  </a>
  <?php endif; ?>
</div>