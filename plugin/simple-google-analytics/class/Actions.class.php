<?php

	class Actions {
		
		
		// Espace de nom à utiliser sur Wordpress
		const _NAMESPACE = 'simple_google_analytics' ;
		
		
		// Fichiers JS à charger
		private $javascript = array(
			'sga.js',
		) ;
		
		
		// Actions utilisées, et fonctions associés
		private $actions = array(
			'init' => 'launch_i18n',
			'admin_init' => 'registerSettings',
			'admin_menu' => 'menu',
			'wp_%%LOCATION%%' => 'insertCode',
		) ;
		
		
		// Filtres
		private $filters = array(
			'plugin_action_links' => 'actionLinks',
		) ;
		
		
		// Constructeur
		public function __construct() {
			$this->addAll() ;
		}
		
		
		// On lance les ajouts d'actions, de filtres, ...
		private function addAll() {
			$this->addJS() ;
			$this->addActions() ;
			$this->addFilters() ;
		}
		
		// Ajout des Javascripts
		private function addJS() {
			
			// Pour chaque fichier JS
			foreach ($this->javascript as $value) {
				wp_enqueue_script(self::_NAMESPACE, plugins_url('', dirname(__FILE__)) . '/js/' . $value, array('jquery')) ;
			}
		}
		
		
		
		///////////// ACTIONS
		
		// Lancement des actions
		private function addActions() {
				
			// Pour chaques actions
			foreach ($this->actions as $key => $value) {
				$key = str_replace('%%LOCATION%%', Settings::getVal('sga_code_location'), $key) ;
				add_action($key, 'Actions::' . $value) ;
			}
			
		}
		
		
		// Internationalisation : Fonction lancée au chargement du plugin
		public static function launch_i18n() {
			$lngPath = SGA_ROOT . '/languages/' ;
			load_plugin_textdomain(self::_NAMESPACE, false, $lngPath) ;
		}
		
		
		// Enregistrement des paramètres (et récuperation aussi)
		public static function registerSettings() {
			Settings::registerSettings() ;
		}
		
		
		// Ajoute le sous-menu aux réglages
		public static function menu() {
			add_options_page(SGA_PLUGIN_TITLE, Output::__('Simple Google Analytics Settings'), SGA_SETTINGS_AUTH, 'simple-google-analytics-config', "Output::settingsPage") ;
		}
		
		
		// Insère le code Google Analytics
		public static function insertCode() {
			if (self::showCode()) {
				
				$options = array() ;
				
				// Seulement si on a enregistré un ID
				if (Settings::getVal('sga_analytics_id') !== false) {
					$options['_setAccount'] = Settings::getVal('sga_analytics_id') ;
					
					// Option multi-domaine
					if (Settings::getVal('sga_multidomain_setting') == 1 && Settings::getVal('sga_multidomain_domain') !== false) {
						$options['_setDomainName'] = Settings::getVal('sga_multidomain_domain') ;
					}
					
					// Option vitesse du site
					if (Settings::getVal('sga_sitespeed_setting') == 1) {
						$options['_trackPageLoadTime'] = null ;
					}
					
					$options['_trackPageview'] = null ;
					
					echo Output::googleCode($options) ;
				}
			}
		}
		
		
		
		///////////////// FILTRES
		
		// Ajout des filtres
		private function addFilters() {
			
			// Pour chaques filtres
			foreach ($this->filters as $key => $value) {
				add_filter($key . '_' . SGA_BASENAME, 'Actions::' . $value) ;
			}
			
		}
		
		
		// Insère un lien sur la page des plugins
		public static function actionLinks($links) {
			$link = '<a href="' . menu_page_url('simple-google-analytics-config' , false) . '">' . Output::__('Settings') .'</a>' ;
			array_unshift($links, $link) ;
			return $links ;
		}
		
		
		// @TODO
		// Vérifie si on doit afficher le code ou pas, selon l'utilisateur connecté
		public static function showCode() {
			$result = true ;
			if( is_user_logged_in() ) {
				$result = Settings::getVal('sga_render_when_loggedin') ;
			}
			return $result ;
		}

	}
	
?>
