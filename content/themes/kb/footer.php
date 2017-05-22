<?php
/**
 * Footer
 *
 * Contans footer assets.
 *
 * @link KB
 *
 * @package KB
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

?>

<!-- ==== SECTION -> FOOT ==== -->
<footer>
  <div class="col1">
    <?php get_template_part('components/foot/col1'); ?>
  </div>
  <div class="col2">
    <?php get_template_part('components/foot/col2'); ?>
  </div>
  <div class="col3">
    <?php get_template_part('components/foot/col3'); ?>
  </div>
</footer>

</body><!-- end -->
</html>

<?php wp_footer(); ?>