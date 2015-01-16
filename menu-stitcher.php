<?php
/*
Plugin Name: WSU Spine Menu Stitcher
Plugin URI: http://web.wsu.edu/
Description: Enables the insertion of menus before and after each of the spine framework's main elements
Author: washingtonstateuniversity, natejacobson
Version: 0.1
*/

add_action( 'init', 'spine_register_menu_locations' );
/**
 * Register additional locations for WordPress menus
 */
function spine_register_menu_locations() {
  register_nav_menu('body-top',__( 'Body (Top)' ));
  register_nav_menu('body-bottom',__( 'Body (Bottom)' ));
  register_nav_menu('jacket-top',__( 'Jacket (Top)' ));
  register_nav_menu('jacket-bottom',__( 'Jacket (Bottom)' ));
  register_nav_menu('binder-top',__( 'Binder (Top)' ));
  register_nav_menu('binder-bottom',__( 'Binder (Bottom)' ));
  register_nav_menu('main-top',__( 'Main (Top)' ));
  register_nav_menu('main-bottom,',__( 'Main (Bottom)' ));
  register_nav_menu('side-top',__( 'Side (Top)' ));
  register_nav_menu('side-bottom',__( 'Side (Bottom)' ));
}