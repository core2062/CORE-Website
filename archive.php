<?php ob_start(); ?>
<div class="main-content">
	<?php include('component/posts.php'); ?>
</div>
<?php
	get_sidebar();
	include("wrapper.php");
?>
