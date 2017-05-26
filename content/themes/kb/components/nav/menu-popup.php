<?php
  /*
  * Section =>  pop-up
  */
?>

<div class="menu-wrapper">
  <h3 class="menu-toggle">Close</h3>
  <div class="p-shop">
		<a href="https://www.kingbean.com/collections/all">
			<?php echo file_get_contents($GLOBALS['url'].'/assets/svg/shop.svg'); ?>	
		</a>
	</div>
	<div class="p-learn">
		<a href="http://<?php echo $GLOBALS['root']; ?>/learn">
			<?php echo file_get_contents($GLOBALS['url'].'/assets/svg/notlearn.svg'); ?>	
		</a>
	</div>
	<div class="p-tips">
		<a href="http://<?php echo $GLOBALS['root']; ?>/tips">
			<?php echo file_get_contents($GLOBALS['url'].'/assets/svg/tips.svg'); ?>	
		</a>
	</div>
  <div class="p-wholesale">
		<a href="http://<?php echo $GLOBALS['root']; ?>/wholesale">
			<?php echo file_get_contents($GLOBALS['url'].'/assets/svg/wholesale.svg'); ?>	
		</a>
	</div>
  <div class="p-press">
		<a href="http://<?php echo $GLOBALS['root']; ?>/press">
			<?php echo file_get_contents($GLOBALS['url'].'/assets/svg/press.svg'); ?>	
		</a>
	</div>
	<div class="bottom-row">
		<h3>
			<a href="http://<?php echo $GLOBALS['root']; ?>/faq">
				FAQ
			</a>
		</h3>
		<div class="icon">
		  <a href="http://<?php echo $GLOBALS['root']; ?>">
				<?php echo file_get_contents($GLOBALS['url'].'/assets/svg/exploding-bean.svg'); ?>
		  </a>
		</div>
		<h3>
		  <a href="http://<?php echo $GLOBALS['root']; ?>/journal">
		    BLOG
		  </a>
		</h3>
	</div>
</div>
