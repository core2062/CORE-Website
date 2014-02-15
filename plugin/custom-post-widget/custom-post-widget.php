<?php
/*
 Plugin Name: Custom Post Widget
 Plugin URI: http://www.vanderwijk.com/wordpress/wordpress-custom-post-widget/
 Description: Show the content of a custom post of the type 'content_block' in a widget or with a shortcode.
 Version: 2.4.5
 Author: Johan van der Wijk
 Author URI: http://www.vanderwijk.com
 License: GPL2

 Release notes: Version 2.4.5 javaScript fix for inserting shortcode
 
 Copyright 2013 Johan van der Wijk (email: info@vanderwijk.com)
 
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License, version 2, as 
 published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

// Launch the plugin.
add_action( 'plugins_loaded', 'custom_post_widget_plugin_init' );

// Load the required files needed for the plugin to run in the proper order and add needed functions to the required hooks.
function custom_post_widget_plugin_init() {
	// Load the translation of the plugin.
	load_plugin_textdomain( 'custom-post-widget', false, 'custom-post-widget/languages' );
	add_action( 'widgets_init', 'custom_post_widget_load_widgets' );
}

// Loads the widgets packaged with the plugin.
function custom_post_widget_load_widgets() {
	require( 'post-widget.php' );
	register_widget( 'custom_post_widget' );
}

require( 'meta-box.php' );