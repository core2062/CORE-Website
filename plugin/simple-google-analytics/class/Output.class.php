<?php

	class Output {
		
		const _NAMESPACE = 'simple_google_analytics' ;
		
		
		// Alias des fonctions de Wordpress
		public static function __($output) {
			return __($output, self::_NAMESPACE) ;
		}
		
		public static function _e($output) {
			_e($output, self::_NAMESPACE) ;
		}
		
		
		// Génère la page d'options
		public static function settingsPage() {	
		?>
			<div class="wrap">
				<h2><?php Output::_e('Simple Google Analytics.') ; ?></h2>
				<p>
					<?php
						Output::_e('Simple Google Analytics allows you to easilly add your Google Analytics code on all your pages.') ;
						echo '<br/>' ;
						Output::_e('Just add your ID, choose if you are on a sub-domain (setting in Google Analytics code), and enter the domain.') ;
						echo '<br/>' ;
						Output::_e('That\'s all, you\'re ready to go.') ;
					?>
				</p>

				<form method="post" action="options.php" id="google_form">
					<?php settings_fields(Settings::$settingsGroup) ; ?>

					<table class="form-table">
						<tr valign="top">
							<th scope="row" style="width: 400px; text-align:right;"><?php Output::_e('Where to put the code ?') ; ?></th>
							<td>
								<select id="sga_code_location" name="sga_code_location" style="width:80px;">
									<option value="head" <?php selected(Settings::getVal('sga_code_location'), 'header') ; ?>><?php Output::_e('Header') ; ?></option>
									<option value="footer" <?php selected(Settings::getVal('sga_code_location'), 'footer') ; ?>><?php Output::_e('Footer') ; ?></option>
								</select>
							</td>
						</tr>
						<tr valign="top">
							<th scope="row" style="text-align:right;"><?php Output::_e('Google Analytics ID') ; ?></th>
							<td>
								<input type="text" name="sga_analytics_id" value="<?php echo Settings::getVal('sga_analytics_id'); ?>"> <?php Output::_e('Example : UA-0000000-0.') ; ?>
							</td>
						</tr>
						<tr>
							<th scope="row" style="text-align:right;" valign="top"><?php Output::_e('Add Site Speed to the tracking code ?') ; ?></th>
							<td>
								<select id="sitespeed" name="sga_sitespeed_setting" style="width:60px;">
									<option value="0" <?php selected(Settings::getVal('sga_sitespeed_setting'), 0) ; ?>><?php Output::_e('No') ; ?></option>
									<option value="1" <?php selected(Settings::getVal('sga_sitespeed_setting'), 1) ; ?>><?php Output::_e('Yes') ; ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<th scope="row" style="text-align:right;" valign="top"><?php Output::_e('Is your blog a sub-domain ? (Google Analytics Setting)') ; ?></th>
							<td>
								<select id="multisetting" name="sga_multidomain_setting" style="width:60px;">
									<option value="0" <?php selected(Settings::getVal('sga_multidomain_setting'), 0) ; ?>><?php Output::_e('No') ; ?></option>
									<option value="1" <?php selected(Settings::getVal('sga_multidomain_setting'), 1) ; ?>><?php Output::_e('Yes') ; ?></option>
								</select>
							</td>
						</tr>
						<tr valign="top">
							<th scope="row" style="text-align:right;"><?php Output::_e('Domain') ; ?></th>
							<td>
								<input type="text" id="multidomain" name="sga_multidomain_domain" value="<?php echo Settings::getVal('sga_multidomain_domain'); ?>" <?php disabled(Settings::getVal('sga_multidomain_setting'), 0) ;?>> <?php Output::_e('Example : domain.com') ; ?>
							</td>
						</tr>
						 <tr valign="top">
							<th scope="row" style="text-align:right;"><?php Output::_e('Render when logged in?') ; ?></th>
							<td>
								<select id="render_when_loggedin" name="sga_render_when_loggedin" style="width:60px;">
									<option value="0" <?php selected(Settings::getVal('sga_render_when_loggedin'), 0) ; ?>><?php Output::_e('No') ; ?></option>
									<option value="1" <?php selected(Settings::getVal('sga_render_when_loggedin'), 1) ; ?>><?php Output::_e('Yes') ; ?></option>
								</select>
							</td>
						</tr>
					</table>

					<p class="submit">
						<input type="submit" class="button-primary" value="<?php Output::_e('Save Changes') ?>" />
					</p>
				</form>

				<p>
					<?php
						Output::_e('If you need any support go to the plugin homepage and contact me !') ;
						echo '<br/><br/>' ,
							 '<a href="http://www.arobase62.fr/2011/03/23/simple-google-analytics/" target="_blank">http://www.arobase62.fr/2011/03/23/simple-google-analytics/</a>' ,
							 '<br/><br/>' ;
						Output::_e('This plugin is largely inspired by the Google Analytics Input plugin from Roy Duff ( http://wpable.com ).') ;
						echo '<br/><br/>' ;
						Output::_e('If you like this plugin, you can Donate :)') ;
						echo '<br/>' ;
					?>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
						<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_GB/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
						<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/fr_FR/i/scr/pixel.gif" width="1" height="1">
					</form>

				</p>
			</div>

		<?php
		}
		
		
		// Génère le code Google Analytics
		public static function googleCode(array $options) {

			// Ecriture des options
			$ret  = "\n" ;
			$ret .= '<!-- Simple Google Analytics Begin -->' . "\n" ;
			$ret .= '<script type="text/javascript">' . "\n" ;
			$ret .= 'var _gaq = [' ;
			foreach ($options as $key => $value) {
				$ret .= is_null($value) ? '[\'' . $key . '\']' : '[\'' . $key . '\',\'' . $value . '\']' ;
				$ret .= ',' ;
			}
			$ret  = rtrim($ret, ',') ;
			$ret .= '];' ;
			
			// Code Google
			$ret .= '(function() {' . "\n" ;
			$ret .= 'var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;' . "\n" ;
			$ret .= 'ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';' . "\n" ;
			$ret .= 'var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);' . "\n" ;
			$ret .= '})();' . "\n" ;
			$ret .= '</script>' ;
			$ret .= "\n" . '<!-- Simple Google Analytics End -->' ;
			$ret .= "\n" ;
			
			return $ret ;
		}
	}
	
?>
