<?php
//this file wraps all the standard stuff around the parts that are unique for
//each page. I'm not particularly fond of opening a bunch of tags in
//header.php and then closing them all in footer.php ... it just doesn't seem
//right to see them all open in a file, so using this wrapper lets all that
//default stuff be dealt with in one file without allowing tags to go
//unclosed.
$unique_content = ob_get_contents();
ob_clean();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<?php get_header(); ?>
	<body>
		<div id="containing_div">
			<a id="logo" href="http://core2062.com/">
				<img src="<?php bloginfo('template_url'); ?>/images/CORE-logo5.png">
			</a>
			<div id="header-container">
				<span id="header">
					<em>C.O.R.E. 2062</em> Safety Database
				</span>
				<div id="title_bar">A collection of the industrial safety practices used and supported by FRC team C.O.R.E. 2062</div>
			</div>
			<?php include('component/navbar.php'); ?>
			<input type="checkbox" id="safety-nav" checked/>
			<label for="safety-nav">
				<?php wp_nav_menu(array(
					'container' => false,
					'theme_location' => 'safety-menu',
					'walker'=> new Custom_Walker_Nav_Menu
				));?>
			</label>

			<div id="content_container">
				<?php echo $unique_content;?>
			</div>
			<div class="footer light_grad" id="footer">
				<div class="footer footer_cont" id="cont1">
					FRC Team C.O.R.E. 2062
				</div>
				<div class="footer footer_cont" id="cont2">
					Regionally and Internationally recognized for excellence in industrial safety by <a href="http://ul.com/" target="_blank">U.L.</a>
				</div>
				<?php wp_footer(); ?>
			</div>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		$(function() {
			$(".menu li:not(:has(ul))").addClass('no-children');
		});
	</script>
</html>