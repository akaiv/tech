<?php
/* <head>: 파비콘, 메타 */
function akaiv_head() { ?>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-180x180.png">
  <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?>">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png" sizes="32x32">
  <meta name="msapplication-TileColor" content="#2c3e50">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/favicon/mstile-144x144.png">
  <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/images/favicon/mstile-70x70.png">
  <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/images/favicon/mstile-150x150.png">
  <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/images/favicon/mstile-310x310.png">
  <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/images/favicon/mstile-310x150.png">
  <meta name="application-name" content="<?php bloginfo( 'name' ); ?>">

  <?php if ( is_singular() ) : ?>
  <meta property="og:title" content="<?php single_post_title(); ?>">
  <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt()); ?>">
  <meta property="og:url" content="<?php the_permalink(); ?>">
  <meta property="og:type" content="article">
  <?php
    $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    if ($fb_image) :
      echo '<meta property="og:image" content="'.$fb_image[0].'">';
    endif;
  ?>

  <?php else : ?>
  <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
  <meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/fb-image.jpg">

  <?php endif;
}
add_action('wp_head', 'akaiv_head');

/* <title> */
function akaiv_wp_title( $title, $sep ) {
  if ( is_feed() )
    return $title;

  $title            = akaiv_page_title();
  $site_name        = get_bloginfo( 'name', 'display' );
  $site_description = get_bloginfo( 'description', 'display' );

  if ( is_home() || is_front_page() ) :
    if ( ! $site_description ) :
      return;
    else :
      $title = "$title $sep $site_description";
    endif;

  else :
    $title = "$title $sep $site_name";

  endif;

  return $title;
}
add_filter( 'wp_title', 'akaiv_wp_title', 10, 2 );
