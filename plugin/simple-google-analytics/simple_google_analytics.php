<?php
/*
Plugin Name: Simple Google Analytics
Plugin URI: http://www.arobase62.fr/2011/03/23/simple-google-analytics/
Description: A simple Plugin to add Analytics code on your pages. You simply enter your ID, you choose if you are on a sub-domain and add your domain name.
Version: 2.0.5
Author: Jerome Meyer
Author URI: http://www.arobase62.fr
*/


	// Constantes
	define('SGA_ROOT', dirname(plugin_basename(__FILE__))) ;
	define('SGA_DIRPATH', plugin_dir_path(__FILE__)) ;
	define('SGA_BASENAME', plugin_basename(__FILE__)) ;
	define('SGA_PLUGIN_TITLE', 'Simple Google Analytics') ; // Titre
	define('SGA_SETTINGS_AUTH', 'administrator') ;
	
	// Chargement dynamique des classes
	@include('autoload.php') ;

	// Lancement des actions, filtres, ...
	new Actions ;
	
?>
