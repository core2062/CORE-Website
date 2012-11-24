<head profile="http://gmpg.org/xfn/11">
	<title>
		<?php
			if (is_home()) {
				echo bloginfo('name');
			} elseif (is_404()) {
				echo '404 Not Found';
			} elseif (is_category()) {
				echo 'Category:'; wp_title('');
			} elseif (is_search()) {
				echo 'Search Results';
			} elseif (is_day() || is_month() || is_year()) {
				echo 'Archives:'; wp_title('');
			} else {
				echo bloginfo('name'); wp_title();
			}
		?>
	</title>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />

	<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	<?php }?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/typography.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/layout.css" media="screen" />
	
	<?php if(is_front_page()):?>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/swfobject/swfobject.js"></script>
		<script type="text/javascript">
			var flashvars = {};
			flashvars.xml = "<?php bloginfo('template_url'); ?>/config.xml";
			flashvars.font = "";
			var params = {};
			params.wmode = "transparent";
			var attributes = {};
			attributes.id = "slider";
			swfobject.embedSWF("<?php bloginfo('template_url'); ?>/cu3er.swf", "cu3er-container", "900", "275", "9", "expressInstall.swf", flashvars,params, attributes);
		</script>
	<?php endif; ?>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/js.js"></script>	
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery("#dropmenu ul").css({display: "none"}); // Opera Fix
			jQuery("#dropmenu li").hover(
				function(){
					jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show(268);
				},
				function(){
					jQuery(this).find('ul:first').css({visibility: "hidden"});
				}
			);
		});
	</script>
</head>