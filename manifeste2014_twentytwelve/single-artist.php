<?php
/**
 * The Template for displaying single artist
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="row">
    
    <div id="leftcol" class="span9">
            <div class="mainbloc">
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'artist' ); ?>

			<?php endwhile; // end of the loop. ?>
<div class="clearfix"></div>
			<?php twentytwelve_entry_meta() ?>

		</div><!-- #content -->
	</div><!-- #primary -->
         </div>
 </div><!-- bootstrap #span -->
<?php get_sidebar('content'); ?>
        </div><!-- RAW -->
<?php get_footer(); ?>