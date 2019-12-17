<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_prefix_my_options';

//
// Create options
//
CSF::createOptions( $prefix, array(
  // 'menu_title' => 'CSF Demo',
  'menu_slug'  => 'edit.php?post_type=add_to_cart_cpt',
) );

//
// Sticky Button Settings
//
CSF::createSection( $prefix, array(
  'title'  => 'Sticky Button Settings',
  'icon'   => 'fa fa-rocket',
  'fields' => array(

    array(
      'id'      => 'atc_sticky_show',
      'type'    => 'switcher',
      'title'   => 'Show Sticky Button',
      'label'   => 'Do you want activate it ?',
      'default' => true
    ),

    array(
      'type'    => 'subheading',
      'content' => 'Text Options',
    ),
    array(
      'id'      => 'atc_txt_sticky_products',
      'type'    => 'text',
      'title'   => 'Button Text',
      'default' => 'Simple Products'
    ),
    array(
      'id'      => 'atc_typography_regular',
      'type'    => 'typography',
      'title'   => 'Typography',
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
      'id'        => 'atc_color_sticky',
      'type'      => 'color_group',
      'title'     => 'Sticky Button Color',
      'options'   => array(
        'color-txt'       => 'Color Text',
        'color-txt-hover' => 'Color Text on Hover',
        'color-bg'        => 'Color Background',
        'color-bg-hover'  => 'Color Background on Hover',
      ),
      'default'   => array(
        'color-txt'       => '#ffce4b',
        'color-txt-hover' => '#ff595e',
        'color-bg'        => '#0052cc',
        'color-bg-hover'  => '#0052cc',
      )
    ),
    array(
      'id'      => 'atc_sticky_icon_show',
      'type'    => 'switcher',
      'title'   => 'Show Icon',
      'label'   => 'Do you want activate it ?',
      'default' => true
    ),
    array(
      'id'         => 'atc_sticky_icon_choose',
      'type'       => 'button_set',
      'title'      => 'Choose Icon',
      'options'    => array(
        'facebook' => '<i class="fa fa-facebook"></i>',
        'twitter'  => '<i class="fa fa-twitter"></i>',
        'google'   => '<i class="fa fa-google"></i>',
      ),
      'default'    => 'facebook',
      'dependency' => array( 'atc_sticky_icon_show', '==', 'true' ),
    ),
    array(
      'id'          => 'atc_sticky_icon_alignment',
      'type'        => 'select',
      'title'       => 'Icon Alignment',
      'options'     => array(
        'left'  => 'Left',
        'right' => 'Right',
      ),
      'default'     => 'left'
    ),

    array(
      'type'    => 'subheading',
      'content' => 'Button Options',
    ),
    array(
      'id'          => 'atc_sticky_button_width',
      'type'        => 'spacing',
      'title'       => 'Button Width',
      'top_icon'    => 'Desktop',
      'right_icon'  => 'Tablet',
      'bottom_icon' => 'Mobile',
      'left'        => false,
      'default'  => array(
        'top'    => '50',
        'right'  => '100',
        'bottom' => '50',
        'unit'   => 'px',
      ),
    ),
    array(
      'id'          => 'atc_sticky_button_height',
      'type'        => 'spacing',
      'title'       => 'Button Width',
      'top_icon'    => 'Desktop',
      'right_icon'  => 'Tablet',
      'bottom_icon' => 'Mobile',
      'left'        => false,
      'default'  => array(
        'top'    => '50',
        'right'  => '100',
        'bottom' => '50',
        'unit'   => 'px',
      ),
    ),
    array(
      'id'          => 'atc_sticky_button_position',
      'type'        => 'select',
      'title'       => 'Button Position',
      'options'     => array(
        'top'    => 'Top',
        'bottom' => 'Bottom',
      ),
      'default'     => 'bottom'
    ),
    array(
      'id'       => 'atc_sticky_border',
      'type'     => 'border',
      'title'    => 'Border',
      'all_icon' => 'Size',
      'all'      => true,
      'color'    => false
    ),
    array(
      'id'        => 'atc_sticky_border_color',
      'type'      => 'color_group',
      'title'     => 'Border Color',
      'options'   => array(
        'border-color' => 'Normal',
        'border-hover' => 'On Hover',
      ),
      'default'   => array(
        'border-color' => '#ffce4b',
        'border-hover' => '#ff595e',
      )
    ),
    array(
      'id'          => 'atc_sticky_border_radius',
      'type'        => 'border',
      'title'       => 'Border Radius',
      'top_icon'    => 'Top',
      'bottom_icon' => 'Bottom',
      'left_icon'   => 'Left',
      'right_icon'  => 'Right',
      'color'       => false,
      'style'       => false
    ),
    array(
      'id'        => 'atc_sticky_color_bg',
      'type'      => 'color_group',
      'title'     => 'Background Color',
      'options'   => array(
        'color-txt'       => 'Color Text',
        'color-txt-hover' => 'Color Text on Hover',
        'color-bg'        => 'Color Background',
        'color-bg-hover'  => 'Color Background on Hover',
      ),
      'default'   => array(
        'color-txt'       => '#ffce4b',
        'color-txt-hover' => '#ff595e',
        'color-bg'        => '#0052cc',
        'color-bg-hover'  => '#0052cc',
      )
    ),
    array(
      'id'          => 'atc_sticky_margin',
      'type'        => 'spacing',
      'title'       => 'Margin',
      'top_icon'    => 'Top',
      'bottom_icon' => 'Bottom',
      'left_icon'   => 'Left',
      'right_icon'  => 'Right',
      'default'  => array(
        'top'    => '50',
        'right'  => '100',
        'bottom' => '50',
        'left'   => '100',
        'unit'   => 'px',
      ),
    ),
    array(
      'id'          => 'atc_sticky_Padding',
      'type'        => 'spacing',
      'title'       => 'Padding',
      'top_icon'    => 'Top',
      'bottom_icon' => 'Bottom',
      'left_icon'   => 'Left',
      'right_icon'  => 'Right',
      'default'  => array(
        'top'    => '50',
        'right'  => '100',
        'bottom' => '50',
        'left'   => '100',
        'unit'   => 'px',
      ),
    ),

  )
) );
