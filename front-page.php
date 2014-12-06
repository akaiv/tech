<?php
require_once 'inc/add-post.php';
get_header();
akaiv_before_content(); ?>

<?php
  /* 관리자: 새 항목 추가 폼 */
  if ( current_user_can( 'publish_posts' ) ) :
    require_once 'templates/form-add-post.php';
  endif;

  /* 첫 화면 내용 */
  get_template_part( 'templates/content', 'front' );
?>

<?php
akaiv_after_content();
get_footer();
