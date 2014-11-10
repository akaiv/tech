<?php
  $title       = $post->post_title;
  $url         = get_post_meta( $post->ID, 'wpcf-url', true );
  $excerpt     = get_the_excerpt();

  if ( is_category() ) :
    $tag       = get_tag( $tag_id );
    $tag_name  = $tag->name;
    $tag_link  = get_tag_link( $tag_id );
    $term_name = $tag_name;
    $term_link = $tag_link;

  else :
    $cat       = get_category( $category_id );
    $cat_name  = $cat->cat_name;
    $cat_link  = get_category_link( $category_id );
    $term_name = $cat_name;
    $term_link = $cat_link;

  endif;
?>

<article class="post hentry<?php if ( $excerpt != '' ) echo ' has-excerpt'; ?>">
  <div class="term-link-wrapper">
    <a class="term-link" href="<?php echo $term_link; ?>"><?php echo $term_name; ?></a>
  </div>
  <div class="entry-wrapper">
    <h1 class="entry-title">
      <a href="<?php echo $url; ?>" target="_blank" rel="bookmark"><?php echo $title; ?></a>
    </h1>
    <?php if ( $excerpt != '' ) echo '<p class="entry-summary">'.$excerpt.'</p>'; ?>
    <div class="entry-meta"><?php
      /* 태그 */
      if ( ! ( is_category() || is_tag() ) ) :
        echo the_tags('#','','');
      endif;
      /* 날짜 */
      $entry_year  = get_the_time('Y');
      $entry_month = get_the_time('m'); ?>
      &mdash; <a href="<?php echo get_month_link( $entry_year, $entry_month ); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo $entry_year.'년 '.$entry_month.'월'; ?>에 추가된 항목 보기"><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ) ?></time></a>
      <?php akaiv_edit_post_link(); ?>
    </div>
  </div>
</article>
