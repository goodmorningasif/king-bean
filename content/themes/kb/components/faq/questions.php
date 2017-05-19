<?php
  /*
  * Section =>  Questions
  */
?>

<div class="ordering">
	<h3>Ordering</h3>
	<?php
	  if( have_rows('or_repeater') ) : while( have_rows('or_repeater') ) : the_row(); ?>
	    <div class="ordering-question">
	      <h3>
	        <?php echo get_sub_field('or_question'); ?>
	      </h3>
	      <?php echo get_sub_field('or_answer-w'); ?>
	    </div>
  <?php endwhile;endif; ?>
</div>
<div class="shipping">
	<h3>Shipping</h3>
	<?php
	  if( have_rows('sh_repeater') ) : while( have_rows('sh_repeater') ) : the_row(); ?>
	    <div class="shipping-question">
	      <h3>
	      	<?php echo get_sub_field('sh_question'); ?>
	      </h3>
	      <?php echo get_sub_field('sh_answer-w'); ?>
	    </div>
	<?php endwhile;endif; ?>
</div>