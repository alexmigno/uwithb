<?php
/*
Template Name: Contatti
*/
get_header();
?>
<?php while (have_posts()) : the_post(); ?>

<div class="row">
<section id="primary" class="col-md-5">
    <div id="content"role="main">
		<?php get_template_part('content', 'page'); ?>
<?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</section><!-- #primary -->

<aside class="col-md-7">
	<iframe width="548" height="680" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Biccari&amp;aq=&amp;sll=41.008099,16.727239&amp;sspn=3.187445,6.608276&amp;ie=UTF8&amp;hq=&amp;hnear=Biccari,+Foggia,+Puglia&amp;t=m&amp;ll=41.398445,15.19804&amp;spn=0.043781,0.047035&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
</aside>

</div><!-- .row -->


<?php get_footer(); ?>