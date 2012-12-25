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
		swfobject.embedSWF("<?php bloginfo('template_url'); ?>/cu3er.swf", "cu3er-container", "100%", "275", "9", "expressInstall.swf", flashvars,params, attributes);
	</script>
<?php endif; ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/js.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.tweet.js"></script>
<script type='text/javascript'>
	jQuery(function($){
		$("#twitter_box div").tweet({
			username: "core2062",
			count: 5,
			loading_text: "loading tweets..."
		});
	});
</script>