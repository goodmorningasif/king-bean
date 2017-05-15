<?php
  /*
  * Section =>  Blog-Foot
  */
?>

<div class="blog-foot">
	<div class="prev">
	  <?php echo previous_posts_link('Previous'); ?>
	  <?php if (!get_previous_posts_link() ) : ?>
	    X
	  <?php endif; ?>
	</div>
	<div class="line"></div>
	<div class="next">
	  <?php echo next_posts_link('Next'); ?>
	  <?php if (!get_next_posts_link() ) : ?>
	    X
	  <?php endif; ?>
	</div>
</div>