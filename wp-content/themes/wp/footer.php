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

	</div><!-- #content -->
	<?php tarful_prefooter_content(); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!--<?php do_action( 'tarful_theme_credits' ); ?>-->
			<p><?php printf( __( '%s', 'tarful' ), fw_get_db_settings_option('tf_footer_text') ); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php tarful_after_footer(); ?>

</body>
</html>
