<?php
  /*
  * Section =>  REPEATER
  */
  if ( have_rows( 'wh_content_repeater' ) ) : 
    while( have_rows('wh_content_repeater') ) : the_row();
    $title = get_sub_field('wh_content-title');
    $title_id = str_replace(' ', '-', $title); 
    $image = get_sub_field('wh_content-image'); ?>

    <div class="repeater" 
      id="link-<?php echo $title_id; ?>">
      <h3>
        <?php echo $title; ?>
      </h3>
      <div class="content">
        <div class="image"
          style="background-image: url(<?php echo $image['url']; ?>);">
        </div>
        <div class="copy">
          <p>
            <?php echo get_sub_field('wh_content-copy'); ?>
          </p>
        </div>	        
      </div>
    </div>
<?php endwhile;endif; ?>