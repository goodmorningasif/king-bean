<?php
  /*
  * Section =>  Blog-Nav
  */
?>

<div class="blog-nav">
	<h3>Journal</h3>
	<ul class="categories">
	  <?php $cats = get_categories(); 
	    foreach( $cats as &$cat ) : ?>
	    <li>
	      <a href="<?php echo $cat->slug; ?>">
	        <?php echo $cat->name; ?>
	      </a>
	    </li>
	    <?php endforeach; ?>
	</ul>
</div>