<?php

/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 * @package Atrium Design
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<title> Elegant design and home staging.</title>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Atrium Home Design specializes in creating elegant, market-ready interiors through professional home staging and design services. Our mission is to transform properties into inviting, stylish spaces that resonate with potential buyers and maximize their market appeal. We provide tailored solutions for vacant and occupied homes, aligning every design detail to highlight the unique features of the property.">
  <?php wp_head(); ?>
</head>
<?php
function custom_plugin_body_class($classes) {
  $classes[] = 'loading';
  return $classes;
}
add_filter('body_class', 'custom_plugin_body_class');
?>
<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
}
?>
<div id="header">
  <div class="header-inner">
    <div class="logo-toggle">
      <div class="logo-nav">
        <div class="logo">
          <a id="logo" href="<?php bloginfo('url'); ?>/">
            <img alt="Atrium Studio Logo" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2025/02/header-logo.webp"/>
          </a>
        </div>
        <div class="main-nav">
          <?php wp_nav_menu( array('theme_location' => '') ); ?>
        </div>
      </div>
      <div class="toggle-search">
        <div class="toggle">
          <a class="toggleMenu icon-menu" href="#"><span></span></a>  
        </div>
        <div id="search-icon"  aria-expanded="false" aria-haspopup="true" tabindex="0" role="button">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="7.5" cy="7.5" r="7" stroke="#6B6464"/>
<path d="M13 13L19 19" stroke="#6B6464" stroke-width="2" stroke-linejoin="round"/>
<circle cx="19" cy="19" r="1" fill="#6B6464"/>
</svg>
        </div>
      </div>
    </div>
    <div id="modal-container">
      <div id="search-container">
        <div id="modal-title">
          <h4>Search</h4>
          <div id="close-container" role="button" tabindex="0">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve">
					<g>
            <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
							c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
							C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
							s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
          </g>
					</svg>
            <span class="sr-only">close search</span>
          </div>
        </div>
        <?php echo do_shortcode ("[wpdreams_ajaxsearchlite]"); ?>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
