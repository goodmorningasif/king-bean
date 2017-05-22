<?php
  /*
  * Section =>  PARTNER LOGOS
  */
  if ( have_rows( 'pr_logos' ) ): while ( have_rows( 'pr_logos' ) ): the_row(); 
    $image = get_sub_field('pr-repeater-logo'); ?>
    
    <div class="image-container">
	  	<img alt="<?php echo $image['alt']; ?>" 
	  	  src="<?php echo $image['url']; ?>">
  	</div>

<?php endwhile; endif; ?>