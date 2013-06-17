<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package uwithb
 */
?>

</div><!-- #main -->

<footer id="colophon" class="site-footer row" role="contentinfo">
    <div id="copyright" class="span8">
        <?php
        global $crimson;
        echo $crimson['copyright'];
        ?>
    </div>

    <div id="credits-privacy" class="span4">
        <a href="http://www.asernet.it" title="Credits" target="_blank">Credits</a> | 
        <a href="<?php bloginfo("url"); ?>/privacy" title="Privacy">Privacy</a> | 
    </div><!-- credits-privacy -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>