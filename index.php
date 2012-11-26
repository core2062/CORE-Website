<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<?php get_header(); ?>
	<body>
		<div id="page-wrap">

			<?php include('component/header.php'); ?>

			<div id="page">
				<?php include('component/banner_bar.php'); ?>

				<?php get_sidebar(); ?>	

				<div class="main-content">
					<div class="alert blue">
						<h4>Welcome!</h4>
						<p>Welcome to the website for C.O.R.E. 2062! C.O.R.E. is a FIRST robotics team located in Waukesha, Wisconsin. If you want to find more information about FIRST, click on the logo to your left. This website is where you will find all of the information about our team. It is recommended that you check back here periodically, as we update often. You can search for a specific topic using the search bar above, or use the drop-down menus to look for something.</p>
					</div>

					<div class="titleblock" title="Recent News">
						<h3>Recent News</h3>
					</div>
					<?php
						global $more;
						query_posts('posts_per_page=3');
						if( have_posts() ) : while ( have_posts() ) : the_post(); $more = 1;
					?>
						
						<div class="box">
							<h4 class="post-title">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Click here to read more"><?php the_title(); ?></a>
								<span class="byline">By <?php the_author() ?> on <?php the_time('F jS, Y') ?></span>
							</h4>
							<div class="post-content">
								<?php the_content(); ?>
							</div>
						</div>

					<?php endwhile; else: ?>

						<p>
							<?php _e('Sorry, no posts matched your criteria.'); ?>
						</p>

					<?php endif; ?>
					<a href="archives" class="archivelink">more posts</a>
				</div>
				<?php get_footer(); ?>
			</div>
		</div>
	</body>
</html>