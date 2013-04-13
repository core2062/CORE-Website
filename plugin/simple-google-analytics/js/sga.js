(function($) {
	$(document).ready(function() {
		// On active ou desactive le champs 'domain' selon notre choix sous-domaine ou pas
		$('#multisetting').bind('change', function() {
			if ($(this).val() == 1) {
				$('#multidomain').removeAttr('disabled') ;
			} else {
				$('#multidomain').attr('disabled', 'disabled') ;
			}
		}) ;

		// On lance une alerte et on stop la validation si on est en multi sous-domaine et que le domaine est vide
		$('#google_form').bind('submit', function() {
			if ($('#multisetting').val() == 1 && !$('#multidomain').val()) {
				alert('Domain empty') ;
				return false ;
			} else {
				return true ;
			}
		}) ;
	}) ;
})(jQuery) ;