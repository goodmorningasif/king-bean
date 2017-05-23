<?php
  /*
  * Section =>  REPEATER
  */
?>

<h1>
  <?php echo get_field( 'tips_title' ); ?>
</h1>
<div class="tips-box">
  <?php 
  $count = 0;
  if ( have_rows( 'tips_repeater' ) ) : while ( have_rows( 'tips_repeater' ) ): the_row(); ?>
	  <div class="tip-single">
	    <div class="left">
		    <div class="heading-1">
		    	King Bean Tip
		    </div>
		    <div class="heading-2">
	        <span class="num">No. 0</span><?php echo ++$count; ?>
		    </div>
		    <h3>
		    	<?php echo get_sub_field( 'tips_header' ); ?>
		    </h3>
	    </div>
	    <div class="right">
		      <?php echo get_sub_field( 'tips_wysi' ); ?>
	    </div>
	  </div>
  <?php endwhile;endif; ?>
</div>