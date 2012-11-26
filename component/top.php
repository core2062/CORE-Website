<div class="<?php echo (is_front_page() ? "header" : "header-short"); ?>">
	<a class="logo-click" href="<?php bloginfo('url'); ?>" title="Click here to go back to the main page."></a>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php if(is_front_page()):?>
		<div class="header-show">
			<div id="cu3er-container">
				<br />
				<br />
				<p>Hey there...it looks like you don't have a current version of flash installed on your computer..or you have it disabled. Sorry about the inconvenience. If you'd like to see the magical thing that should be where I am, please enable or install flash using the link below. Thanks! If you don't care, then just pretend I'm not here.</p>
				<br />
				<br />
				<a href="http://www.adobe.com/go/getflashplayer">
					<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
				</a>
			</div>
		</div>
	<?php else: ?>
		<div class="header-short-pic"></div>
	<?php endif; ?>

	<ul id="dropmenu" class="nav">
		<li class="page_item page-item-2">
			<a title="Home" href="<?php bloginfo('url'); ?>">Home</a>
		</li>
		<?php wp_list_pages('title_li='); ?>
	</ul> 
</div>