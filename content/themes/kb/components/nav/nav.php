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
  <div class="menu-toggle">
    <a href="">
      Menu
    </a>
  </div>
  <div class="brand-logo">
    <a href="https://www.kingbean.com">
      <?php echo file_get_contents($GLOBALS['url'].'/assets/svg/king-bean-text.svg'); ?>
    </a>
  </div>
  <div class="shop-link">
    <a class="kb-cart" href="https://shop.kingbean.com/cart">
      <?php echo file_get_contents($GLOBALS['url'].'/assets/svg/king-bean-seal.svg'); ?>
    </a>
  </div>
</div>