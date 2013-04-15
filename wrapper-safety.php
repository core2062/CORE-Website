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
		<div id="page-wrap">
			<a href="http://core2062.com/"><img src="images/CORE-logo5.png"></a>
			<div class="Header" id="Header">
				<em>C.O.R.E. 2062</em> Safety Database
			</div>
			<div class="Header light_grad" id="title_bar">
				A source for all of your safety needs, wants, hopes, and dreams
			</div>
			<div id="page">
				<div class="banner-bar">
					<a href="<?php bloginfo('url'); ?>" title="Click here to return home" class="banner-title">Community of Robotic Engineers - Robotics Team 2062 - Waukesha, Wisconsin</a>
					<a class="learnmore" title="Click here to learn more!" href="/about">Learn More!</a>
				</div>
				<?php echo $unique_content;?>
				<div class="footer light_grad" id="footer">
					<span class="footer footer_cont" id="cont1">
						we'll put some stuff here eventually
					</span>
					<span class="footer footer_cont" id="cont2">
						some witty thing that you have to look for to find
					</span>
				</div>

				<?php wp_footer(); ?>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.tweet.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.hypher.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.slicebox.js"></script>
	<script type='text/javascript'>
		$(function() {
			$("#menu-main li:not(:has(ul))").addClass('no-children');
		});

		$('.sb-slider').slicebox({
			orientation : 'r',
			cuboidsRandom : true,
			 autoplay : true,
			sequentialFactor : 200
		});

		$('p').hyphenate('en-us');

		jQuery(function($){
			$("#twitter_box div").tweet({
				username: "core2062",
				count: 5,
				loading_text: "loading tweets..."
			});
		});
	</script>
</html>