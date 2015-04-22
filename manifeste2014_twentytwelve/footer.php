<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<footer id="colophon" role="contentinfo">
		<div class="site-info">
            <div class="footerlnk">© 2014 Ircam<span class="sepfoot">|</span></div>
			<div class="footerlnk"><?php icl_link_to_element(256); ?><span class="sepfoot">|</span></div>
			<div class="footerlnk"><?php icl_link_to_element(260); ?><span class="sepfoot">|</span></div>
			<div class="footerlnk"><?php icl_link_to_element(264); ?><span class="sepfoot">|</span></div>
			<div class="footerlnk"><?php icl_link_to_element(268); ?><span class="sepfoot">|</span></div>
			<div class="footerlnk"><?php icl_link_to_element(272); ?><span class="sepfoot">|</span></div>
			<div class="footerlnk"><?php icl_link_to_element(276); ?></div>
		</div><!-- .site-info -->

    <div class="footerimg">
    	<a href="http://www.inria.fr/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/inria.png"/></a>
    	<a href="http://www.cnrs.fr/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cnrs.png"/></a>
    	<a href="http://www.culturecommunication.gouv.fr/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ministere-de-la-culture.png"/></a>
    	<a href="http://www.upmc.fr/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/upcm.png"/></a>
    </div>
	</footer><!-- #colophon -->


        </div><!-- bootstrap .container -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>