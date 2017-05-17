<?php
  /*
  * Section =>  ROASTER
  */
?>

<h3><?php echo get_field('rs_copy'); ?></h3>
<div class="facts">
	<?php $count = 0; 
	  if ( have_rows('rs_facts') ) : while ( have_rows('rs_facts') ) : the_row();  
	    $image = get_sub_field('rs_facts-img'); ?>
	  <div class="image">
	    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	  </div>
	  <div class="copy">
	    <h3><?php echo get_sub_field('rs_facts-bold'); ?></h3>
	    <div class="data">
	    	<div class="num">
	    	  <?php echo get_sub_field('rs_facts-num'); ?>
	    	</div>
	    	<div class="unit">
	    		<?php echo get_sub_field('rs_facts-num-unit'); ?>
	    	</div>
	    </div>
	    <p>
	    	<?php if( get_sub_field('rs_facts-script') ) :
	    	  $script = get_sub_field('rs_facts-script');
	    	  echo file_get_contents( $script['url'] );
	        endif; ?>
	    </p>
	  </div>

	<? $count++;endwhile;endif; ?>
</div>