<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p>This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number("Comments", 'Comments', '% Comments' );?> to '<?php the_title(); ?>'...</h3>

	<ol>

	<?php foreach ($comments as $comment) : ?>
		
		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>" class="comment">
			<div class="commentbar"><?php echo get_avatar( $comment, 32 ); ?>
			<p><cite><?php comment_author_link() ?></cite> 
			<?php if ($comment->comment_approved == '0') : ?>
			<i>(Your comment is awaiting moderation.)</i>
			<?php endif; ?> on
			<p><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?> said:</p>
            </div><!-- End commentbar -->
            <div class="databoxpage">
            	<div class="comment text">
			<?php comment_text() ?>
            	</div>
            </div><!-- End databoxpage -->
		</li><br />

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p>Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
<div class="commentbar">
<h3 id="respond">Leave a Reply</h3>
</div>
<div class="databoxpage">
	<div class="text">
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author">Name <?php if ($req) echo "(required)"; ?></label><br />

<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email">Mail (will not be published) <?php if ($req) echo "(required)"; ?></label>
<br />
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url">Website</label>

<?php endif; ?>


<p>We'd love to hear what you have to say. Hover over our available <acronym title="XHTML: You can use these tags:<?php echo allowed_tags(); ?>">tags</acronym> to see what's available.</p>

<textarea name="comment" id="comment" cols="65" rows="10" tabindex="4"></textarea>

<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>
</div><!-- End databoxpage -->

<?php endif; // if you delete this the sky will fall on your head ?>
