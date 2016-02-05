<?php
/**
 * tarful functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package tarful
 */

if ( ! function_exists( 'tarful_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tarful_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tarful, use a find and replace
	 * to change 'tarful' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'tarful', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'tarful' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'tarful_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // tarful_setup
add_action( 'after_setup_theme', 'tarful_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tarful_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tarful_content_width', 640 );
}
add_action( 'after_setup_theme', 'tarful_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tarful_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tarful' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 2', 'tarful' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tarful_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tarful_scripts() {
	wp_enqueue_style( 'tarful-style', get_stylesheet_uri() );

	wp_enqueue_script( 'tarful-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'tarful-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tarful_scripts' );


if (defined('FW')):
    // the framework was already included in another place, so this version will be inactive/ignored
else:
    /** @internal */
    function _filter_fw_framework_plugin_directory_uri() {
        return get_template_directory_uri() . '/unyson/framework';
    }
	add_filter('fw_framework_directory_uri', '_filter_fw_framework_plugin_directory_uri');

    require dirname(__FILE__) .'/unyson/framework/bootstrap.php';
endif;

add_action ( 'wp_head', 'tarful_ajax_variables' );

function tarful_ajax_variables() { ?>
  <script type="text/javascript">
    var ajaxurl = '<?php echo admin_url( "admin-ajax.php" ); ?>';
    var ajaxnonce = '<?php echo wp_create_nonce( "itr_ajax_nonce" ); ?>';
    var logged_in = '<?php echo is_user_logged_in(); ?>';
  </script><?php
}

function tarful_favicon(){
    do_action('tarful_favicon');
}

add_action('tarful_favicon','get_favicon');

function get_favicon(){

	$favicon = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('tf_favicon') : '';
	if( !empty( $favicon ) ) {
	?>
		<link rel="icon" type="image/png" href="<?php echo $favicon['url'] ?>">
	<?php }
}

function get_header_slider(){
	$slider = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('tf_header_slider/tf_switch') : '';

	if($slider === 'yes'){ ?>
		<div id='header_slider'><?php
			$value = fw_get_db_settings_option('tf_header_slider/'. $slider);
			$slider_id = $value['tf_slider_content'];
			echo fw_ext('slider')->render_slider($slider_id, array(
				'width'  => 1300,
				'height' => 900
			));
		?></div>
	<?php }
}



function get_content_slider(){
	$slider = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(),'tf_page_slider/tf_switch') : '';

	if($slider === 'yes'){ ?>
	<div class='page_slider'><?php
		$value = fw_get_db_post_option(get_the_ID(),'tf_page_slider/'. $slider);
		$slider_id = $value['tf_slider_content'];

		echo fw_ext('slider')->render_slider($slider_id, array(
			'width'  => 300,
			'height' => 200
		));
	?></div>
<?php }
}

function tarful_prefooter_content() {
    do_action('tarful_prefooter_content');
}

add_action('tarful_prefooter_content','get_prefooter_content');
remove_action( 'tarful_prefooter_content','get_prefooter_content' );
function get_prefooter_content(){
	$prefooter = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('tf_prefooter/tf_switch') : '';
	$value = fw_get_db_settings_option('tf_prefooter/'. $prefooter);

	if($prefooter === 'yes'){ ?>
		<div class="pre-footer">
			<div class="container">
				<div class="row">
					<?php
						$pre = $value['tf_prefooter_content']['tf_select'];
						$slider = $value['tf_prefooter_content'][$pre]['tf_content'];
						if($pre === 'tf_slider'){

							echo fw_ext('slider')->render_slider($slider, array(
				   				'width'  => 300,
				   				'height' => 200
							));
						} else {
							echo $slider;
						}
					?>
				</div>
			</div>
		</div>
	<?php }
}

function tarful_before_header(){
	do_action('tarful_before_header');
}

function tarful_after_header(){
	do_action('tarful_after_header');
}

function tarful_after_footer(){
	do_action('tarful_after_footer');
}

function tarful_before_content(){
	do_action('tarful_before_content');
}

function tarful_after_content(){
	do_action('tarful_after_content');
}

function tarful_before_loop(){
	do_action('tarful_before_loop');
}

function tarful_after_loop(){
	do_action('tarful_after_loop');
}

function tarful_before_sidebar_area(){
	do_action('tarful_before_sidebar_area');
}

function tarful_after_sidebar_area(){
	do_action('tarful_after_sidebar_area');
}

add_action('tarful_after_header','get_header_slider');

function tarful_update_user_personal_info() {

	global $wpdb, $current_user;

	if (isset($_POST['updateuser'])) {

		if ( !empty($_POST['pass1'] ) && !empty( $_POST['pass2'] ) ) {
			if ( $_POST['pass1'] == $_POST['pass2'] ) {
				wp_update_user( array( 'ID' => $current_user->ID, 'user_pass' => sanitize_text_field( $_POST['pass1'] )));

				wc_add_notice(__('Password updated successfully.', 'tarful'));
			}
		}

		if ( !empty( $_POST['first_name'] )) {
			update_user_meta( $current_user->ID, 'billing_first_name', sanitize_text_field( $_POST['first_name'] ) );
			update_user_meta( $current_user->ID, 'first_name', sanitize_text_field( $_POST['first_name'] ) );
		}
		if ( !empty( $_POST['last_name'] )) {
			update_user_meta( $current_user->ID, 'billing_last_name', sanitize_text_field( $_POST['last_name'] ) );
			update_user_meta( $current_user->ID, 'last_name', sanitize_text_field( $_POST['last_name'] ) );
		}
		if ( !empty( $_POST['email'] )) {
			update_user_meta( $current_user->ID, 'billing_email', sanitize_email( $_POST['email'] ) );
			wp_update_user( array( 'ID' => $current_user->ID, 'user_email' => sanitize_email( $_POST['email'] )));
		}
		if ( !empty( $_POST['phone1'] )) {
			update_user_meta( $current_user->ID, 'billing_phone', sanitize_text_field( $_POST['phone1'] ) );
		}
		if ( !empty( $_POST['address1'] )) {
			update_user_meta( $current_user->ID, 'billing_address_1', sanitize_text_field( $_POST['address1'] ) );
		}
		if ( !empty( $_POST['address2'] )) {
			update_user_meta( $current_user->ID, 'billing_address_2', sanitize_text_field( $_POST['address2'] ) );
		}
		if ( !empty( $_POST['city'] )) {
			update_user_meta( $current_user->ID, 'billing_city', sanitize_text_field( $_POST['city'] ) );
		}
		if ( !empty( $_POST['state'] )) {
			update_user_meta( $current_user->ID, 'billing_state', sanitize_text_field( $_POST['state'] ) );
		}
		if ( !empty( $_POST['country'] )) {
			update_user_meta( $current_user->ID, 'billing_country', sanitize_text_field( $_POST['country'] ) );
		}
		if ( !empty( $_POST['postcode'] )) {
			update_user_meta( $current_user->ID, 'billing_postcode', sanitize_text_field( $_POST['postcode'] ) );
		}

		if(isset($_FILES['profile_picture']) && !empty($_FILES['profile_picture']['name'])){

			$uploadedfile = $_FILES['profile_picture'];
			$upload_name = $_FILES['profile_picture']['name'];

			$uploads = wp_upload_dir();
			$filepath = $uploads['path']."/$upload_name";

			if ( ! function_exists( 'wp_handle_upload') )
			{
				require_once( ABSPATH . 'wp-admin/includes/file.php');
			}
			require_once( ABSPATH . 'wp-admin/includes/image.php');

			$upload_overrides = array( 'test_form' => false );

			$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );

			if ( $movefile && !isset( $movefile['error'] ) ) {

				$file = $movefile['file'];
				$url = $movefile['url'];
				$type = $movefile['type'];

				//media_handle_upload( $file_handler, 0 );
				$attachment = array(
					'post_mime_type' => $type ,
					'post_title' => $upload_name,
					'post_content' => 'Image for '.$upload_name,
					'post_status' => 'inherit'
				);

				$attach_id=wp_insert_attachment( $attachment, $file, 0);
				$attach_data = wp_generate_attachment_metadata( $attach_id, $file );
				wp_update_attachment_metadata( $attach_id, $attach_data );

				delete_metadata('post', null, '_wp_attachment_wp_user_avatar', $current_user->ID, true);
				update_user_meta($current_user->ID, '_wp_attachment_wp_user_avatar', $attach_id);
				update_user_meta($current_user->ID, 'wp_user_avatar', $attach_id);

			} else {
				echo $movefile['error'];
			}
		}

		do_action('edit_user_profile_update', $current_user->ID);

		wc_add_notice(__('User data updated successfully.','tarful'));
	}
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

