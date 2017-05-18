<?php
/** 
 * Template Name: Learn
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

  <!-- ==== SECTION -> HEAD ==== -->
  <?php $image = get_field('bn_image'); ?>
  <section class="head" 
    style="background-image: url(<?php echo $image['url']; ?>)">
    <?php get_template_part('/components/learn/head'); ?>
  </section>

  <!-- ==== SECTION -> INNER NAV ==== -->
  <div class="learn-nav">
    <?php get_template_part('/components/learn/inner-nav'); ?>
  </div>  

	<!-- ==== SECTION -> STORY ==== -->
  <section class="story">
    <?php get_template_part('/components/learn/story'); ?>
  </section>

	<!-- ==== SECTION -> ROASTER ==== -->
  <section class="roaster">
    <?php get_template_part('/components/learn/roaster'); ?>
  </section>

	<!-- ==== SECTION -> STOCKIST ==== -->
  <section class="stockist">
    <?php get_template_part('/components/learn/stockist'); ?>
  </section>

  <?php get_footer();