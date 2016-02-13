<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tarful
 */

?>

	</div><!-- #content
	<?php tarful_prefooter_content(); ?>-->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="bac">
				<div class="contact">
					<h1>¿Te interesa? Contáctanos</h1>
					<?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]')?>
					<p class="rigt">© 2016 Emprendamos. Todos los derechos reservados</p>
				</div>
				<div class="info-foo">
				<!--<?php do_action( 'tarful_theme_credits' ); ?>-->
					<p><?php printf( __( '%s', 'tarful' ), fw_get_db_settings_option('tf_footer_text') ); ?></p>
					<p class="ciudad">barquisimeto</p>
					<p class="dir">Urb. Nueva Segovia</p>
					<p class="dir">Calle 8 entre Carreras 1 y 2</p>
					<p class="dir">Edo. Lara - Venezuela.</p>
					<p class="tel">Tel.: +58-0251-253.38.86</p>
					<p class="tel">Cel.: +58-426-552.08.62</p>
					<p class="mail">info@emprendamos.com.ve </p>
				</div>

			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page

<?php wp_footer(); ?>-->
<!--<?php tarful_after_footer(); ?>-->

</body>
</html>
