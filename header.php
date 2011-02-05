<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>



	<head profile="http://gmpg.org/xfn/11">

		

		<title>

			<?php if (is_home()) { echo bloginfo('name');

			} elseif (is_404()) {

			echo '404 Not Found';

			} elseif (is_category()) {

			echo 'Category:'; wp_title('');

			} elseif (is_search()) {

			echo 'Search Results';

			} elseif ( is_day() || is_month() || is_year() ) {

			echo 'Archives:'; wp_title('');

			} else {

			echo bloginfo('name'); wp_title();

			}

			?>

		</title>

		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

	    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

		<meta name="description" content="<?php bloginfo('description') ?>" />

		<?php if(is_search()) { ?>

		<meta name="robots" content="noindex, nofollow" /> 

	    <?php }?>

		

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />


  


        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/swfobject/swfobject.js"></script>

        <script type="text/javascript">

				var flashvars = {};

				flashvars.xml = "<?php bloginfo('template_url'); ?>/config.xml";

				flashvars.font = "font.swf";

				var params = {};

				params.wmode = "transparent";

				var attributes = {};

				attributes.id = "slider";

				swfobject.embedSWF("<?php bloginfo('template_url'); ?>/cu3er.swf", "cu3er-container", "900", "275", "9", "expressInstall.swf", flashvars,params, attributes);

		</script>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



		<?php wp_head(); ?>

		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/js.js"></script>	
		        <script type="text/javascript">
				jQuery(document).ready(function() {
				jQuery("#dropmenu ul").css({display: "none"}); // Opera Fix
				jQuery("#dropmenu li").hover(function(){
				jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show(268);
				},function(){
				jQuery(this).find('ul:first').css({visibility: "hidden"});
				});
        });
        </script>

	</head>



	<body>

	<div class="page-wrap">

    	 <?php if(is_front_page()):?>

    <div class="header">

        	<a class="logo-click" href="<?php bloginfo('url'); ?>" title="Click here to go back to the main page."></a>

        	 <?php include (TEMPLATEPATH . '/searchform.php'); ?>

            <div class="header-show">

            <div id="cu3er-container">

            <br /><br />

            	<p>Hey there...it looks like you don't have a current version of flash installed on your computer..or you have it disabled. Sorry about the inconvenience. If you'd like to see the magical thing that should be where I am, please enable or install flash using the link below. Thanks! If you don't care, then just pretend I'm not here.</p><br /><br />

                <a href="http://www.adobe.com/go/getflashplayer">

                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />

                </a>

            </div>

            	<!--<img src="<?php bloginfo('url'); ?>/wp-content/themes/c0re/images/drivers-mentors.jpg" alt="Drivers & Mentors at Competition" />-->

            </div><!--End header-show -->

            <div class="nav-bar"></div>

          

			 

            <ul id="dropmenu" class="nav">

                <li class="page_item page-item-2"><a title="Home" href="<?php bloginfo('url'); ?>">Home</a></li>

                <?php wp_list_pages('title_li='); ?>

            </ul> 

        </div><!-- End header -->

    <?php else: ?>

<div class="header-short">

        	<a class="logo-click" href="<?php bloginfo('url'); ?>" title="Click here to go back to the main page."></a>

        	 <?php include (TEMPLATEPATH . '/searchform.php'); ?>

            <div class="header-short-pic">

            </div>

            <div class="nav-bar"></div>

          

			 

            <ul id="dropmenu" class="nav">

                <li class="page_item page-item-2"><a title="Home" href="<?php bloginfo('url'); ?>">Home</a></li>

                <?php wp_list_pages('title_li='); ?>

            </ul> 

        </div><!-- End header-short -->

   

    <?php endif; ?>

		<!--<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

		<p><?php bloginfo('description'); ?></p>-->
		<div class="page">

            <div class="box settings">



	</div>
