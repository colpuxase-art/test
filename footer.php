<?php
/**
 * Footer du thème.
 *
 * @package Shasitter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer class="site-footer">
	<div class="site-footer__inner">
		<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Menu de pied de page', 'shasitter' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
		</nav>
		<p class="footer-meta">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Shasitter · Cat sitting premium à domicile.</p>
	</div>
</footer>

<a class="floating-whatsapp" href="https://wa.me/33600000000?text=Bonjour%20Shana%2C%20je%20souhaite%20réserver%20une%20visite%20pour%20mon%20chat%20%F0%9F%90%BE" target="_blank" rel="noopener noreferrer">
	<span class="btn btn-primary">💬 WhatsApp</span>
</a>

<?php wp_footer(); ?>
</body>
</html>
