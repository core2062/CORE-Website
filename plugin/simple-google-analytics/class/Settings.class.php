<?php

	class Settings {
		
		// Nom du groupe de paramètres
		public static $settingsGroup = 'sga-settings-group' ;
		
		// Nom des paramètres
		private static $settingsArray = array(
			'sga_analytics_id',
			'sga_sitespeed_setting',
			'sga_multidomain_setting',
			'sga_multidomain_domain',
			'sga_code_location',
			'sga_render_when_loggedin',
		) ;
		
		
		public static function registerSettings() {
			foreach (self::$settingsArray as $value) {
				register_setting(self::$settingsGroup, $value) ;
			}
		}
		
		public static function getVal($option) {
			if (!in_array(strtolower($option), self::$settingsArray)) {
				return false ;
			} else {
				return get_option($option) ;
			}
		}
		
	}

?>
