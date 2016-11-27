<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php
	$favicon = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('favicon') : '';
	if( !empty( $favicon ) ) :
	?>
	<link rel="icon" type="image/png" href="<?php echo $favicon['url'] ?>">
	<?php endif ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main fw-container">

			<div class="header-social">
				<?php do_action( 'site_socials_icons_list' ); ?>
			</div>

			<div class="site-logo">
				<?php $logo_img = fw_get_db_settings_option('logo'); ?>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
				   rel="home">
					<img src="<?php echo $logo_img['url'] ?>" alt="<?php echo get_option( 'blogname' ); ?>">
				</a>
			</div>

			<div class="header-signup">
				<?php do_action( 'site_signup_newsletter_button' ); ?>
			</div>
		</div>
	</header><!-- #masthead -->
	<div id="main" class="site-main">
