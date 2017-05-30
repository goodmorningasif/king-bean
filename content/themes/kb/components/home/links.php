<?php
  /*
  * Section =>  LINKS
  */
?>

<div class="link-wrapper">
	<?php if ( have_rows( 'links-repeater' ) ) : 
	  while ( have_rows( 'links-repeater' ) ) : 
	  	the_row(); 
			  $link = get_sub_field('link_image'); 
			  $text = get_sub_field('link_text'); 
			  $overlay = get_sub_field('link_overlay'); ?>
				<div class="link-single"
					  style="background-image: url(<?php echo $link['url']; ?>)">
					  <a href="<?php echo get_sub_field('link_link'); ?>">
					  <div class="text-overlay">
					    <?php echo file_get_contents($overlay['url']); ?>
					  </div>
					</a>
				</div>
	<?php endwhile;endif; ?>
</div>