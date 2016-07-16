<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kamstra_Fam
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- Meta -->

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">

<!-- Twitter Cards -->

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="<?php the_title(); ?>" />
<meta name="twitter:description" content="<?php the_field('155_word_description'); ?>" />
<meta name="twitter:image" content="<?php the_field('background_image'); ?>" />

<!-- OpenGraph -->

<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:description" content="<?php the_field('155_word_description'); ?>" />
<meta property="og:image" content="<?php the_field('background_image'); ?>" />
<meta property="og:type" content="article" />
<meta property="article:author" content="<?php the_author(); ?>" />
<meta property="og:site_name" content="KamstraFam" />
<meta property="og:url" content="<?php the_permalink(); ?>" />

<!-- Links -->

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/logo-header.png">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/genericons/genericons.css">

<!-- Scripts -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/min/jquery-min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'kamstrafam' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="row">
			<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    					<img src="<?php bloginfo('template_directory'); ?>/images/logo-header.png" alt="Your Image Description Here" />
					</a>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="genericon genericon-menu"></span></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
