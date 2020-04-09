<?php
/**
 * Emma Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Emma Child
 */

function emma_child_color_palette( $colors ) {
  //overrides various registered colors with new hex values
  //$colors['primary']['color'] = '#0073aa';
  //$colors['primary-support']['color'] = '#D4F9F8';
  //$colors['secondary']['color'] = '#663F46';
  //$colors['secondary-support']['color'] = '#B8D8D8';
  
  //removes a color from the editor palette
  //unset( $colors['accent'] );

  return $colors;
}
add_filter ( 'emma_editor_color_palette', 'emma_child_color_palette' );
