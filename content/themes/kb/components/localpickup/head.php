<?php
  /*
  * Section =>  LOCALPICKUP-HEAD
  */
?>

<div class='icon'>
	<?php echo file_get_contents( $GLOBALS['url'].'/assets/svg/pickupicon.svg' ); ?>
</div>
<h2>
	<?php echo get_field( 'lcl_header' ); ?>
</h2>
<h1>
  <?php echo get_field( 'lcl_tagline' ); ?>
</h1>
<p>
  <?php echo get_field( 'lcl_paragraph' ); ?>
</p>