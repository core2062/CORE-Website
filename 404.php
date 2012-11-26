<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<?php get_header(); ?>
	<body>
		<div id="page-wrap">

			<?php include('component/header.php'); ?>

			<div id="page">
				<?php include('component/banner_bar.php'); ?>

				<?php get_sidebar(); ?>	

				<div class="main-content">

					<div class="alert red">
						<h4>Oops! It looks like a 404.</h4>
						<p>It looks like the page you were looking for isn't where you were looking for it. If I were you, I'd try searching for it...if it's here you'll probably find it by doing that. If not, and you think it should be, please <a href="http://core2062.com/contact">contact us</a>.</p>
					</div>

				</div>
			</div>

			<?php get_footer(); ?>

		</div>
	</body>
</html>