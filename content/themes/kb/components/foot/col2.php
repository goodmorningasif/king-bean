<?php
  /*
  * Section =>  Col2
  */
?>

<div class="top">
  <?php if ( have_rows( 'foot_links', 'option' ) ) : while ( have_rows( 'foot_links', 'option' ) ) : the_row(); ?>
    <p>
      <a href="<?php echo get_sub_field('foot_links-link'); ?>" target="_blank">
        <?php echo get_sub_field('foot_links-title'); ?>
      </a>
    </p>
  <?php endwhile; endif; ?>
</div>
<div class="bottom">
  <p>&copy;<?php echo date ('Y'); ?> king bean coffee</p>
  <p>Designed by <a href="http://www.sdcopartners.com" target="_blank">SDCO Partners</a></p>
  </p>
</div>