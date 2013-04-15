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
			<?php include('component/top.php'); ?>
			<div id="page">
				<div class="banner-bar">
					<a href="<?php bloginfo('url'); ?>" title="Click here to return home" class="banner-title">Community of Robotic Engineers - Robotics Team 2062 - Waukesha, Wisconsin</a>
					<a class="learnmore" title="Click here to learn more!" href="/about">Learn More!</a>
				</div>
				<?php echo $unique_content;?>
				<img src="<?php bloginfo('template_url'); ?>/images/FRC-ExcelAward11.jpg" alt="Website Excellence Award" class="badge"/>
				<div class="clear"></div>
				<p class="footer">
					C.O.R.E. 2062 is proudly part of <a href="http://usfirst.org/" target="_blank">FIRST Robotics</a>.
					This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>
					<a style="float:right" href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
				</p>

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