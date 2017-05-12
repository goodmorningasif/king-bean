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
  
  // Handles splitting up phone number with periods
  function print_phone($field) {
    $input = get_sub_field($field);
    $string = array();
    $is_one = $input[0] === '1';
    $string[0] = $is_one ? mb_substr($input, 0, 4) : mb_substr($input, 0, 3);
    $string[1] = $is_one ? mb_substr($input, 3, 3) : mb_substr($input, 2, 3);
    $string[2] = $is_one ? mb_substr($input, 7) : mb_substr($input, 6);
    $output = $string[0] . '.' . $string[1] . '.' . $string[2];
    return $output;
  }
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