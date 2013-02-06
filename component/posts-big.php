<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="titleblock" title="Recent News">
		<h3>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Click here to read more"><?php the_title(); ?></a>
			<?php if(is_single($post)): ?>
				<span class="byline">By <?php the_author() ?> on <?php the_time('F jS, Y') ?></span>
			<?php endif; ?>
		</h3>
	</div>
	<div class="break"></div>
	<div class="box">
		<div class="post-content">
			<?php the_content(); ?>
			<div class="break"></div>
		</div>
	</div>
	<div class="break"></div>

<?php endwhile; else: ?>

	<p>
		<?php _e('Sorry, no posts matched your criteria.'); ?>
	</p>

<?php endif; ?>