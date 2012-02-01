<?php get_header(); ?>
	<div class="banner-bar">
<a href="#" title="Click here to return home" class="banner-title">Community of Robotic Engineers - Robotics Team 2062 - Waukesha, Wisconsin </a><a class="learnmore" title="Click here to learn more!" href="/about">Learn More!</a><!--<span title="Click here to toggle the settings window" class="personalize"></span>--><span title="Click here to make the text larger" class="font-big"></span><span title="Click here to make the text regular size" class="font-normal"></span><span title="Click here to make the text smaller" class="font-small"></span>
    </div><!-- End banner-bar -->
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
				</div><!-- End text -->
			</div><!-- End databopage -->
		</div>
			<?php endwhile; else: ?> 
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	</div>
<?php get_footer(); ?>
