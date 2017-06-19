<?php
  /*
  * Section =>  Col3
  */
?>

<div class="top">
  <h3><?php echo get_field('foot_newsletter_cta', 'options') ?></h3>
  <?php echo do_shortcode('[contact-form-7 id="356" title="King Bean Footer"]'); ?>
</div>
<div class="bottom">
  <h3><?php echo get_field('foot_social_cta', 'options') ?></h3>
  <div class="social-box">
    <?php if ( have_rows( 'foot_social', 'option' ) ) : while ( have_rows( 'foot_social', 'option' ) ) : the_row(); 
      $icon = get_sub_field('foot_social_icon');
    ?>
      <div class="social-row">
        <a href="<?php echo get_sub_field('foot_social_link'); ?>" target="_blank">
          <?php echo file_get_contents($icon['url']); ?>
        </a>
      </div>
    <?php endwhile; endif; ?>
  </div>
</div>