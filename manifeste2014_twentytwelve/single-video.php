<?php
/**
 * The Template for displaying single video
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

				<?php get_template_part( 'content', 'video' ); ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
			<br/><br/>
			<?php twentytwelve_entry_meta() ?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div>
 </div><!-- bootstrap #span -->
<?php get_sidebar('content'); ?>
        </div><!-- RAW -->
<?php get_footer(); ?>