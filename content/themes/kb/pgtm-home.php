<?php
/** 
 * Template Name: Home
 *
 *
 * @link KB
 *
 * @package KB
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */
  
  get_header(); ?>

<!-- ==== SECTION -> HEAD ==== -->
<?php $image = get_field('main_image'); ?>
<section class="home-head" 
  style="background-image: url(<?php echo $image['url']; ?>)">
  <?php get_template_part('/components/home/head'); ?>
</section>

<!-- ==== SECTION -> Feature Products ==== -->
<section class="feature-products">
  <?php get_template_part('/components/home/feature-products'); ?>
</section>

<!-- ==== SECTION -> Tagline ==== -->
<section class="tagline">
  <?php get_template_part('/components/home/tagline'); ?>
</section>

<!-- ==== SECTION -> Links ==== -->
<section class="home-links">
  <?php get_template_part('/components/home/links'); ?>
</section>

<?php get_footer();