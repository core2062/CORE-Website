<?php get_header(); ?>

<div class="banner-bar">
	<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	} ?>
	<a href="#" title="Click here to return home" class="banner-title">Community of Robotic Engineers - Robotics Team 2062 - Waukesha, Wisconsin </a>
	<a class="learnmore" title="Click here to learn more!" href="/about">Learn More!</a>
	<span title="Click here to make the text larger" class="font-big"></span>
	<span title="Click here to make the text regular size" class="font-normal"></span>
	<span title="Click here to make the text smaller" class="font-small"></span>
</div>

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