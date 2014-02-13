<?php ob_start(); ?>
<div class="main-content">
	<div class="titleblock">
		<h3>Posts from This Year</h3>
	</div>
	<div class="break"></div>
	<?php query_posts('cat=' . get_category_by_slug('2013-2014')->term_id);?>
	<?php include('component/posts.php'); ?>

	<div class="titleblock">
		<h3>Posts from Previous Years</h3>
	</div>
	<div class="box">
		<div class="post-content">
			<?php wp_list_categories("exclude=" . get_category_by_slug('2013-2014')->term_id); ?>
		</div>
	</div>
</div>
<?php
	get_sidebar();
	include("wrapper.php");
?>
