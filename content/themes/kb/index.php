<?php
/** 
 * Index
 *
 * The main template file
 *
 * @link KB
 *
 * @package KB
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  get_header(); ?>

<!-- ==== SECTION -> NAV ==== -->
<nav>
  <div class="special-offer"></div>
  <div class="navigation">
    <div class="menu-toggle">Menu</div>
    <div class="brand-logo">
      <?php echo file_get_contents($GLOBALS['url'].'/assets/king-bean-text.svg'); ?>
    </div>
    <div class="shop-link">
      <?php echo file_get_contents($GLOBALS['url'].'/assets/king-bean-seal.svg'); ?>
    </div>
  </div>
</nav>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
  $this_id = get_the_ID();
  $this_cat = wp_get_post_categories($this_id);

?>

  <!-- ==== POST ==== -->
  <article class="blog cat-<?php echo $this_cat[0]; ?>">
    <h1><?php echo get_the_title(); ?></h1>
    <header>
      <?php echo get_field('afc_intro-p'); ?>
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
<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer();