<?php
/** 
 * Template Name: Press
 *
 * Learn template file
 *
 * @link KB
 *
 * @package KB
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  get_header(); ?>

<!-- ==== SECTION -> PRESS-HEAD ==== -->
<section class="press-head">
   <?php get_template_part('components/press/press-head'); ?>
</section>

<!-- ==== SECTION -> PRESS-BOX ==== -->
<section class="press-box">
  <?php get_template_part('components/press/press-box'); ?>
</section>

<?php get_footer();