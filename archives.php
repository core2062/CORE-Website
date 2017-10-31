<?php ob_start(); ?>
<div class="main-content">
	<div class="titleblock">
		<h3>Posts from This Year</h3>
	</div>
	<div class="break"></div>
	<?php query_posts('cat=' . get_category_by_slug('2089-2090')->term_id);?>
	/*
		date must be in YY-YY or YYYY-YYYY format depending on the category
		i.e. dev1.core2062.com/category/12-13/
		i.e. dev1.core2062.com/category/2013-2014/
		Date is used to determine which posts will display
		All posts posted at or before that date range will show up
		So, 2089-2090 means all posts through the year 2090 should show up on the site. 70 years until the next code revision
	*/
	<?php include('component/posts.php'); ?>
	<?php
		$now = new DateTime();
		$currentYear = $now->format("Y");
		$pastYear = ($currentYear - 1);
		$lastYear = ($pastYear);
		$thisYear = ($currentYear);
	?>
	<div class="titleblock">
		<h3>Posts from Previous Years</h3>
	</div>
	<div class="box">
		<div class="post-content">
			<?php wp_list_categories("exclude=" . get_category_by_slug("$lastYear-$thisYear")->term_id); ?>
		</div>
	</div>
	/*
		Automatically excludes current year category in YYYY-YYYY format from being displayed
		Be consistent and use YYYY format, not YY format, from now on
	*/
</div>
<?php
	get_sidebar();
	include("wrapper.php");
?>
