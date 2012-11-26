<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="box">
		<h4 class="post-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Click here to read more"><?php the_title(); ?></a>
			<span class="byline">By <?php the_author() ?> on <?php the_time('F jS, Y') ?></span>
		</h4>
		<div class="post-content">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="break"></div>

<?php endwhile; else: ?>

	<p>
		<?php _e('Sorry, no posts matched your criteria.'); ?>
	</p>

<?php endif; ?>