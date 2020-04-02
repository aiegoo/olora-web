<?php
/**
 * Twenty Twenty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function olora_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// Add custom image size used in Cover Template.
	add_image_size( 'olora-fullscreen', 1980, 9999 );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Twenty, use a find and replace
	 * to change 'olora' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'olora' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );


}

add_action( 'after_setup_theme', 'olora_theme_support' );

/**
 * REQUIRED FILES
 * Include required files.
 */
// require get_template_directory() . '/inc/template-tags.php';

// Handle SVG icons.
// require get_template_directory() . '/classes/class-olora-svg-icons.php';
// require get_template_directory() . '/inc/svg-icons.php';

// Handle Customizer settings.
// require get_template_directory() . '/classes/class-olora-customize.php';

// Require Separator Control class.
// require get_template_directory() . '/classes/class-olora-separator-control.php';

// Custom comment walker.
// require get_template_directory() . '/classes/class-olora-walker-comment.php';

// Custom page walker.
// require get_template_directory() . '/classes/class-olora-walker-page.php';

// Custom script loader class.
// require get_template_directory() . '/classes/class-olora-script-loader.php';

// Non-latin language handling.
// require get_template_directory() . '/classes/class-olora-non-latin-languages.php';

// Custom CSS.
// require get_template_directory() . '/inc/custom-css.php';

/**
 * Register and Enqueue Styles.
 */
function olora_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'olora-style', get_stylesheet_uri(), array(), $theme_version );


	// Add print CSS.
	wp_enqueue_style( 'olora-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );

}

add_action( 'wp_enqueue_scripts', 'olora_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function olora_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'olora-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
	wp_script_add_data( 'olora-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', 'olora_register_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function olora_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'olora_skip_link_focus_fix' );

/** Enqueue non-latin language styles
 *
 * @since Twenty Twenty 1.0
 *
 * @return void
 */


/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function olora_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'olora' ),
		'expanded' => __( 'Desktop Expanded Menu', 'olora' ),
		'mobile'   => __( 'Mobile Menu', 'olora' ),
		'footer'   => __( 'Footer Menu', 'olora' ),
		'social'   => __( 'Social Menu', 'olora' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'olora_menus' );

/**
 * Get the information about the logo.
 *
 * @param string $html The HTML output from get_custom_logo (core function).
 *
 * @return string $html
 */
function olora_get_custom_logo( $html ) {

	$logo_id = get_theme_mod( 'custom_logo' );

	if ( ! $logo_id ) {
		return $html;
	}

	$logo = wp_get_attachment_image_src( $logo_id, 'full' );

	if ( $logo ) {
		// For clarity.
		$logo_width  = esc_attr( $logo[1] );
		$logo_height = esc_attr( $logo[2] );

		// If the retina logo setting is active, reduce the width/height by half.
		if ( get_theme_mod( 'retina_logo', false ) ) {
			$logo_width  = floor( $logo_width / 2 );
			$logo_height = floor( $logo_height / 2 );

			$search = array(
				'/width=\"\d+\"/iU',
				'/height=\"\d+\"/iU',
			);

			$replace = array(
				"width=\"{$logo_width}\"",
				"height=\"{$logo_height}\"",
			);

			// Add a style attribute with the height, or append the height to the style attribute if the style attribute already exists.
			if ( strpos( $html, ' style=' ) === false ) {
				$search[]  = '/(src=)/';
				$replace[] = "style=\"height: {$logo_height}px;\" src=";
			} else {
				$search[]  = '/(style="[^"]*)/';
				$replace[] = "$1 height: {$logo_height}px;";
			}

			$html = preg_replace( $search, $replace, $html );

		}
	}

	return $html;

}

add_filter( 'get_custom_logo', 'olora_get_custom_logo' );

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */
function olora_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' . __( 'Skip to the content', 'olora' ) . '</a>';
}

