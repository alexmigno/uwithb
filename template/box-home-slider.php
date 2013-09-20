<div id="box-home-slider" class="">
    <div class="carousel slide">
        <div class="carousel-inner">
            <?php
                        $args = array('showposts' => -1, 'post_type' => 'homeslide', 'orderby' => 'menu_order', 'order'=>'ASC');
            $class = ' active"';
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <?php $slide = get_field("slide"); ?>
                <div class="item<?php echo $class; ?>">
                    <img src="<?php echo $slide["sizes"]["homeslide"]; ?>" />
                </div><!-- .item -->

                <?php
                $class = '';
            endwhile; // End the loop.
            wp_reset_postdata();
            ?>
        </div><!-- .carousel-inner -->
    </div><!-- .carousel -->
</div><!-- #box-home-slider -->