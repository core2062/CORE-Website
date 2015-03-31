<?php ob_start(); ?>
<div class="main-content">
	<div class="alert blue">
		<h4>Welcome! <a class="fancybox-youtube" style="color: #0066B3" href="https://www.youtube.com/watch?v=grH3fj9SS2k"><strong>Our highest scoring match!</strong></a></h4>
		<p>
			We are a group of high school students and adult volunteers that learn, explore, 
			and celebrate science and technology. Through the international organization FIRST, For 
			Inspiration and Recognition in Science and Technology, we build a robot to compete each year. 
			We experience excitement of the challenge, create life-long relationships, and have fun. 
			But we do much more than that. Through collaboration and leadership from students and mentors, ours 
			students develop work ethic, professionalism, and pride.
		</p>
		<p>
			Our team encourages younger students to experience the same excitement of engineering 
			through programs like FLL and VEX. The Waukesha VEX League Competition and League Nights 
			are hosted by our team. Along with VEX, we also hold FLL competitions and encourage members to mentor FLL teams. In both of these venues, and in many others, we display our robot and enlighten them about FRC. Through this, we excite, inspire and celebrate engineering.
		</p>
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