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
  
  Foo

	<div><?php bloginfo('name'); ?></div>
  <?php bloginfo( 'description' ); ?>

	<nav>
		<?php wp_nav_menu(); ?>
	</nav>