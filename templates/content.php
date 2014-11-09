<?php akaiv_before_page(); ?>

<?php if ( is_single() ) : /* 글 */ ?>

  <header class="entry-header">
    <h1 class="entry-title">
      <?php akaiv_the_title(); ?>
    </h1>
    <div class="entry-meta">
      <?php akaiv_post_meta(); ?>
      <?php akaiv_edit_post_link(); ?>
    </div>
  </header>
  <?php akaiv_post_thumbnail(); ?>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
  <div class="entry-meta">
    <span class="tag-links"><?php the_tags('', ' ', ''); ?></span>
  </div>

<?php else : /* 목록 */ ?>

  <div class="row">
    <div class="col-xs-3 col-sm-2">
      <?php akaiv_post_thumbnail(); ?>
    </div><!-- column: 썸네일 -->
    <div class="col-xs-9 col-sm-10">
      <header class="entry-header">
        <h1 class="entry-title">
          <a href="<?php akaiv_the_url(); ?>" target="_blank" rel="bookmark"><?php akaiv_the_title(); ?></a>
        </h1>
      </header>
      <div class="entry-summary">
        <a href="<?php akaiv_the_url(); ?>"><?php the_excerpt(); ?></a>
      </div>
      <div class="entry-meta">
        <span class="cat-links"><i class="fa fa-fw fa-folder-open"></i> <?php echo get_the_category_list( ', ' ); ?></span>
        <?php if ( has_tag() ) : ?>
          <span class="tag-links"><i class="fa fa-fw fa-tag"></i> <?php the_tags('', ', ', ''); ?></span>
        <?php endif; ?>
        <span class="entry-date"><i class="fa fa-fw fa-clock-o"></i> <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ) ?></time></a></span>
        <span class="byline author vcard"><i class="fa fa-fw fa-user"></i> <a class="url fn" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_the_author(); ?></a></span>
        <?php akaiv_edit_post_link(); ?>
      </div>
    </div><!-- column: 제목과 요약 -->
  </div><!-- .row -->

<?php endif; ?>

<?php akaiv_after_page(); ?>
