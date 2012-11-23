<?php get_header(); ?>

<?php include('component/banner_bar.php'); ?>

<?php get_sidebar(); ?>

<div class="main-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</div>


<?php get_footer(); ?>