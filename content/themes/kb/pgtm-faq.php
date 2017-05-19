<?php
/** 
 * Template Name: FAQ
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
<!-- ==== SECTION -> FAQ-HEAD  ==== -->
<section class="faq-head">
  <?php get_template_part('/components/faq/faq-head'); ?>
</section>

<!-- ==== SECTION -> Questions  ==== -->
<section class="questions">
  <?php get_template_part('/components/faq/questions'); ?>
</section>

<?php get_footer();