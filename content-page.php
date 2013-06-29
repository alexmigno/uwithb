<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package uwithb
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php
        if (function_exists('crimsonShowSocialLike'))
            crimsonShowSocialLike();
        ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'uwithb'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->
    <?php edit_post_link(__('Edit', 'uwithb'), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>'); ?>

    <footer>
        <?php
        if (function_exists('selfserv_shareaholic')) {
            selfserv_shareaholic();
        }
        ?>
        <?php
            if (function_exists('crimsonShowSocialShare'))
                crimsonShowSocialShare();
            ?>
    </footer>

</article><!-- #post-## -->
