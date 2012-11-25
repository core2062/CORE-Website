<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<?php get_header(); ?>
	<body>
		<div class="page-wrap">
			<?php include('component/header.php'); ?>
			<div class="page">
				<?php include('component/banner_bar.php'); ?>
				<?php get_sidebar(); ?>	
				<div class="main-content">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<div class="databoxpage">
							<div class="titleblock">
								<h3><?php the_title(); ?></h3>
							</div>
							<div class="text">
								<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
								<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							</div>
						</div>
					</div>
					<?php endwhile; endif; ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</div>
			<?php get_footer(); ?>
		</div>
	</body>
</html>