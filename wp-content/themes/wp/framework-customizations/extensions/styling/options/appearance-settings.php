<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'theme_style' => array(
		'label'      => false,
		'type'       => 'style',
		'predefined' => $predefined = include_once( 'includes/predefined-styles.php' ),
 	   	'value' => $predefined['black']['blocks'],
		'blocks'     => array(
			'header'  => array(
				'title'        => __( 'Header', 'fw' ),
				'elements'     => array( 'h1', 'links', 'links_hover', 'background'),
				//all allowed array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'links', 'links_hover', 'background' )
				'css_selector' => array(
					'#masthead',
					'.primary-navigation .mega-menu',
					'.primary-navigation .mega-col',
					'.primary-navigation .mega-row',
				),
			),
			'content' => array(
				'title'        => __( 'Content', 'fw' ),
				'elements'     => array( 'h2', 'h3', 'p', 'links', 'links_hover', 'background' ),
				'css_selector' => array(
					'#primary.content-area',
					'#primary.portfolio-content',
					'#content header',
					'#content article .entry-content',
					'#content article .entry-meta'
				)
			),
			'sidebar' => array(
				'title'        => __( 'Sidebar', 'fw' ),
				'elements'     => array( 'h1', 'links', 'links_hover', 'background' ),
				'css_selector' => array( '#secondary', '.site:before' )
			),
			'footer'  => array(
				'title'        => __( 'Footer', 'fw' ),
				'elements'     => array( 'h1', 'links', 'links_hover', 'background' ),
				'css_selector' => '#colophon'
			),
		),
	),
);