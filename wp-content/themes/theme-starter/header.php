<?php
/**
 * The header for our theme.
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="header" class="large_header ">
    <div id="header_logo" class="large" alt="New Grit Soap Co."></div>
    <nav id="large_nav" class="large_nav">
      <li> <a href="#">Home</a> </li>
      <li> <a href="#about">Process</a> </li>     
      <li> <a href="#shop">Shop</a> </li>     
      <li> <a href="#contact">Contact</a> </li>
    </nav>   
    
    <div id="sticky_header" class="sticky_header" alt="New Grit Soap Co.">
      <div id="sticky_logo" class="small" alt="New Grit Soap Co."></div>
      <nav id="sticky_nav" class="small_nav">
        <li> <a href="#">Home</a> </li>
        <li> <a href="#about">Process</a> </li>     
        <li> <a href="#shop">Shop</a> </li>    
        <li> <a href="#contact">Contact</a> </li>
      </nav>   
    </div>
  </header>

	<nav>
    <?php wp_nav_menu(array(
              'theme_location'  => 'primary',
            	'container'       => false,
              'menu_id'         => 'menu',
            	'before'          => '',
            	'after'           => '',
            	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s<div class="clear"></div></ul>',
            	'depth'           => 0,
            	'walker'          => ''
            )); ?>
	</nav>
  
  
  