<?php
// add ie conditional html5 shim to header
function add_ie_html5_shim () {
	global $is_IE;
	if($is_IE){		
		echo '<!--[if lt IE 9]>';
		echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
		echo '<![endif]-->';
	}
}
add_action('wp_head', 'add_ie_html5_shim');
  
function core_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Homepage Widgets', 'core' ),
		'id' => 'sidebar-home',
		'before_widget' => '<div class="wrapper"><div class="box">',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		'after_widget' => "</div></div>",
	) );

	register_sidebar( array(
		'name' => __( 'Homepage Slider', 'core' ),
		'id' => 'slider-home',
		'before_widget' => '',
		'after_widget' => '',
	) );
}
add_action('widgets_init', 'core_widgets_init');

function register_my_menus() {
	register_nav_menus(
		array(
			'main-menu'=>__('Main'),
		)
	);
}
add_action('init', 'register_my_menus');

//jQuery Insert From Google
function my_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js", false, null);
	wp_enqueue_script('jquery');
}
if (!is_admin()){
    add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
}
?>