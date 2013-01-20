<?php
// add ie conditional html5 shim to header
function add_ie_html5_shim () {
	global $is_IE;
	if($is_IE)
		echo '<!--[if lt IE 9]>';
  		echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
		echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');
  
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

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