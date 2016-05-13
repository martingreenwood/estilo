<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estilo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class($pagename); ?>>

<div id="loader">

	<div class="mikepad-loading">
		<div class="binding"></div>
		<div class="pad">
			<div class="line line1"></div>
			<div class="line line2"></div>
			<div class="line line3"></div>
		</div>
		<div class="text">
			<h3><?php the_field('hash_tag', 'option'); ?></h3>
		</div>
	</div>

</div>

<div id="page" class="site container">

	<header id="masthead" class="site-header" role="banner">
	
		<div class="site-branding">

			<?php if ( get_field('custom_logo', 'option') ): ?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php the_field('custom_logo', 'option') ?>" width="170" height="170">
					</a>
				</h1>
			<?php endif; ?>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle icon menu5" aria-controls="primary-menu" aria-expanded="false">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="social-profiles">
			<ul>
			<?php if( have_rows('social_profiles', 'option') ): while ( have_rows('social_profiles', 'option') ) : the_row(); ?>
				<?php $socialName = str_replace(" ", "-", strtolower(get_sub_field('social_profile_name'))); ?>
				<li><a href="<?php the_sub_field('social_url'); ?>" target="_blank"><i class="fa fa-<?php echo $socialName; ?>"></i></a></li>
			<?php endwhile; endif; ?>
			</ul>	
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div id="hashtag">
			<h3><?php the_field('hash_tag', 'option'); ?></h3>
		</div>
