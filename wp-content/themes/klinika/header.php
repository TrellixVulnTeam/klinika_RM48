<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Klinika
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header class="header container-xl">
		<div class="row">
			<div class="header__logo-wrapper col-4">
				<div class="header__logo">
					<?php the_custom_logo(); ?>
				</div>
			</div>
			<nav class="header__navigation col-8">
				<a href="tel:+492117817960" class="header__phone"><span class="icon icon-phone"></span>+49 211 781 796 0</a>
				<a href="#" class="header__action"><?php _e( 'Unverbindliches Angebot', 'kl' )?></a>
			</nav>
		</div>
	</header>
