<?php
get_header();
akaiv_before_content(); ?>

<?php
/* 카테고리로 정렬하기 위해 Array 준비 */
$posts_by_category = array();
$category_ids = get_terms( 'category', array(
  'fields'  => 'ids',
  'orderby' => 'name',
  'order'   => 'DESC'
) );
foreach( $category_ids as $id )
  $posts_by_category[$id] = array();
foreach( $posts as $post ) :
  $categories = get_the_terms( $post->ID, 'category' );
  foreach( $categories as $key => $value ) :
    $category_id = $key;
    break;
  endforeach;
  $posts_by_category[(string)$category_id][] = $post;
endforeach; ?>

<?php
if ( have_posts() ) :

  akaiv_page_header();
  foreach( $posts_by_category as $category_id => $posts ) :
    foreach( $posts as $post ) :
      include 'templates/article.php';
    endforeach;
  endforeach; /* 카테고리 */
  akaiv_paginate_links();

else :

  get_template_part( 'templates/content', 'none' );

endif; ?>

<?php
akaiv_after_content();
get_footer();
