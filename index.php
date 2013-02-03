<?php ob_start(); ?>
<div class="main-content">
	<div class="alert blue">
		<h4>Welcome!</h4>
		<p>Welcome to the website for C.O.R.E. 2062! C.O.R.E. is a FIRST robotics team located in Waukesha, Wisconsin. This website is where you will find all of the information about our team. It is recommended that you check back here periodically, as we update often. You can search for a specific topic using the search bar above, or use the drop-down menus to look for something.</p>
	</div>
	<div class="break"></div>

	<div class="titleblock" title="Recent News">
		<h3>Recent News</h3>
	</div>
	<div class="break"></div>
	<?php query_posts('posts_per_page=3'); ?>

	<?php include('component/posts.php'); ?>

	<div class="box more-posts">
		<a href="archives">more posts...</a>
	</div>
</div>
<?php
	get_sidebar('home');
	include("wrapper.php");
?>
