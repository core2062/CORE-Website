<?php /* Template Name: Safety Database */ ?>
<?php
$GLOBALS['template_name'] = 'safety';
ob_start();
?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h4>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Click here to read more"><?php the_title(); ?></a>
		<span class="byline">By <?php the_author() ?> on <?php the_time('F jS, Y') ?></span>
	</h4>
	<div class="box">
		<?php the_content(); ?>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php include("wrapper-safety.php"); ?>

