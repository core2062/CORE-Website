<div class="<?php echo (is_front_page() ? "header" : "header-short"); ?>">
	<a id="logo" href="<?php bloginfo('url'); ?>" title="Click here to go back to the main page.">CORE<br/>2062</a>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php if(is_front_page()):?>
		<div class="header-show">
			<ul id="sb-slider" class="sb-slider">
				<?php dynamic_sidebar('slider-home'); ?>
			</ul>
		</div>

	<?php else: ?>
		<div class="header-short-pic">
			<img src="http://core2062.com/wp-content/uploads/2017/04/710_3743-2.jpg"/>
		</div>
	<?php endif; ?>

	<?php include('navbar.php'); ?>
	<input type="checkbox" id="nav-wrapper" checked/>
	<label for="nav-wrapper">
		<?php wp_nav_menu(array(
			'container' => false,
			'theme_location' => 'main-menu',
			'walker'=> new Custom_Walker_Nav_Menu
		));?>
	</label>
</div>
