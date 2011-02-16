<?php get_header(); ?>

	<div class="banner-bar">
	<?php if ( function_exists('yoast_breadcrumb') ) {
		
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	} ?>
<a href="#" title="Click here to return home" class="banner-title">Community of Robotic Engineers - Robotics Team 2062 - Waukesha, Wisconsin </a><a class="learnmore" title="Click here to learn more!" href="/about">Learn More!</a><!--<span title="Click here to toggle the settings window" class="personalize"></span>--><span title="Click here to make the text larger" class="font-big"></span><span title="Click here to make the text regular size" class="font-normal"></span><span title="Click here to make the text smaller" class="font-small"></span>
    </div>
   <?php get_sidebar(); ?>
    <div class="main-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="databoxpagepost">
				<div class="titleblock"><h3 class="postpagetitle"><?php the_title(); ?></h3>
					<span class="bylinepage">By <?php the_author() ?> on <?php the_time('F jS, Y') ?>
					</span>
				</div>
				<div class="text">
					<?php the_content(); ?>
				</div><!-- End text -->
			</div><!-- End databopage -->
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

<?php get_footer(); ?>
