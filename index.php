<?php get_header(); ?>



	<div class="banner-bar">

    <a href="#" title="Click here to return home" class="banner-title">Community of Robotic Engineers - Robotics Team 2062 - Waukesha, Wisconsin </a><a class="learnmore" title="Click here to learn more!" href="/about">Learn More!</a><!--<span title="Click here to toggle the settings window" class="personalize"></span>--><span title="Click here to make the text larger" class="font-big"></span><span title="Click here to make the text regular size" class="font-normal"></span><span title="Click here to make the text smaller" class="font-small"></span>

    </div><!-- End banner-bar -->

<?php get_sidebar(); ?>    

<div class="main-content">

	<div class="alert blue">

        	<h4>Welcome!</h4>

            <p>Welcome to the website for C.O.R.E. 2062! C.O.R.E. is a FIRST robotics team located in Waukesha, Wisconsin. If you want to find more information about FIRST, click on the logo to your left. This website is where you will find all of the information about our team. It is recommended that you check back here periodically, as we update often. You can search for a specific topic using the search bar above, or use the drop-down menus to look for something. </p>

            <a class="close" href="#">close</a>

		</div><!-- End alert -->

<div class="postbox">
<?php query_posts( 'posts_per_page=3' ); ?>
    	<div class="titleblock" title="Recent News"><h3>Recent News</h3></div>

        <ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        	<li>
		<div class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Click here to read more"><?php the_title(); ?></a><span class="byline">By <?php the_author() ?> on <?php the_time('F jS, Y') ?></span></div>
		<div class="posts"><div class="post-content"><?php the_content(); ?></div></div>
		</li>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
        </ul>
    </div><!-- End postbox -->
<a href="archives" class="archivelink">More posts --></a>



</div><!-- End main-content -->



<?php get_footer(); ?>
