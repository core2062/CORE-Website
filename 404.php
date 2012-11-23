<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<?php get_header(); ?>
	<body>
		<div class="page-wrap">

			<?php if(is_front_page()):?>

				<div class="header">
					<a class="logo-click" href="<?php bloginfo('url'); ?>" title="Click here to go back to the main page."></a>
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
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
					<div class="nav-bar"></div>
					<ul id="dropmenu" class="nav">
						<li class="page_item page-item-2">
							<a title="Home" href="<?php bloginfo('url'); ?>">Home</a>
						</li>
						<?php wp_list_pages('title_li='); ?>
					</ul> 
				</div>

			<?php else: ?>

				<div class="header-short">
					<a class="logo-click" href="<?php bloginfo('url'); ?>" title="Click here to go back to the main page."></a>
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
					<div class="header-short-pic"></div>
					<div class="nav-bar"></div>
					<ul id="dropmenu" class="nav">
						<li class="page_item page-item-2"><a title="Home" href="<?php bloginfo('url'); ?>">Home</a></li>
						<?php wp_list_pages('title_li='); ?>
					</ul> 
				</div>

			<?php endif; ?>

			<div class="page">
				<div class="box settings"></div>
					<div class="banner-bar">
						<a href="#" title="Click here to return home" class="banner-title">Community of Robotic Engineers - Robotics Team 2062 - Waukesha, Wisconsin </a>
						<a class="learnmore" title="Click here to learn more!" href="/about">Learn More!</a>
						<span title="Click here to make the text larger" class="font-big"></span>
						<span title="Click here to make the text regular size" class="font-normal"></span>
						<span title="Click here to make the text smaller" class="font-small"></span>
					</div>

					<?php get_sidebar(); ?>	

					<div class="main-content">


						<div class="alert red">
							<h4>Oops! It looks like a 404.</h4>
							<p>It looks like the page you were looking for isn't where you were looking for it. If I were you, I'd try searching for it...if it's here you'll probably find it by doing that. If not, and you think it should be, please <a href="http://core2062.com/contact">contact us</a>.</p>
							<a class="close" href="#">close</a>
						</div>

					</div>
				<div class="clear"></div>
			</div>

			<?php get_footer(); ?>

		</div>
	</body>
</html>