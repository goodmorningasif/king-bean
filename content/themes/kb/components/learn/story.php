<?php
  /*
  * Section =>  STORY
  */
?>

<h2>
	<?php echo get_field('st_copy'); ?>
</h2>
<p>
	<?php echo get_field('st_sub-copy'); ?>
</p>
<?php $image = get_field('st_image'); ?>
<div class="story-image"
  style="background-image: url(<?php echo $image['url']; ?>)">
</div>
<div class="people">
	<?php $count = 0;
	  if ( have_rows('st_people') ) : 
	  	while ( have_rows('st_people') ) : the_row();  ?>
		<div class="person id-<?php echo $count; ?>">
		  <div class="name-title">
  		  <h3>
  		    <?php echo get_sub_field('st_person'); ?>&#44;
  		  </h3>
  		  <h3>
  		    <?php echo get_sub_field('st_title'); ?>
  		  </h3>
		  </div>
		  <div class="bio">
		    <p><?php echo get_sub_field('st_bio'); ?></p>
		  </div>
		</div>
	<?php $count++;endwhile;endif; ?>
</div>