<?php
/*
Template Name: Archives  
*/
?>

<?php get_header(); ?>

	<div class="banner-bar">
<a class="learnmore" title="Click here to go to a random page!" href="http://core2062.com/?random">Random Page</a><!--<span title="Click here to toggle the settings window" class="personalize"></span>--><span title="Click here to make the text larger" class="font-big"></span><span title="Click here to make the text regular size" class="font-normal"></span><span title="Click here to make the text smaller" class="font-small"></span>
    </div><!-- End banner-bar -->
    <?php get_sidebar(); ?>
<div class="main-content">
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="databoxpage">
				<div class="titleblock"><h3>Posts By Tag</div>
				<div class="text">
					<?php wp_list_categories(); ?>
				</div><!-- End text -->
			</div><!-- End databopage -->
		</div><!--end post-->

</div><!-- End main-content -->


<?php get_footer(); ?>