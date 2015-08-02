<?php
  $categories_list = get_the_category_list( ', ' );
  $tags_list       = get_the_tag_list( '', ', ', '' );
  $excerpt         = get_the_excerpt();
?>

<article class="post hentry<?php if ( $excerpt != '' ) echo ' has-excerpt'; ?>">
  <div class="term-link-wrapper">
    <?php
      if ( is_category() ) :
        echo $tags_list;
      else :
        echo $categories_list;
      endif;
    ?>
  </div>
  <div class="entry-wrapper">
    <h1 class="entry-title">
      <a href="<?php akaiv_the_url(); ?>" target="_blank" rel="bookmark"><?php akaiv_the_title(); ?></a>
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
      <?php akaiv_edit_post_link( false, '&#124;' ); ?>
    </div>
  </div>
</article>
