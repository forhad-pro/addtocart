<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

// Regular Button Settings.
CSF::createSection(
	$prefix,
	array(
		'title'  => 'Regular Button Settings',
		'icon'   => '',
		'fields' => array(

			array(
				'type'    => 'subheading',
				'content' => 'Text Options',
			),
			array(
				'id'     => 'atc_simple_fieldset',
				'type'   => 'fieldset',
				'title'  => 'Simple Products',
				'fields' => array(
					array(
						'id'      => 'atc_simple_txt',
						'type'    => 'text',
						'title'   => 'Text',
						'default' => 'Simple Products',
					),
					array(
						'id'    => 'atc_simple_icon',
						'type'  => 'icon',
						'title' => 'Icon',
					),
					array(
						'id'      => 'atc_simple_icon_position',
						'type'    => 'button_set',
						'title'   => 'Icon Position',
						'options' => array(
							'before' => 'Before',
							'after'  => 'After',
						),
						'default' => 'before',
					),
				),
			),
			array(
				'id'     => 'atc_variable_fieldset',
				'type'   => 'fieldset',
				'title'  => 'Variable Products',
				'fields' => array(
					array(
						'id'      => 'atc_variable_txt',
						'type'    => 'text',
						'title'   => 'Text',
						'default' => 'variable Products',
					),
					array(
						'id'    => 'atc_variable_icon',
						'type'  => 'icon',
						'title' => 'Icon',
					),
					array(
						'id'      => 'atc_variable_icon_position',
						'type'    => 'button_set',
						'title'   => 'Icon Position',
						'options' => array(
							'before' => 'Before',
							'after'  => 'After',
						),
						'default' => 'before',
					),
				),
			),
			array(
				'id'     => 'atc_grouped_fieldset',
				'type'   => 'fieldset',
				'title'  => 'Grouped Products',
				'fields' => array(
					array(
						'id'      => 'atc_grouped_txt',
						'type'    => 'text',
						'title'   => 'Text',
						'default' => 'Grouped Products',
					),
					array(
						'id'    => 'atc_grouped_icon',
						'type'  => 'icon',
						'title' => 'Icon',
					),
					array(
						'id'      => 'atc_grouped_icon_position',
						'type'    => 'button_set',
						'title'   => 'Icon Position',
						'options' => array(
							'before' => 'Before',
							'after'  => 'After',
						),
						'default' => 'before',
					),
				),
			),
			array(
				'id'     => 'atc_external_fieldset',
				'type'   => 'fieldset',
				'title'  => 'External Products',
				'fields' => array(
					array(
						'id'      => 'atc_external_txt',
						'type'    => 'text',
						'title'   => 'Text',
						'default' => 'External Products',
					),
					array(
						'id'    => 'atc_external_icon',
						'type'  => 'icon',
						'title' => 'Icon',
					),
					array(
						'id'      => 'atc_external_icon_position',
						'type'    => 'button_set',
						'title'   => 'Icon Position',
						'options' => array(
							'before' => 'Before',
							'after'  => 'After',
						),
						'default' => 'before',
					),
				),
			),
			array(
				'id'      => 'atc_typography_regular',
				'type'    => 'typography',
				'title'   => 'Regular Button Typography',
				'output'  => '.heading',
				'color'   => false,
				'default' => array(
					'color'          => '#ffbc00',
					'font-family'    => 'Barlow',
					'font-size'      => '16',
					'line-height'    => '20',
					'letter-spacing' => '-1',
					'text-align'     => 'center',
					'text-transform' => 'uppercase',
					'subset'         => 'latin-ext',
					'type'           => 'google',
					'unit'           => 'px',
				),
			),
			array(
				'id'      => 'atc_color_regular',
				'type'    => 'color_group',
				'title'   => 'Regular Button Color',
				'options' => array(
					'color-txt'       => 'Color Text',
					'color-txt-hover' => 'Color Text on Hover',
					'color-bg'        => 'Color Background',
					'color-bg-hover'  => 'Color Background on Hover',
				),
				'default' => array(
					'color-txt'       => '#ffce4b',
					'color-txt-hover' => '#ff595e',
					'color-bg'        => '#0052cc',
					'color-bg-hover'  => '#0052cc',
				),
			),
			array(
				'id'      => 'atc_regular_icon_show',
				'type'    => 'checkbox',
				'title'   => 'Show Icon',
				'default' => true,
			),
			array(
				'id'         => 'atc_regular_icon_choose',
				'type'       => 'button_set',
				'title'      => 'Choose Icon',
				'options'    => array(
					'facebook' => '<i class="fa fa-facebook"></i>',
					'twitter'  => '<i class="fa fa-twitter"></i>',
					'google'   => '<i class="fa fa-google"></i>',
				),
				'default'    => 'facebook',
				'dependency' => array( 'atc_regular_icon_show', '==', 'true' ),
			),
			array(
				'id'      => 'atc_regular_icon_alignment',
				'type'    => 'select',
				'title'   => 'Icon Alignment',
				'options' => array(
					'left'  => 'Left',
					'right' => 'Right',
				),
				'default' => 'left',
			),

			array(
				'type'    => 'subheading',
				'content' => 'Button Options',
			),
			array(
				'id'          => 'atc_button_size',
				'type'        => 'dimensions',
				'title'       => 'Button Size',
				'width_icon'  => 'width',
				'height_icon' => 'height',
				'default'     => array(
					'width'  => '100',
					'height' => '250',
					'unit'   => 'px',
				),
			),
			array(
				'id'       => 'atc_regular_border',
				'type'     => 'border',
				'title'    => 'Border',
				'all_icon' => 'Size',
				'all'      => true,
				'color'    => false,
			),
			array(
				'id'      => 'atc_regular_border_color',
				'type'    => 'color_group',
				'title'   => 'Border Color',
				'options' => array(
					'border-color' => 'Normal',
					'border-hover' => 'On Hover',
				),
				'default' => array(
					'border-color' => '#ffce4b',
					'border-hover' => '#ff595e',
				),
			),
			array(
				'id'          => 'atc_regular_border_radius',
				'type'        => 'border',
				'title'       => 'Border Radius',
				'top_icon'    => 'Top',
				'bottom_icon' => 'Bottom',
				'left_icon'   => 'Left',
				'right_icon'  => 'Right',
				'color'       => false,
				'style'       => false,
			),
			array(
				'id'          => 'atc_regular_margin',
				'type'        => 'spacing',
				'title'       => 'Margin',
				'top_icon'    => 'Top',
				'bottom_icon' => 'Bottom',
				'left_icon'   => 'Left',
				'right_icon'  => 'Right',
				'default'     => array(
					'top'    => '50',
					'right'  => '100',
					'bottom' => '50',
					'left'   => '100',
					'unit'   => 'px',
				),
			),
			array(
				'id'          => 'atc_regular_Padding',
				'type'        => 'spacing',
				'title'       => 'Padding',
				'top_icon'    => 'Top',
				'bottom_icon' => 'Bottom',
				'left_icon'   => 'Left',
				'right_icon'  => 'Right',
				'default'     => array(
					'top'    => '50',
					'right'  => '100',
					'bottom' => '50',
					'left'   => '100',
					'unit'   => 'px',
				),
			),

		),
	)
);
