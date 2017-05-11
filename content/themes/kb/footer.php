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
  function print_field($field) {
    $input = get_sub_field($field);
    $output = array();
    $is_one = $input[0] === '1';
    $output[0] = $is_one ? mb_substr($input, 0, 4) : mb_substr($input, 0, 3);
    $output[1] = $is_one ? mb_substr($input, 3, 3) : mb_substr($input, 2, 3);
    $output[2] = $is_one ? mb_substr($input, 7) : mb_substr($input, 6);
    
    //echo $output[0] . '.' . $output[1] . '.' $output[2];
  }

?>

<!-- ==== SECTION -> FOOT ==== -->
<footer>
  <div class="col1">
    <div class="top">
      <h3>General Inquirires</h3>
      <?php if ( have_rows( 'foot_g-inq', 'option' ) ) : while ( have_rows( 'foot_g-inq', 'option' ) ) : the_row(); 
        if ( get_row_layout() === 'tele-true' ) : 
          $tele = get_sub_field('foot_g-inq-tel'); ?>
          <p>
            <a href="tel:<?php echo $tele; ?>" target="_blank"><?php function('foot_g-inq-tel'); ?></a>
          </p>
        <?php elseif ( get_row_layout() === 'email-true' ) : ?>
        
        <?php endif; ?>
      <?php endwhile;endif; ?>
    </div>
    <div class="bottom">
      <h3>E-Commerce Inquirires</h3>  
    </div>
  </div>
  <div class="col2">
    
  </div>
  <div class="col3">
    
  </div>
</footer>


</body><!-- end -->
</html>

<?php wp_footer(); ?>