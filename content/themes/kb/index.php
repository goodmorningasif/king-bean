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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part('/components/blog/posts'); ?>
<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer();