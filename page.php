<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package uwithb
 */
get_header();
?>

<section id="primary" class="col-md-8">
    <div id="content" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('content', 'page'); ?>

            <?php
            $visualizzaCommenti = get_field("box_commenti","options");
            // If comments are open or we have at least one comment, load up the comment template
            if($visualizzaCommenti){
            	if (comments_open() || '0' != get_comments_number())
                	comments_template();
            }
            ?>

        <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
