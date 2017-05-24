<?php
  /*
  * Section =>  FEATURE PRODUCTS
  */
?>

<div class="product-wrapper">
	<?php if ( have_rows( 'fp_repeater' ) ) : 
	  while ( have_rows( 'fp_repeater' ) ) : 
	  	the_row();
			  $product = get_sub_field( 'fp_product-image' ); ?>
				<div class="single-product">
			    <a href="<?php get_sub_field( 'fp_link' ); ?>">
					<div class="image"
					  style="background-image:url(<?php echo $product['url']; ?>)">
					</div>
					<h3>
						<?php echo get_sub_field('fp_product-name'); ?>
					</h3>
					<p>
					  <?php echo get_sub_field('fp_product-notes'); ?>
					</p>
					<div class="price">
						<?php echo get_sub_field('fp_price'); ?>
					</div>
			</a>
				</div>
	<?php endwhile;endif; ?>	
</div>