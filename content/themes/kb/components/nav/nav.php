<?php
  /*
  * Section =>  nav
  */
  
  $current_page = getCurrentPage();


  test($current_page, 'current page');
?>

<div class="special-offer">
  <?php echo get_field('special_offer', 'option'); ?>
</div>
<div class="navigation <?php echo $current_page; ?>">
  <div class="menu-toggle">Menu</div>
  <div class="brand-logo">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/svg/king-bean-text.svg'); ?>
  </div>
  <div class="shop-link">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/svg/king-bean-seal.svg'); ?>
  </div>
</div>