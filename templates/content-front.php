<?php
  $about = get_posts( array (
    'name' => 'about',
    'post_type' => 'page',
    'post_status' => 'publish',
    'posts_per_page' => 1
  ) )[0];

  if( $about ) :
    akaiv_before_post();
    akaiv_page_header( $about->post_title ); ?>
    <div class="page-content">
      <?php echo wpautop( $about->post_content ); ?>
    </div><?php
    akaiv_edit_post_link( true );
    akaiv_after_post();

  else : ?>
    <div class="page-content">
      <p>Welcome!</p>
    </div><?php

  endif;
?>
