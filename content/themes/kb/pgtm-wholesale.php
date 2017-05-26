<?php
/** 
 * Template Name: Wholesale
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

<!-- ==== SECTION -> WHOLESALE HEAD ==== -->
<?php $image = get_field('wh_image'); ?>
<section class="wholesale-head feature"
  style="background-image: url(<?php echo $image['url']; ?>)">
  <?php get_template_part('/components/wholesale/head'); ?>
</section>

<!-- ==== SECTION -> WHOLESALE NAV ==== -->
<section class="wholesale-nav">
  <?php get_template_part('/components/wholesale/inner-nav'); ?>
</section>

<!-- ==== SECTION -> WHOLESALE REPEATER ==== -->
<section class="wholesale-repeater">
  <?php get_template_part('/components/wholesale/repeater'); ?>
</section>

<!-- ==== SECTION -> PARTNER LOGOS ==== -->
<section class="partner-logos">
  <?php get_template_part('/components/wholesale/partner-logos'); ?>
</section>

<!-- ==== SECTION -> WHOLESALE CONTACT ==== -->
<section class="wholesale-contact">
  <?php get_template_part('/components/wholesale/contact'); ?>
</section>

<?php get_footer();