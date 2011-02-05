<?php get_header(); ?>

	<div class="banner-bar">
    <a href="#" title="Click here to return home" class="banner-title">Community of Robotic Engineers - Robotics Team 2062 - Waukesha, Wisconsin </a><a class="learnmore" title="Click here to learn more!" href="#">Learn More!</a><span title="Click here to toggle the settings window" class="personalize"></span>
    </div><!-- End banner-bar -->
<?php get_sidebar(); ?>    
<div class="main-content">
	<div class="alert red">
        	<h4>Oops! It looks like a 404.</h4>
            <p>It looks like the page you were looking for isn't where you were looking for it. If I were you, I'd try searching for it...if it's here you'll probably find it by doing that. If not, and you think it should be, please <a href="http://core2062.com/contact">contact us</a>.</p>
            <a class="close" href="#">close</a>
		</div><!-- End alert -->
	

	<div class="databox">
    	<div class="titleblock" title="This is our personal favorite selection of content on our site."><h3>Featured Content</h3></div>
        <ul>
        	<li><a href="#" title="Click here to read more">Kickoff preparations...an update</a></li>
            <li><a href="#" title="Click here to read more">Safety Corner: Operatin the Bandsawe</a></li>
            <li><a href="#" title="Click here to read more">Mr. Skurulsky's Corner: What concensus truly is</a></li>
            <li><a href="#" title="Click here to read more">About Us...Our Team History</a></li>
            <li><a href="#" title="Click here to read more">Resource Corner: New Sponsorship Template Document</a></li>
        </ul>
    </div><!-- End databox -->
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
    <div class="databox">
    	<div class="titleblock" title="In order to encourage exploration, we have selected some articles randomly for you."><h3>Random Content</h3></div>
       <ul><?php $args = array(
	'sort_column'  => 'post_date',
	'number'       => '4',
	'sort_order'   => 'DESC',
	'order_br'     => 'rand',
	'title_li'     => '',
	'depth'        => '-1'
	); ?> 
    <?php wp_list_pages( $args ); ?></ul>
    </div><!-- End databox -->
      
   

</div><!-- End main-content -->

<?php get_footer(); ?>