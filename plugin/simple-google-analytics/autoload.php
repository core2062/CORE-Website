<?php
	
	// Chargement automatique des classes
	function sga_autoload($className) {
		$filename = SGA_DIRPATH . '/class/' . $className . '.class.php' ;
		if (file_exists($filename)) {
			include_once($filename) ;
		}
	}
	spl_autoload_register('sga_autoload') ;

?>
