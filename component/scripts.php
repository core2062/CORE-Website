<?php if(is_front_page()):?>

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