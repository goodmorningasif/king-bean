<?php
/** 
 * Template Name: Localpickup
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

<section class="localpickup-head">
  <?php get_template_part('/components/localpickup/head'); ?>
</section>

<section class="localpickup-repeater">
  <?php get_template_part('/components/localpickup/repeater'); ?>
</section>

<section class="coming-soon">
  <?php get_template_part('/components/localpickup/commingsoon'); ?>
</section>

<section class="localpickup-faq">
  <?php get_template_part('/components/localpickup/faq'); ?>
</section>

<?php get_footer();