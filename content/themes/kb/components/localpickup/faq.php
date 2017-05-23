<?php
  /*
  * Section =>  LOCALPICKUP-FAQ
  */
?>

<h3>
	FAQ
</h3>
<div class="faq-list">
  <?php if ( have_rows( 'faqs_repeater' ) ) : while ( have_rows( 'faqs_repeater' ) ) : the_row(); ?>
  	<h3>
  	  <?php echo get_sub_field( 'faq_question' ); ?>	
  	</h3>
    <?php echo get_sub_field( 'faq_answer' ); ?>	
  <?php endwhile;endif; ?>
</div>