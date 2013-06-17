<?php
/**
 * @package uwithb
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

        <?php if ('post' == get_post_type()) : ?>
            <div class="entry-meta">
                <?php uwithb_posted_on(); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php if (is_search() || is_archive()) : // Only display Excerpts for Search ?>
        <div class="entry-summary row-fluid">
            <div class="entry-thumbnail span4">
                <?php
                $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
                //se la thumbnail non c'�, carico una immagine di default
                if (empty($thumbnail[0]))
                    $thumbnail[0] = get_bloginfo("template_url") . "/img/default-medium.jpg";
                ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <img src="<?php echo $thumbnail[0]; ?>" alt="<?php the_title(); ?>" />
                </a>
            </div><!-- entry-thumbnail -->

            <div class="entry-excerpt span8">
                <?php the_excerpt(); ?>
            </div>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'uwithb')); ?>
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . __('Pages:', 'uwithb'),
                'after' => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-meta">
        <?php if ('post' == get_post_type()) : // Hide category and tag text for pages on Search ?>
            <?php
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(__(', ', 'uwithb'));
            if ($categories_list && uwithb_categorized_blog()) :
                ?>
                <span class="cat-links">
                    <?php printf(__('Posted in %1$s', 'uwithb'), $categories_list); ?>
                </span>
            <?php endif; // End if categories ?>

            <?php
            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', __(', ', 'uwithb'));
            if ($tags_list) :
                ?>
                <span class="sep"> | </span>
                <span class="tags-links">
                    <?php printf(__('Tagged %1$s', 'uwithb'), $tags_list); ?>
                </span>
            <?php endif; // End if $tags_list ?>
        <?php endif; // End if 'post' == get_post_type() ?>

        <?php if (!post_password_required() && ( comments_open() || '0' != get_comments_number() )) : ?>
            <span class="sep"> | </span>
            <span class="comments-link"><?php comments_popup_link(__('Leave a comment', 'uwithb'), __('1 Comment', 'uwithb'), __('% Comments', 'uwithb')); ?></span>
        <?php endif; ?>

        <?php edit_post_link(__('Edit', 'uwithb'), '<span class="sep"> | </span><span class="edit-link">', '</span>'); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-## -->
