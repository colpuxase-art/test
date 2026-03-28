<?php
/**
 * Theme header.
 *
 * @package ShaSitter_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="ShaSitter, cat sitter premium à Genève : visites à domicile, soins et nouvelles quotidiennes." />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top py-2">
	<div class="container">
		<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			ShaSitter <span class="signature-moon" aria-hidden="true">🌙</span>
		</a>
		<a class="btn btn-sm btn-brand" href="#contact">Contacter Shana</a>
	</div>
</nav>
