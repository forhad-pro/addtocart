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

  )
) );
