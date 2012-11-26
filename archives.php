<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<?php get_header(); ?>
	<body>
		<div id="page-wrap">
			<?php include('component/top.php'); ?>
			<div id="page">
				<?php include('component/banner_bar.php'); ?>
				<?php get_sidebar(); ?>	
				<div class="main-content">
					<div class="titleblock">
						<h3>Posts from This Year</h3>
					</div>
					<div class="break"></div>
					<?php query_posts('cat=3');?>
					<?php include('component/posts.php'); ?>

					<div class="titleblock">
						<h3>Posts from Previous Years</h3>
					</div>
					<div class="box">
						<div class="post-content">
							<?php wp_list_categories('exclude=3,7'); ?>
						</div>
					</div>
				</div>
			</div>
			<?php get_footer(); ?>
		</div>
	</body>
	<?php include('component/scripts.php'); ?>
</html>