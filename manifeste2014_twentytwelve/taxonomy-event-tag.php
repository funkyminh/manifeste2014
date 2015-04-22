<?php
/**
 * The template for displaying an event-tag page
 *
 ***************** NOTICE: *****************
 *  Do not make changes to this file. Any changes made to this file
 * will be overwritten if the plug-in is updated.
 *
 * To overwrite this template with your own, make a copy of it (with the same name)
 * in your theme directory. See http://wp-event-organiser.com/documentation/editing-the-templates/ for more information
 *
 * WordPress will automatically prioritise the template in your theme directory.
 ***************** NOTICE: *****************
 *
 * @package Event Organiser (plug-in)
 * @since 1.2.0
 */


get_header(); ?>
<div class="row">
    <div id="leftcol" class="span9">
                <div class="mainbloc">
	<section id="primary" class="site-content">
		<div id="content" role="main">

			<header class="archive-header">
				<h1 class="page-title"><?php
					printf( __( 'Event Tag Archives: %s', 'eventorganiser' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>

			<!-- If the tag has a description display it-->
				<?php
					$tag_description = category_description();
					if ( ! empty( $tag_description ) )
						echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $tag_description . '</div>' );
				?>
			</header><!-- .archive-header -->

<br/><br/>

		<?php if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', 'event' );

			endwhile;

			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->
         </div>
 </div><!-- bootstrap #span -->
<?php get_sidebar('content'); ?>
                </div><!-- RAW -->
<?php get_footer(); ?>