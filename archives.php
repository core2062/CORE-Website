<?php
/*
Template Name: Archives  
*/
?>

<?php get_header(); ?>

	<div class="banner-bar">
<a href="#" title="Click here to return home" class="banner-title">Community of Robotic Engineers - Robotics Team 2062 - Waukesha, Wisconsin </a><a class="learnmore" title="Click here to learn more!" href="/about">Learn More!</a><!--<span title="Click here to toggle the settings window" class="personalize"></span>--><span title="Click here to make the text larger" class="font-big"></span><span title="Click here to make the text regular size" class="font-normal"></span><span title="Click here to make the text smaller" class="font-small"></span>
    </div><!-- End banner-bar -->
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
				</div><!-- End text -->
			</div><!-- End databopage -->
		</div>
		<?php endwhile; else: ?> 
		<p><?php _e(''); ?></p>
		<?php endif; ?>
	</div> <!--End databoxpage -->
	<div class="archivepage-spacer"></div>
	<div class="databoxpage">
		<div class="text"></div>
		<div class="titleblock"><h3>Posts from Previous Years</h3></div>
		<div class="text">
			<?php wp_list_categories('exclude=3,7'); ?>
		</div><!-- End text -->
	</div> <!--End second databoxpage -->
</div><!-- End main-content -->


<?php get_footer(); ?>