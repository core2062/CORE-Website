<?php get_header(); ?>

<div class="banner-bar">
	<p id="breadcrumbs"> <a href="http://localhost">C.O.R.E. Home</a> &raquo; <span class="normal">All Articles with <i>"<?php echo the_search_query();?>"</i> in it.</span></p>
</div>

<?php get_sidebar(); ?>
	
<div class="main-content">
	<?php if (have_posts()) : ?>
		<div class="alert yellow">
			<h4>Search Results</h4>
			<p>Here are all of the articles with <i>"<?php echo the_search_query();?>"</i> in them. You can either read the articles here together as one larger article, or click on the title of an article to go to it's own page.</p>
		</div>

		<?php while (have_posts()) : the_post(); ?>
			<div class="databoxpage">
				<div class="titleblock" title="<?php the_title(); ?> Article">
					<h3 id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>
				</div>
				<div class="text">
					<p>Created: <?php the_time('D, M jS, Y') ?> with <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', '(', ')'); ?> <a class="permlink" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_permalink() ?> &raquo;</a></p>
					<?php echo the_content();?>
				</div>
			</div>
		<?php endwhile; ?>

		<ul>
			<li>
				<?php next_post_link('&laquo; Older Entries') ?>
			</li>
			<li>
				<?php previous_post_link('Newer Entries &raquo;') ?>
			</li>
		</ul>
	<?php else : ?>
		<h2>No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>