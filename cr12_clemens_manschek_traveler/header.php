<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cr12_clemens_manschek_traveler
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/473562d7d7.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site" style="background:olive">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cr12_clemens_manschek_traveler' ); ?></a>

	<header id="masthead" class="site-header">


      <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation" id="navi">

   <div class="container-fluid">

       <!-- Brand and toggle get grouped for better mobile display -->

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">

           <span class="navbar-toggler-icon"></span>

       </button>

       <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>

           <?php

           wp_nav_menu( array(

               'theme_location'    => 'primary',

               'depth'             => 2, // 1 = no dropdowns, 2 = dropdown

               'container'         => 'div',

               'container_class'   => 'collapse navbar-collapse',

               'container_id'      => 'bs-example-navbar-collapse-1',

               'menu_class'        => 'nav navbar-nav',

               'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',

               'walker'            => new WP_Bootstrap_Navwalker(),

           ) );

           ?>

       </div>

   </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content container my-5">
		<div class="row">

