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
function transl($eng, $nl){
  $out = $eng;
  if (get_bloginfo('language') != 'en-GB') {
    $out = $nl;
  }
  echo $out ;
}
?>
<?php
$bodyClass='';
if ( is_user_logged_in() ) {
    $bodyClass = 'mLoggedin';
	}

$layoutClass = 'layoutPage';
if ( is_home() ) {
    $layoutClass = 'layoutHome';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>
    <?php if ( !is_home() ) {
      echo get_the_title();
      echo ' | ';
    } ?>
    Openjournals.nl
  </title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ojs-style.css">

</head>
<body class="<?php echo $bodyClass ?>">


  <div class="ojPageWrap">

    <div class="<?php echo $layoutClass; ?> inWrap">
      <header class="ojHeader">
        <div class="ojLogo">
          <a href="/" title="Go to homepage"><img src="<?php bloginfo('template_url'); ?>/images/logo-openjournals.png" alt=""></a>
        </div>

        <div class="ojLang">
          <?php

            $cleanMenuLang = wp_nav_menu( array(
              'theme_location' => 'lang-menu',
              'echo' => false,
              'depth'=> 2,
            ) );
            echo strip_tags($cleanMenuLang, "<a>");
            //echo $cleanMenu;

          ?></div>

        <nav class="ojNav">
          <?php

            $cleanMenu = wp_nav_menu( array(
              'theme_location' => 'top-menu',
              'echo' => false,
              'depth'=> 2,
            ) );
            echo strip_tags($cleanMenu, "<a><ul><li>");
            //echo $cleanMenu;

          ?>
        </nav>

      </header>
