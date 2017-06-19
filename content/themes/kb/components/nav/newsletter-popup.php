<?php
  /*
  * Section =>  pop-up
  */
?>

<div class="overlay"></div>

<div class="newsletter-wrapper">
  <div class="newsletter-container">
	  <div class="newsletter-toggle">X</div>
	  <div class="logo">
	  	<?php echo file_get_contents($GLOBALS['url'].'/assets/svg/exploding-kb.svg'); ?>
	  </div>
		<h3>
		  We Like To Share
		</h3>
		<p>
		  Recipes, Stories and Special Offers
		</p>
	  <?php echo do_shortcode('[contact-form-7 id="5" title="King Bean Popup"]'); ?>
		<p class="form-message">
		  New emails get free shipping on your first online order
		</p>
  </div>
</div>