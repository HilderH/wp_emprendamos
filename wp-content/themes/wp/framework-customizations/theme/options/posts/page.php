<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'Page options', 'tarful' ),
		'type'    => 'box',
		'options' => array(
			'tf_page_slider' => array(
				'type'   => 'multi-picker',
				'label'  => false,
				'desc'   => false,
				'picker' => array(
					'tf_switch' => array(
						'label'   => __( 'Slider?', 'tarful' ),
						'type'    => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'tarful' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'tarful' )
						),
					)
				),
				'choices' => array(
					'yes'  => array(
						'tf_slider_content'  => array(
							'type'  => 'select',
							'label' => __( 'Choose a slider', 'tarful' ),
	//						'choices' => fw_ext( 'slider' )->get_populated_sliders_choices(),
						),
					),
					'no'  => array()
				),
				'show_borders' => false,
			),
		),
	),
);