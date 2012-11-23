<?php get_header(); ?>

<?php include('component/banner_bar.php'); ?>
    <?php get_sidebar(); ?>
<div class="main-content">
	<div class="databoxpage archivebox">
		<div class="titleblock archivetitle"><h3>Posts from This Year</h3></div>
		<div class="archivepage-spacer"></div>
		<?php query_posts( 'cat=3');?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
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
		<p><?php _e(''); ?></p>
		<?php endif; ?>
	</div>
	<div class="archivepage-spacer"></div>
	<div class="databoxpage">
		<div class="text"></div>
		<div class="titleblock"><h3>Posts from Previous Years</h3></div>
		<div class="text">
			<?php wp_list_categories('exclude=3,7'); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>