<?php
  /*
  * Section =>  nav
  */
?>

<div class="special-offer">
  <?php echo get_field('special_offer', 'option'); ?>
</div>
<div class="navigation">
  <div class="menu-toggle">Menu</div>
  <div class="brand-logo">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/svg/king-bean-text.svg'); ?>
  </div>
  <div class="shop-link">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/svg/king-bean-seal.svg'); ?>
  </div>
</div>