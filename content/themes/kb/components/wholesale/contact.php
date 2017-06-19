<?php
  /*
  * Section =>  WHOLESALE CONTACT
  */
?>

<h3>
	If you are interested in serving King Bean in your establishment, please contact
</h3>
<p>Kurt Weinberger<br>
  <?php if ( have_rows( 'whole_ec-inq', 'options' ) ): while ( have_rows( 'whole_ec-inq', 'options' ) ): the_row(); 
    if ( get_row_layout() == 'whole-email-true' ) : ?>
	    <a href="mailto:<?php echo get_sub_field('whole_ec-inq-email'); ?>">
	      <?php echo get_sub_field('whole_ec-inq-email'); ?>
	    </a><br>
    <?php endif;
    if ( get_row_layout() == 'whole-tele-true' ) : ?>
	  <a href="tel:<?php echo get_sub_field('whole_ec-inq-tel'); ?>">
	    <?php echo print_phone('whole_ec-inq-tel'); ?>
	  </a>
	<?php endif;endwhile;endif; ?>
</p>