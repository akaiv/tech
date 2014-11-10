<?php
require_once 'inc/add-post.php';
get_header();
akaiv_before_content(); ?>

<?php
  if ( current_user_can( 'publish_posts' ) ) :
    get_template_part( 'templates/form', 'add-post' );
  endif;
  get_template_part( 'templates/front' );
?>

<?php
  if ( have_posts() ) :
    akaiv_page_header();
    while ( have_posts() ) : the_post();
      get_template_part( 'templates/content' );
    endwhile;
    akaiv_paginate_links();
  else :
    get_template_part( 'templates/content', 'none' );
  endif;
?>

<?php
akaiv_after_content();
get_footer();
