<?php
/**
 * Emma Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EmmaChild
 */

/**
 * Customize the editor color palette
 *
 * @param array $colors Editor palette colors.
 */
function emma_child_editor_color_palette_filter( $colors ) {
	// Override existing colors with values.
	$colors['primary']['color']           = '#0073aa';
	$colors['primary-support']['color']   = '#d4f9f8';
	$colors['secondary']['color']         = '#663f46';
	$colors['secondary-support']['color'] = '#b8d8d8';

	// Use unset to remove colors from the editor palette.
	// Example: unset( $colors['accent'] ).

	return $colors;
}
add_filter( 'emma_editor_color_palette', 'emma_child_editor_color_palette_filter' );
