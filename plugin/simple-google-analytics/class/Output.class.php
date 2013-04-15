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
						Output::_e('Simple Google Analytics allows you to easily add your Google Analytics code on all your pages.') ;
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
			$ret .= '
			(function() {var ga = document.createElement(\'script\');
				ga.type = \'text/javascript\'; ga.async = true;
				ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
				var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
			})();';
			$ret .= '</script>\n';
			
			return $ret ;
		}
	}
	
?>
