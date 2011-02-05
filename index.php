<?php get_header(); ?>



	<div class="banner-bar">

    <a href="#" title="Click here to return home" class="banner-title">Community of Robotic Engineers - Robotics Team 2062 - Waukesha, Wisconsin </a><a class="learnmore" title="Click here to learn more!" href="#">Learn More!</a><!--<span title="Click here to toggle the settings window" class="personalize">--></span><span title="Click here to make the text larger" class="font-big"></span><span title="Click here to make the text regular size" class="font-normal"></span><span title="Click here to make the text smaller" class="font-small"></span>

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
<a href="?page_id=45" class="archivelink">More posts --></a>
<div class="databox">

    	<div class="titleblock" title="This is our personal favorite selection of content on our site."><h3>Featured Content</h3></div>

        <ul>
        
        	<li><a href="http://core2062.com/about/site/" title="Click here to read more">About This Site</a></li>

        	<li><a href="http://core2062.com/about/outreach/" title="Click here to read more">Outreach</a></li>

            <li><a href="http://core2062.com/waukesha-vex-league/" title="Click here to read more">Waukesha VEX League</a></li>

            <li><a href="http://core2062.com/about-first/" title="Click here to read more">About FIRST</a></li>

            <li><a href="http://core2062.com/about/" title="Click here to read more">About C.O.R.E.</a></li>

        </ul>

    </div><!-- End databox --> <!--

    <div class="databox">

    	<div class="titleblock" title="New content is constantly added to this site. Here is the newest for your convenience."><h3>New Content</h3></div>

        <ul><?php $args = array(

	'sort_column'  => 'post_date',

	'number'       => '4',

	'sort_order'   => 'DESC',

	'title_li'     => '',

	'depth'        => '-1'

	); ?> 

    <?php wp_list_pages( $args ); ?></ul>

    </div><!-- End databox -->
-->


</div><!-- End main-content -->



<?php get_footer(); ?>
