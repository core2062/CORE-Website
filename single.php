

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
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<div class="databoxpagepost">
							<div class="titleblock">
								<h3 class="postpagetitle"><?php the_title(); ?></h3>
								<span class="bylinepage">By <?php the_author() ?> on <?php the_time('F jS, Y') ?></span>
							</div>
							<div class="text">
								<?php the_content(); ?>
							</div>
						</div>

						<?php endwhile; else: ?> 
							<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
					
						<p>
							<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								// Both Comments and Pings are open ?>
								You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
							<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								// Only Pings are Open ?>
								Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
							<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// Comments are open, Pings are not ?>
								You can skip to the end and leave a response. Pinging is currently not allowed.
							<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// Neither Comments, nor Pings are open ?>
								Both comments and pings are currently closed.
							<?php } edit_post_link('Edit this entry','','.'); ?>
						</p>
					</div>
					<?php comments_template(); ?>
				</div>
				<div class="clear"></div>
			</div>
			<?php get_footer(); ?>
		</div>
	</body>
</html>