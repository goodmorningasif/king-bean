<?php
  /*
  * Section =>  LOCALPICKUP-REPEATER
  */
?>

<div class='script'>
	<?php echo file_get_contents( $GLOBALS['url'].'/assets/svg/itssimple.svg' ); ?>
</div>
<h3>
	<?php echo get_field( 'steps_copy' ); ?>
</h3>
<div class="steps-repeater">
	<?php
    $count = 0;
	  if ( have_rows( 'steps_repeater' ) ) : while ( have_rows( 'steps_repeater' ) ) : the_row(); ?>
	    <div class="step">
	      <div class="heading-1">
	      	STEP
	      </div>
	      <div class="heading-2">
	      	0<?php echo ++$count; ?>
	      </div>
	    	<h3>
	    	  <?php echo get_sub_field( 'steps_step' ); ?>
	    	</h3>
	    	<?php echo get_sub_field( 'step_note' ); ?>
	    </div>
	<?php endwhile;endif; ?>
</div>