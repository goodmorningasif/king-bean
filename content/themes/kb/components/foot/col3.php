<?php
  /*
  * Section =>  Col3
  */
?>

<div class="top">
  <h3><?php echo get_field('foot_newsletter_cta', 'options') ?></h3>
  <form class="foot-form">
    <div class="contain-input">
      <input class="form-email" 
        type="email" name="news-email" 
        placeholder="Enter Email Address">
    </div>
    <input class="form-submit" 
      type="submit" name="submit">
  </form>
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