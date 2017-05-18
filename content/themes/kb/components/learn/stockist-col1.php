<?php
  /*
  * Section =>  STOCKIST COL1
  */

  $general_email = '';
  if ( have_rows( 'foot_g-inq', 'option' ) ) :
  	while ( have_rows( 'foot_g-inq', 'option' ) ) :
  		the_row();
  	  if ( get_row_layout() === 'email-true' ) :
  	  	$general_email = get_sub_field('foot_g-inq-email');
  	  endif;
  	endwhile;
  endif;
?>

<div class="stockist-header">
  <?php echo file_get_contents($GLOBALS['url'].'/assets/svg/stockist-header.svg'); ?>
</div>
<div class="retail-inquiries">
  <div class="mail-icon">
    <a href="mailto:<?php echo $general_email; ?>">
  	  <?php echo file_get_contents($GLOBALS['url'].'/assets/svg/mail.svg'); ?>
  	  <p>For retail inquiries</p>
  	</a>
  </div>
</div>