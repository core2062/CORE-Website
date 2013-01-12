<?php get_header(); ?>

<!-- Template Name: NoBar-->


    
    
    <div class="main-content2">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <div class="databoxpage">
                <div class="titleblock"><h3><?php the_title(); ?></h3></div>
                <div class="text">
                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                </div><!-- End text -->
            </div><!-- End databopage -->
        </div>
        <!-- <?php if (('open' == $post-> comment_status)) { comments_template(); } ?>
        <?php endwhile; endif; ?> -->
    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

</div><!-- End main-content -->


<?php get_footer(); ?>