<?php get_header(); ?>
<?php include('component/banner_bar.php'); ?>
<?php get_sidebar(); ?> 
    <div class="main-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post archivepost" id="post-<?php the_ID(); ?>">
			<div class="databoxpagepost">
				<div class="titleblock"><h3 class="postpagetitle"><?php the_title(); ?></h3>
					<span class="bylinepage">By <?php the_author() ?> on <?php the_time('F jS, Y') ?></span>
				</div>
				<div class="text">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
			<?php endwhile; else: ?> 
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	</div>
<?php get_footer(); ?>
