<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */


?>

<?php
$bodyClass='';
if ( is_user_logged_in() ) {
    $bodyClass = 'mLoggedin';
	}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>
    <?php if ( !is_home() ) {
      echo removeEngStr(get_the_title());
      echo ' | ';
    } ?>
    Meertens Instituut
  </title>
	<!-- <title><?php //the_title();?></title> -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/meertens-style.css">

</head>
<body class="<?php echo $bodyClass ?>">

	<div class="screenReaderMenu">
    <a href="#main">skip to main content</a>
  </div>

  <nav class="mMainNavgation mMarginBottom" id="MainNavgation">
    <?php

      $cleanMenu = wp_nav_menu( array(
        //'menu_id' => 'my-custom-menu',
        'echo' => false,
        'depth'=> 2,
      ) );
      echo strip_tags($cleanMenu, "<a><ul><li>");
      //echo $cleanMenu;

    ?>
  </nav>
