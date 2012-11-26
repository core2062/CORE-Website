<div class="sidebar">
	<div class="box">
		<h2>
			Where it all began: <span>FIRST</span>
		</h2>
		<a href="http://usfirst.org" title="Click here to go to FIRST's site">
			<img src="<?php bloginfo('template_url'); ?>/images/FIRST.svg" alt="FIRST Robotics"/>
		</a>
		<br />
		<br />
		<p>We are part of <span>FIRST</span>, which stands for For Inspiration and Recognition of Science and Technology. <span>FIRST</span> is a non-profit organization dedicated to inspiring young people to pursue an education in Science &amp; Technology, while building confidence, knowledge, and life-skills. You can read more about <span>FIRST</span> at their site, or read more in our <span>FIRST</span> section.</p>
		<a href="http://usfirst.org" target="_BLANK" class="button blue">FIRST Website</a>
		<a href="<?php bloginfo('url'); ?>/first" class="button">Read More</a> 
	</div>
	<div class="box about-side">
		<h2>About C.O.R.E. 2062</h2>
		<a href="<?php bloginfo('url'); ?>/about/" rel="lightbox" title="A team portrait" >
			<img src="<?php bloginfo('template_url'); ?>/images/team.jpg" alt="Drivers &amp; Mentors at Competition"/>
		</a>
		<br />
		<br />
		<p><b>Team Name:</b> Verizon Business, Marcus Corporation, GE Volunteers, Rockwell Automation, InSinkerator, Milwaukee School of Engineering, Cooper Power, School District of Waukesha</p>
		<p><b>Team Number:</b> 2062</p>
		<p><b>Team Location:</b> Waukesha, Wisconsin</p>
		<p>Our name stands for Community of Robotic Engineers, and that is just what we are - we are from Waukesha, Wisconsin and accept students from any three of our community high schools, two preparatory academies, and homeschool students from the area. We are part of a larger organization called <span>FIRST</span>. To read more about them, read the section below. We pair them up with great mentors who teach them the fundamentals of robotics and other life skills.</p>
		<a href="<?php bloginfo('url'); ?>/about/" class="button">Read More</a> 
	</div>

	<!-- Twitter Widget -->
	<div class="box" id="twitter_box">
		<h2>Twitter <img src="<?php bloginfo('template_url'); ?>/images/twitter.svg"></img></h2>
		<div></div>
		<a href="https://twitter.com/core2062" class="button">Join the Conversation</a>
	</div>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.tweet.js"></script>
	<script type="text/javascript">
		new TWTR.Widget({
			version: 2,
			type: 'profile',
			rpp: 5,
			interval: 6000,
			width: 'auto',
			height: 300,
			theme: {
				shell: {
					background: '#1f1f1f',
					color: '#ffffff'
				},
				tweets: {
					background: '#000000',
					color: '#ffffff',
					links: '#ff731c'
				}
			},
			features: {
				scrollbar: false,
				loop: false,
				live: false,
				hashtags: true,
				timestamp: true,
				avatars: false,
				behavior: 'all'
			}
		}).render().setUser('core2062').start();
	</script>
	<script type='text/javascript'>
		jQuery(function($){
			$("#twitter_box div").tweet({
				username: "core2062",
				count: 5,
				loading_text: "loading tweets..."
			});
		});
	</script>
</div>