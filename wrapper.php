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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<?php get_header(); ?>
	<body>
		<div id="page-wrap">
			<?php include('component/top.php'); ?>
			<div id="page">
				<?php
					include('component/banner_bar.php');
					echo $unique_content;
					get_footer();
				?>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.tweet.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.hypher.js"></script>
	<script type='text/javascript'>
		$(function() {
			$("#menu-main li:not(:has(ul))").addClass('no-children');
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