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

<footer id="footer" class="row" role="contentinfo">
    <div id="footer-content">
    <div id="copyright" class="col-md-8">
        <?php
        global $crimson;
        echo $crimson['copyright'];
        ?>
    </div><!--copyright -->

    <div id="credits-privacy" class="col-md-4">
        <a href="http://www.asernet.it" title="Credits" target="_blank">Credits</a> | 
        <a href="<?php bloginfo("url"); ?>/privacy" title="Privacy">Privacy</a> | 
    </div><!-- credits-privacy -->
    </div><!-- #footer-content -->
</footer><!-- #footer -->
</div><!-- #container -->

<?php wp_footer(); ?>

</body>
</html>