<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'General', 'Emprendamos' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'General Settings', 'Emprendamos' ),
				'type'    => 'box',
				'options' => array(
					'tf_logo_switch'       => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'value'        => array(
							'gadget' => 'tf_logo_img',
						),
						'picker'       => array(
							'gadget' => array(
								'label'        => __( 'Logo Type', 'Emprendamos' ),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'tf_logo_img',
									'label' => __( 'Image', 'Emprendamos' )
								),
								'left-choice'  => array(
									'value' => 'tf_logo_text',
									'label' => __( 'Text', 'Emprendamos' )
								),

								'desc'         => __( 'Choose whether to use the Site Title text as logo.','Emprendamos' ),
								'help'         => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
									__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
										'Emprendamos' ),
									__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
										'Emprendamos' )
								),
							)
						),
						'choices'  => array(
							'tf_logo_img'  => array(
								'tf_logo'  => array(
									'label' => __( 'Logo', 'Emprendamos' ),
									'desc'  => __( 'Upload a site logo', 'Emprendamos' ),
									'type'  => 'upload'
								),
							),
							'tf_logo_text' => array(
								'tf_logo'    => array(
									'label' => __( 'Logo', 'Emprendamos' ),
									'desc'  => __( 'Write your website logo name', 'Emprendamos' ),
									'type'  => 'text',
									'value' => get_bloginfo( 'name' )
								),
							),
						),
						'show_borders' => false,
					),


					'tf_favicon' => array(
						'label' => __( 'Favicon', 'Emprendamos' ),
						'desc'  => __( 'Upload a favicon image', 'Emprendamos' ),
						'type'  => 'upload'
					),
				),
			)
		)
	),

	'header' => array(
		'title'		=> __('Header','Emprendamos'),
		'type'		=> 'tab',
		'options' 	=> array(
			'general-box' => array(
				'title' => __('Header Settings','Emprendamos'),
				'type'  => 'box',
				'options' => array(
					'tf_logo_position' => array(
						'label' 	=> __('Logo Position', 'Emprendamos'),
						'desc'  => __( 'Choose logo position on header', 'Emprendamos' ),
						'type' 		=> 'select',
						'value' => 'center',
						'choices'	=> array(
							'left' => __('Left', 'Emprendamos'),
							'center' => __('Middle', 'Emprendamos'),
							'right' => __('Right', 'Emprendamos'),
						),
					),

					'tf_background_img' => array(
						'label' => __( 'Background image', 'Emprendamos' ),
						'desc'  => __( 'Upload a header backround image', 'Emprendamos' ),
						'type'  => 'upload'
					),

					'tf_header_slider' => array(
						'type'   => 'multi-picker',
						'label'  => false,
						'desc'   => false,
						'picker' => array(
							'tf_switch' => array(
								'label'   => __( 'Slider?', 'Emprendamos' ),
								'type'    => 'switch',
								'right-choice' => array(
									'value' => 'yes',
									'label' => __( 'Yes', 'Emprendamos' )
								),
								'left-choice'  => array(
									'value' => 'no',
									'label' => __( 'No', 'Emprendamos' )
								),
							)
						),
						'choices' => array(
							'yes'  => array(
								'tf_slider_content'  => array(
									'type'  => 'select',
									'label' => __( 'Choose a slider', 'Emprendamos' ),
	//								'choices' => fw_ext( 'slider' )->get_populated_sliders_choices(),
								),
							),
							'no'  => array()
						),
						'show_borders' => false,
					),
				)
			),
		)
	),

	'footer' => array(
		'title'		=> __('Footer','Emprendamos'),
		'type'		=> 'tab',
		'options' 	=> array(
			'general-box' => array(
				'title' => __('Footer Settings','Emprendamos'),
				'type'  => 'box',
				'options' => array(
					'tf_prefooter' => array(
					    'type'  => 'multi-picker',
					    'label' => false,
						'desc'  => false,
						'value' => array(
							'tf_switch' => 'no',
						),
						'picker'  => array(
							'tf_switch' => array(
								'label' => __('Prefooter?', 'Emprendamos'),
					    		'desc'  => __('Adds fixed content before footer', 'Emprendamos'),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'yes',
									'label' => __( 'Yes', 'Emprendamos' )
								),
								'left-choice'  => array(
									'value' => 'no',
									'label' => __( 'No', 'Emprendamos' )
								),
							)
						),
						'choices'  => array(
							'yes'  => array(
								'tf_prefooter_content'  => array(
									'type'         => 'multi-picker',
									'label'        => false,
									'desc'         => false,
									'picker'       => array(
										'tf_select' => array(
											'label'   => __( 'Content type', 'Emprendamos' ),
											'type'    => 'select',
											'choices' => array(
												'tf_text'  => __( 'Text', 'Emprendamos' ),
												'tf_slider' => __( 'Slider', 'Emprendamos' )
											),
											'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
												'Emprendamos' ),
										)
									),
									'choices'      => array(
										'tf_text'  => array(
											'tf_content'  => array(
												'type'  => 'wp-editor',
												'label' => __( 'Text', 'Emprendamos' ),
												'help'  => __('Help tip', 'Emprendamos'),
											    'media_buttons' => true,
											    'reinit' => false,
											    'size' => 'small', // small | large
											    'editor_type' => 'tinymce',
											    'editor_height' => 100
											),

										),
										'tf_slider' => array(
											'tf_content'  => array(
												'type'  => 'select',
												'label' => __( 'Slider', 'Emprendamos' ),
	//											'choices' => fw_ext( 'slider' )->get_populated_sliders_choices(),
											),
										),
									),
									'show_borders' => false,
								),
							),
							'no' => array(),
						),
						'show_borders' => false,
					),

					'tf_footer_text' => array(
						'label' => __('Footer contents','Emprendamos'),
						'type'  => 'wp-editor',
					    'value' => 'default value',
					    'attr'  => array( 'class' => 'custom-class'),
					    'desc'  => __('Description', 'Emprendamos'),
					    'help'  => __('Help tip', 'Emprendamos'),
					    'media_buttons' => true,
					    'reinit' => false,
					    'size' => 'small', // small | large
					    'editor_type' => 'tinymce',
					    'editor_height' => 100
					),
				)
			),
		)
	),
);