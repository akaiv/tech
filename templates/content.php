<?php akaiv_before_post(); ?>

<div class="row">
  <div class="hidden-xs col-sm-2">
    <?php akaiv_post_thumbnail(); ?>
  </div><!-- column: 썸네일 -->
  <div class="col-xs-12 col-sm-10">
    <header class="entry-header">
      <h1 class="entry-title">
        <a href="<?php akaiv_the_url(); ?>" target="_blank" rel="bookmark"><?php akaiv_the_title(); ?></a>
      </h1>
    </header>
    <div class="entry-summary">
      <p><?php the_excerpt(); ?></p>
    </div>
    <div class="entry-meta">
      <?php akaiv_entry_meta( 'category', 'fa-folder-open' ); ?>
      <?php akaiv_entry_meta( 'tag', 'fa-tag' ); ?>
      <?php akaiv_entry_meta( 'date', 'fa-clock-o' ); ?>
      <?php akaiv_edit_post_link( false, 'fa-pencil' ); ?>
    </div>
  </div><!-- column: 제목과 요약 -->
</div><!-- .row -->

<?php akaiv_after_post(); ?>
