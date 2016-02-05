<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tarful
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php tarful_favicon(); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php tarful_before_header(); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tarful' ); ?></a>
	<?php $background = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('tf_background_img') : '';
	if( !empty( $background) ){
	?>
	<header id="masthead" class="site-header" role="banner" style="background: transparent url(<?php echo $background['url'] ?>) no-repeat scroll center center;">
	<?php }else { ?>
	<header id="masthead" class="site-header" role="banner">
	<?php } ?>
		<div class="site-branding">
			<!--<?php if ( is_front_page() && is_home() ) : ?>-->

				<?php $logo_pos = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('tf_logo_position') : ''; ?>
				
				<h1 class="site-title" style="text-align: <?php echo $logo_pos ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php 
				if( function_exists('fw_get_db_settings_option') ){
				 	
				 	$picked = fw_get_db_settings_option('tf_logo_switch/gadget');
					$value = fw_get_db_settings_option('tf_logo_switch/'. $picked);
					
					if ($picked === 'tf_logo_img'){
						echo '<img src="'.$value['tf_logo']['url'].'"</img>';
					} 
				 		
				 	else{
				 		echo $value['tf_logo'];
				 	}

				}else{
				 	
				 	echo bloginfo( 'name' ); 
				}?>
				</a></h1>
				
			<!--<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>-->
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tarful' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<?php tarful_after_header(); ?>
	
	<div id="content" class="site-content">
