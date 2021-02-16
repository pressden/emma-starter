<?php
/**
 * Emma Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Emma Child
 */

function emma_child_editor_color_palette_filter( $colors ) {
  //overrides various registered colors with new hex values
  //$colors['primary']['color'] = '#0073aa';
  //$colors['primary-support']['color'] = '#D4F9F8';
  //$colors['secondary']['color'] = '#663F46';
  //$colors['secondary-support']['color'] = '#B8D8D8';
  
  //removes a color from the editor palette
  //unset( $colors['accent'] );

  return $colors;
}
add_filter ( 'emma_editor_color_palette', 'emma_child_editor_color_palette_filter' );

use ScssPhp\ScssPhp\Compiler;
function emma_child_compile_theme_css() {
  require_once 'inc/vendor/scssphp/scss.inc.php';
  $target_css = get_stylesheet_directory() . '/dist/theme.css';

  $base_scss_files = array(
    get_stylesheet_directory() . '/src/sass/theme',
  );
  $import_scss_files = apply_filters( 'emma_child_theme_scss', $base_scss_files );

  $compiler = new Compiler();
  $variables = apply_filters( 'emma_child_scss_variables', array() );
  $compiler->setVariables( $variables );
  
  ob_start();
  foreach( $import_scss_files as $scss_file ) { ?>
    @import "<?php echo str_replace('\\', '/', $scss_file ); ?>";
  <?php }
  $import_scss = ob_get_clean();

  $css = $compiler->compile( $import_scss );
  if ( !empty( $css ) && is_string( $css ) ) {
		file_put_contents( $target_css, $css );
	}
}
add_action( 'wp_loaded', 'emma_child_compile_theme_css' );

function emma_child_compile_admin_css() {
  require_once 'inc/vendor/scssphp/scss.inc.php';
  $target_css = get_stylesheet_directory() . '/dist/admin.css';

  $base_scss_files = array(
    get_stylesheet_directory() . '/src/sass/admin',
  );
  $import_scss_files = apply_filters( 'emma_child_admin_scss', $base_scss_files );

  $compiler = new Compiler();
  $variables = apply_filters( 'emma_child_scss_variables', array() );
  $compiler->setVariables( $variables );
  
  ob_start();
  foreach( $import_scss_files as $scss_file ) { ?>
    @import "<?php echo str_replace('\\', '/', $scss_file ); ?>";
  <?php }
  $import_scss = ob_get_clean();

  $css = $compiler->compile( $import_scss );
  if ( !empty( $css ) && is_string( $css ) ) {
		file_put_contents( $target_css, $css );
	}
}
add_action( 'wp_loaded', 'emma_child_compile_admin_css' );
