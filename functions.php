<?php 
if ( ! isset( $content_width ) ) $content_width = 1024;

add_action( 'wp_enqueue_scripts', 'jml_scripts' );
add_action( 'init', 'jml_menus' );
add_theme_support( 'post-formats', array('aside','gallery','image','post','link') );
add_editor_style( 'editor-style.css' );
add_theme_support( 'automatic-feed-links' );
add_action( 'admin_menu', 'textlove_add_menu' );

function jml_scripts() {
  wp_enqueue_style( 'pure', $src = 'http://yui.yahooapis.com/pure/0.2.1/pure-min.css', $deps = false, $ver = '0.2.1', $media = 'all');
  wp_enqueue_style( 'style', $src = get_stylesheet_uri(), $deps = false, $ver = '1.0', $media = 'all' );
  wp_enqueue_style( 'font', $src = 'http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css', $deps = false, $ver = '3.2.1', $media = 'all' );
  wp_enqueue_script('modernizr', $src = get_stylesheet_directory_uri()."/js/modernizr.js", $deps = false, $ver = "1.0", $in_footer = false);
  wp_enqueue_script( 'yui', $src = 'http://yui.yahooapis.com/3.10.1/build/yui/yui-min.js', $deps = false, $ver = '3.10.1', $in_footer = true );
}

function jml_menus() {
  register_nav_menu( 'side-menu', __( 'Side Menu' ));
  register_nav_menu( 'bottom-menu', __( 'Bottom Menu'));
}

function jml_first_image($content, $size = 'large') {
  global $post, $posts;
  $first_img = false;
  ob_start();
  ob_end_clean();
  $id = preg_match('/wp-image-([0-9]*)/i', $content, $matches);
  $first_img = $matches[1];
  if ($first_img) {
    $iary = wp_get_attachment_image_src( $first_img, $size );
  }
  return $iary[0];
}