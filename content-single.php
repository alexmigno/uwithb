<?php
/**
 * @package uwithb
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-meta">
            <?php uwithb_posted_on(); ?>
        </div><!-- .entry-meta -->

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

    <footer class="entry-meta">
        <?php
        if (function_exists('selfserv_shareaholic')) {
            selfserv_shareaholic();
        }
        ?>
        <?php
        if (function_exists('crimsonShowSocialShare'))
            crimsonShowSocialShare();
        ?>

        <?php
        /* translators: used between list items, there is a space after the comma */
        $category_list = get_the_category_list(__(', ', 'uwithb'));

        /* translators: used between list items, there is a space after the comma */
        $tag_list = get_the_tag_list('', __(', ', 'uwithb'));

        if (!uwithb_categorized_blog()) {
            // This blog only has 1 category so we just need to worry about tags in the meta text
            if ('' != $tag_list) {
                $meta_text = __('This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'uwithb');
            } else {
                $meta_text = __('Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'uwithb');
            }
        } else {
            // But this blog has loads of categories so we should probably display them here
            if ('' != $tag_list) {
                $meta_text = __('This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'uwithb');
            } else {
                $meta_text = __('This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'uwithb');
            }
        } // end check for categories on this blog

        printf(
                $meta_text, $category_list, $tag_list, get_permalink(), the_title_attribute('echo=0')
        );
        ?>

        <?php edit_post_link(__('Edit', 'uwithb'), '<span class="edit-link">', '</span>'); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-## -->
