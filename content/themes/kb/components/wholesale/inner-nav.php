<?php
  /*
  * Section =>  INNER NAV
  */
?> 

<ul>
<?php
  if ( have_rows( 'wh_content_repeater' ) ) : 
    while( have_rows('wh_content_repeater') ) : the_row();
    $title = get_sub_field('wh_content-title');
    $title_id = str_replace(' ', '-', $title); ?>
    <li>
      <a href="#link-<?php echo $title_id; ?>">
        <?php echo $title; ?>
      </a>
    </li>
<?php endwhile;endif; ?>
</ul>

<h3>
  <?php echo get_field('wh_intro-copy'); ?>
</h3>