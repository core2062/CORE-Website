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
						<div class="alert blue">
							<h4>Welcome!</h4>
							<p>Welcome to the website for C.O.R.E. 2062! C.O.R.E. is a FIRST robotics team located in Waukesha, Wisconsin. If you want to find more information about FIRST, click on the logo to your left. This website is where you will find all of the information about our team. It is recommended that you check back here periodically, as we update often. You can search for a specific topic using the search bar above, or use the drop-down menus to look for something.</p>
							<a class="close" href="#">close</a>
						</div>
						<div class="postbox">
							<?php query_posts( 'posts_per_page=3' ); ?>
								<div class="titleblock" title="Recent News">
									<h3>Recent News</h3>
								</div>
								<ul>
								<?php
									global $more;
									if( have_posts() ) : while ( have_posts() ) : the_post(); $more = 1;
								?>
								
								<li>
									<div class="posttitle">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="Click here to read more"><?php the_title(); ?></a>
										<span class="byline">By <?php the_author() ?> on <?php the_time('F jS, Y') ?></span>
									</div>
									<div class="posts">
										<div class="post-content">
											<?php the_content(); ?>
										</div>
									</div>
								</li>

								<?php endwhile; else: ?>

								<p>
									<?php _e('Sorry, no posts matched your criteria.'); ?>
								</p>

								<?php endif; ?>
							</ul>
						</div>
						<a href="archives" class="archivelink">More posts --></a>
					</div>
				<div class="clear"></div>
			</div>
			<?php get_footer(); ?>
		</div>
	</body>
</html>