<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="row">

			<!-- HACK to add right sidebar to twenty twelve theme --> 
			<?php if (is_front_page()) : ?>
        <div id="leftcol" class="span9">
                <div class="mainbloc">
				<?php get_template_part( 'content', 'frontpage' ); ?>
                            </div><!-- .mainbloc -->
  </div><!-- bootstrap .span9 -->

			<?php else: ?>
<div id="leftcol" class="span9">
    <div class="mainbloc">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
        </div><!-- .mainbloc -->
 </div><!-- bootstrap #span -->
			<?php endif; ?>



<?php get_sidebar('content'); ?>
</div><!-- RAW -->

<?php get_footer(); ?>