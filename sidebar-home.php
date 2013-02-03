<?php if ( is_active_sidebar( 'sidebar-home' ) ) : ?>
	<div class="sidebar">
		<?php dynamic_sidebar( 'sidebar-home' ); ?>

		<div class="wrapper">
			<div class="box" id="twitter_box">
				<h2>Twitter <img src="<?php bloginfo('template_url'); ?>/images/twitter.svg"></img></h2>
				<div></div>
				<a href="https://twitter.com/core2062" class="button">Join the Conversation</a>
			</div>
		</div>
	</div>
<?php endif; ?>