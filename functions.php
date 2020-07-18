<?php
//Scripts
function CustomThemeSctips() {
	if ( ! is_admin() ) {
		wp_deregister_script('jquery');
		wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery-3.3.1.min.js', array(), "3.3.1", true );
	}
	wp_register_script( 'plugins-script', get_template_directory_uri() . '/js/plugins.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.min.js', array( 'jquery', 'plugins-script' ), false, true );
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr-custom.js', array(), false, false );
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'main-script' );
}
add_action( 'wp_enqueue_scripts', 'CustomThemeSctips' );

//StyleSheets
function CustomThemeStyles() {
	wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', array(), false, false );
	wp_enqueue_style( 'main-style' );
}
add_action( 'wp_enqueue_scripts', 'CustomThemeStyles' );

//Google fonts
function CustomThemeGoogleFonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,600', false ); 
}
	add_action( 'wp_enqueue_scripts', 'CustomThemeGoogleFonts' );

// Clear <header>
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Activate menus & thumbs
add_theme_support('menus');
add_theme_support( 'post-thumbnails' ); 

// Custom img sizes
if ( function_exists( 'add_image_size' ) ) {
	//add_image_size( 'title', 1400, 560, true );
	//add_image_size( 'title_m', 800, 560, true );
}

// Custom login img
function my_login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/og-image.png);
			padding-bottom: 20px;
			margin-top: -60px;
			background-size: 300px 300px;
			width: 300px;
			height: 300px;
		}
	</style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Custom rules
if ( current_user_can('editor') ) {
	function my_remove_menu_pages() {
		remove_menu_page('index.php');
		remove_menu_page('edit.php');
		remove_menu_page('edit-comments.php');
		remove_menu_page('tools.php');
	}
	add_action( 'admin_menu', 'my_remove_menu_pages' );

// Remove wp logo from comments
	function annointed_admin_bar_remove() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');
		$wp_admin_bar->remove_menu('comments');
	}

	add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);
}

// dashboard columns fix
function wpse126301_dashboard_columns() {
		add_screen_option(
			'layout_columns',
			array(
				'max'			=> 2,
				'default'	=> 1
			)
		);
}
add_action( 'admin_head-index.php', 'wpse126301_dashboard_columns' );

// Remove editor img links
function rkv_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );

	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'rkv_imagelink_setup', 10);

// Custom Posts Types
add_action('init', 'cptui_register_my_cpt_portfolio');
function cptui_register_my_cpt_portfolio() {
register_post_type('portfolio', array(
'label' => 'portfolio',
'description' => 'portfolio',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'portfolio', 'with_front' => true),

'query_var' => true,
'supports' => array('title','page-attributes','post-formats', 'editor', 'thumbnail'),
'labels' => array (
	'name' => 'portfolio',
	'singular_name' => 'Portfolio',
	'menu_name' => 'portfolio',
	'add_new' => 'Adicionar Novo',
	'add_new_item' => 'Adicionar Novo Item ao portfólio',
	'edit' => 'Editar',
	'edit_item' => 'Editar Produto',
	'new_item' => 'Novo Produto',
	'view' => 'Ver Produto',
	'view_item' => 'Ver Produto',
	'search_items' => 'Procurar portfolio',
	'not_found' => 'Nenhum Produto Encontrado',
	'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
	'parent' => 'Parent Produto',
)
) ); }

?>
