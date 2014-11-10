<?php
get_header();
akaiv_before_content(); ?>

<?php
/* 태그로 정렬하기 위해 Array 준비 */
$posts_by_tag = array();
$tag_ids = get_terms( 'post_tag', array(
	'fields'  => 'ids',
	'orderby' => 'name',
	'order'   => 'ASC'
) );
foreach( $tag_ids as $id )
	$posts_by_tag[$id] = array();
foreach( $posts as $post ) :
	$tags = get_the_terms( $post->ID, 'post_tag' );
	foreach( $tags as $key => $value ) :
		$tag_id = $key;
		break;
	endforeach;
	$posts_by_tag[(string)$tag_id][] = $post;
endforeach; ?>

<?php
if ( have_posts() ) :

	akaiv_page_header();
	foreach( $posts_by_tag as $tag_id => $posts ) :
		foreach( $posts as $post ) :
			require 'templates/article.php';
		endforeach;
	endforeach; /* 태그 */
	akaiv_paginate_links();

else :

	get_template_part( 'templates/content', 'none' );

endif; ?>

<?php
akaiv_after_content();
get_footer();
