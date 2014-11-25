<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title><?php akaiv_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo( 'name' ); ?> &mdash; 피드" href="<?php echo esc_url( get_feed_link() ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/html5shiv/dist/html5shiv.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/respond/dest/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link sr-only" href="#content"><?php echo 'Skip to content'; ?></a>

<header id="masthead" class="site-header" role="banner">
  <?php $args = array( 'title_li' => '', 'depth' => 1, 'order' => 'DESC' ); ?>
  <nav id="gnb" class="site-navigation gnb gnb-mobile navbar navbar-default navbar-fixed-top visible-xs" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#gnb-collapse">
          <span class="sr-only">메뉴 토글</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-right" id="gnb-collapse">
        <ul class="nav navbar-nav"><?php wp_list_categories( $args ); ?></ul>
      </div>
    </div>
  </nav>
  <nav class="site-navigation gnb gnb-desktop text-center" role="navigation">
    <div class="container">
      <h1 id="brand" class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <?php if ( get_bloginfo( 'description' ) ) : ?><p class="site-description"><?php bloginfo( 'description' ); ?></p><?php endif; ?>
      <ul class="cat-list list-inline hidden-xs"><?php wp_list_categories( $args ); ?></ul>
    </div>
  </nav>
</header><!-- .site-header -->

<div class="site-search">
  <div class="container">
    <?php get_search_form(); ?>
  </div>
</div>

<main id="main" class="site-main" role="main">
  <div class="container">
