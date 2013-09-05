<!doctype html>
<html  <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <title>
    <?php if (is_single()) {
      echo get_the_title();
    } else {
      echo bloginfo( 'title' );
    };
    ?>    
  </title>
  <meta name="keywords" content="food, cooking, chef, kitchen, culinary science, food science" />
  <meta name="author" content="humans.txt">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
<div class="pure-g-r" id="layout">
  <div class="sidebar pure-u">
    <header class="header">
      <hgroup>
        <h1>
          <a class="mute" href="<?php echo home_url(); ?>">
            <i class="shademe icon-file-text-alt icon-4x icon-muted"></i>
          </span></a>
        </h1>
        <h1 class="brand-title"><?php echo bloginfo( 'title' ); ?></h1>
        <h2 class="brand-tagline"><?php echo bloginfo( 'description' ); ?></h2>
      </hgroup>

    </header>
    <nav class="nav">
      <?php wp_nav_menu( array( 'theme_location' => 'side-menu' ) ); ?>
      <!-- <ul>
        <li><a href="<?php echo get_post_format_link('link'); ?>"><i class="pull-right icon-fixed-width icon-link"></i> Links</a></li>
      </ul> -->
    </nav>

     <?php dynamic_sidebar( 'side-menu' ); ?> 

  </div>

  <div class="pure-u-1">
    <div class="content">
