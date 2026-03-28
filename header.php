<?php
/**
 * Header du thème.
 *
 * @package Shasitter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<div class="header-inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span>Shasitter</span>
			<span class="brand-badge">Disponible</span>
		</a>

		<nav class="main-navigation" aria-label="<?php esc_attr_e( 'Menu principal', 'shasitter' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
		</nav>
	</div>
</header>
