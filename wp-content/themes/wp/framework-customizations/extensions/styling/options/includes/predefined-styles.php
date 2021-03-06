<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/** @var FW_Extension_Styling $styling */
$styling = fw()->extensions->get('styling');
/*$background_image = array(
	'value'   => 'none',
	'choices' => array(
		'none' => array(
			'icon' => $styling->locate_URI('/static/images/patterns/no_pattern.jpg'),
			'css'  => array(
				'background-image' => 'none'
			)
		),
		'bg-1' => array(
			'icon' =>  $styling->locate_URI('/static/images/patterns/diagonal_bottom_to_top_pattern_preview.jpg'),
			'css'  => array(
				'background-image'  => 'url("' .  $styling->locate_URI('/static/images/patterns/diagonal_bottom_to_top_pattern.png') . '")',
				'background-repeat' => 'repeat',
			)
		),
		'bg-2' => array(
			'icon' =>  $styling->locate_URI('/static/images/patterns/diagonal_top_to_bottom_pattern_preview.jpg'),
			'css'  => array(
				'background-image'  => 'url("' .  $styling->locate_URI('/static/images/patterns/diagonal_top_to_bottom_pattern.png') . '")',
				'background-repeat' => 'repeat',
			)
		),
		'bg-3' => array(
			'icon' =>  $styling->locate_URI('/static/images/patterns/dots_pattern_preview.jpg'),
			'css'  => array(
				'background-image'  => 'url("' .  $styling->locate_URI('/static/images/patterns/dots_pattern.png') . '")',
				'background-repeat' => 'repeat',
			)
		),
		'bg-4' => array(
			'icon' =>  $styling->locate_URI('/static/images/patterns/romb_pattern_preview.jpg'),
			'css'  => array(
				'background-image'  => 'url("' .  $styling->locate_URI('/static/images/patterns/romb_pattern.png') . '")',
				'background-repeat' => 'repeat',
			)
		),
		'bg-5' => array(
			'icon' =>  $styling->locate_URI('/static/images/patterns/square_pattern_preview.jpg'),
			'css'  => array(
				'background-image'  => 'url("' .  $styling->locate_URI('/static/images/patterns/square_pattern.png') . '")',
				'background-repeat' => 'repeat',
			)
		),
		'bg-6' => array(
			'icon' =>  $styling->locate_URI('/static/images/patterns/noise_pattern_preview.jpg'),
			'css'  => array(
				'background-image'  => 'url("' .  $styling->locate_URI('/static/images/patterns/noise_pattern.png') . '")',
				'background-repeat' => 'repeat',
			)
		),
		'bg-7' => array(
			'icon' =>  $styling->locate_URI('/static/images/patterns/vertical_lines_pattern_preview.jpg'),
			'css'  => array(
				'background-image'  => 'url("' .  $styling->locate_URI('/static/images/patterns/vertical_lines_pattern.png') . '")',
				'background-repeat' => 'repeat',
			)
		),
		'bg-8' => array(
			'icon' =>  $styling->locate_URI('/static/images/patterns/waves_pattern_preview.jpg'),
			'css'  => array(
				'background-image'  => 'url("' .  $styling->locate_URI('/static/images/patterns/waves_pattern.png') . '")',
				'background-repeat' => 'repeat',
			)
		),
	)
);*/

$styles = array(
	'black' => array(
		'name'   => 'Black',
		'icon'   =>  '', //$styling->locate_URI('/static/images/black_predefined_style.jpg'),
		'blocks' => array(
			'header'  => array(
				'h1'          => array(
					'size'   => 18,
					'family' => 'Merienda One',
					'style'  => 'regular',
					'color'  => '#ffffff'
				),
				'links'       => '#ffffff',
				'links_hover' => '#f17e12',
				'background'  => array(
					'background-color' => array(
						'primary'   => '#111111',
						'secondary' => '#111111'
					),
					//'background-image' => $background_image,
				),
			),
			'content' => array(
				'h2'          => array(
					'size'   => 24,
					'family' => 'Merienda One',
					'style'  => 'regular',
					'color'  => '#2b2b2b'
				),
				'h3'          => array(
					'size'   => 22,
					'family' => 'Merienda One',
					'style'  => 'regular',
					'color'  => '#2b2b2b'
				),
				'p'           => array(
					'size'   => 16,
					'family' => 'Open Sans',
					'style'  => 'regular',
					'color'  => '#2b2b2b'
				),
				'links'       => '#f17e12',
				'links_hover' => '#834a15',
				'background'  => array(
					'background-color' => array(
						'primary'   => '#ffffff',
						'secondary' => '#ffffff'
					),
					//'background-image' => $background_image,
				),
			),
			'sidebar' => array(
				'h1'          => array(
					'size'   => 11,
					'family' => 'Lato',
					'style'  => '900',
					'color'  => '#ffffff'
				),
				'links'       => '#ffffff',
				'links_hover' => '#f17e12',
				'background'  => array(
					'background-color' => array(
						'primary'   => '#111111',
						'secondary' => '#111111'
					),
					//'background-image' => $background_image,
				),
			),
			'footer'  => array(
				'h1'          => array(
					'size'   => 11,
					'family' => 'Lato',
					'style'  => '900',
					'color'  => '#ffffff'
				),
				'links'       => '#ffffff',
				'links_hover' => '#f17e12',
				'background'  => array(
					'background-color' => array(
						'primary'   => '#111111',
						'secondary' => '#111111'
					),
				),
			)
		)
	),
);
return apply_filters( 'fw_ext_styling_predefined_styles', $styles );
