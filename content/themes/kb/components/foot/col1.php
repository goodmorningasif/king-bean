<?php
  /*
  * Section =>  Col1
  */
?>

<div class="top">
  <h3>general inquries</h3>
  <?php if ( have_rows( 'foot_g-inq', 'option' ) ) : while ( have_rows( 'foot_g-inq', 'option' ) ) : the_row(); 
    if ( get_row_layout() === 'tele-true' ) : 
      $tele = get_sub_field('foot_g-inq-tel'); ?>
      <p>
        <a href="tel:<?php echo $tele; ?>" target="_blank">
          <?php echo print_phone('foot_g-inq-tel'); ?>    
        </a>
      </p>
    <?php elseif ( get_row_layout() === 'email-true' ) : ?>
      <p>
        <a href="mailto:<?php echo $tele; ?>" target="_blank">
          <?php echo get_sub_field('foot_g-inq-email'); ?>
        </a>
      </p>          
    <?php endif; ?>
  <?php endwhile;endif; ?>
</div>
<div class="bottom">
  <h3>e-commerce inquiries</h3>
  <?php if ( have_rows( 'foot_ec-inq', 'option' ) ) : while ( have_rows( 'foot_ec-inq', 'option' ) ) : the_row(); 
    if ( get_row_layout() === 'e-tele-true' ) : 
      $tele = get_sub_field('foot_g-inq-tel'); ?>
      <p>
        <a href="tel:<?php echo $tele; ?>" target="_blank">
          <?php echo print_phone('foot_ec-inq-tel'); ?>    
        </a>
      </p>
    <?php elseif ( get_row_layout() === 'e-email-true' ) : ?>
      <p>
        <a href="mailto:<?php echo $tele; ?>" target="_blank">
          <?php echo get_sub_field('foot_ec-inq-email'); ?>
        </a>
      </p>          
    <?php endif; ?>
  <?php endwhile;endif; ?>
</div>