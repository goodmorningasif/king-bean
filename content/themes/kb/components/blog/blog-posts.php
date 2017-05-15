<?php
  /*
  * Section =>  Posts
  */

  $this_id = get_the_ID();
  $this_cat = wp_get_post_categories($this_id);
?>
<article class="blog cat-<?php echo $this_cat[0]; ?>">
  <header>
    <?php echo get_field('afc_intro-p'); ?>
    <p>
      <?php echo get_the_content(); ?>
    </p>
  </header>
  <div class="image-block">
    <?php if( have_rows('afc_img-r') ) : while ( have_rows( 'afc_img-r' ) ) : the_row(); 
      if ( get_row_layout() === 'afc_img-r-double' ) :
        $left_img = get_sub_field('afc_img-r-double-left');
        $right_img = get_sub_field('afc_img-r-double-right');
    ?>
      <img class="left-img" 
        src="<?php echo $left_img['url']; ?>" 
        alt="<?php echo $left_img['alt']; ?>">
      <img class="right-img" 
        src="<?php echo $right_img['url']; ?>" 
        alt="<?php echo $right_img['alt']; ?>">
      <?php elseif ( get_row_layout() === 'afc_img-r-single' ) : 
        $full_img = get_sub_field('afc_img-r-single-full');
      ?>
      <img class="full-img" 
        src="<?php echo $full_img['url']; ?>" 
        alt="<?php echo $full_img['alt']; ?>">  
      <?php endif; ?>
    <?php endwhile;endif; ?>
  </div>
</article>