add_action( 'wp_body_open', 'olora_skip_link', 5 );

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function olora_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	// register_sidebar(
	// 	array_merge(
	// 		$shared_args,
	// 		array(
	// 			'name'        => __( 'Footer #1', 'olora' ),
	// 			'id'          => 'sidebar-1',
	// 			'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'olora' ),
	// 		)
	// 	)
	// );

	// Footer #2.
	// register_sidebar(
	// 	array_merge(
	// 		$shared_args,
	// 		array(
	// 			'name'        => __( 'Footer #2', 'olora' ),
	// 			'id'          => 'sidebar-2',
	// 			'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'olora' ),
	// 		)
	// 	)
	// );

}

add_action( 'widgets_init', 'olora_sidebar_registration' );

/**
 * Enqueue supplemental block editor styles.
 */
function olora_block_editor_styles() {

	// $css_dependencies = array();

	// Enqueue the editor styles.
	wp_enqueue_style( 'olora-block-editor-styles', get_theme_file_uri( '/assets/css/editor-style-block.css' ), $css_dependencies, wp_get_theme()->get( 'Version' ), 'all' );
	wp_style_add_data( 'olora-block-editor-styles', 'rtl', 'replace' );

	// Add inline style from the Customizer.
	// wp_add_inline_style( 'olora-block-editor-styles', olora_get_customizer_css( 'block-editor' ) );

	// Add inline style for non-latin fonts.
	// wp_add_inline_style( 'olora-block-editor-styles', olora_Non_Latin_Languages::get_non_latin_css( 'block-editor' ) );

	// Enqueue the editor script.
	// wp_enqueue_script( 'olora-block-editor-script', get_theme_file_uri( '/assets/js/editor-script-block.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

// add_action( 'enqueue_block_editor_assets', 'olora_block_editor_styles', 1, 1 );

/**
 * Enqueue classic editor styles.
 */
function olora_classic_editor_styles() {

	$classic_editor_styles = array(
		'/assets/css/editor-style-classic.css',
	);

	add_editor_style( $classic_editor_styles );

}

add_action( 'init', 'olora_classic_editor_styles' );

/**
 * Output Customizer settings in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @param array $mce_init TinyMCE styles.
 *
 * @return array $mce_init TinyMCE styles.
 */
// function olora_add_classic_editor_customizer_styles( $mce_init ) {

// 	$styles = olora_get_customizer_css( 'classic-editor' );

// 	if ( ! isset( $mce_init['content_style'] ) ) {
// 		$mce_init['content_style'] = $styles . ' ';
// 	} else {
// 		$mce_init['content_style'] .= ' ' . $styles . ' ';
// 	}

// 	return $mce_init;

// }

// add_filter( 'tiny_mce_before_init', 'olora_add_classic_editor_customizer_styles' );

/**
 * Output non-latin font styles in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @param array $mce_init TinyMCE styles.
 *
 * @return array $mce_init TinyMCE styles.
 */
// function olora_add_classic_editor_non_latin_styles( $mce_init ) {

// 	// $styles = olora_Non_Latin_Languages::get_non_latin_css( 'classic-editor' );

// 	// Return if there are no styles to add.
// 	if ( ! $styles ) {
// 		return $mce_init;
// 	}

// 	if ( ! isset( $mce_init['content_style'] ) ) {
// 		$mce_init['content_style'] = $styles . ' ';
// 	} else {
// 		$mce_init['content_style'] .= ' ' . $styles . ' ';
// 	}

// 	return $mce_init;

// }

// add_filter( 'tiny_mce_before_init', 'olora_add_classic_editor_non_latin_styles' );





/**
 * Overwrite default more tag with styling and screen reader markup.
 *
 * @param string $html The default output HTML for the more tag.
 *
 * @return string $html
 */
function olora_read_more_tag( $html ) {
	return preg_replace( '/<a(.*)>(.*)<\/a>/iU', sprintf( '<div class="read-more-button-wrap"><a$1><span class="faux-button">$2</span> <span class="screen-reader-text">"%1$s"</span></a></div>', get_the_title( get_the_ID() ) ), $html );
}

add_filter( 'the_content_more_link', 'olora_read_more_tag' );

/**
 * Enqueues scripts for customizer controls & settings.
 *
 * @since Twenty Twenty 1.0
 *
 * @return void
 */
