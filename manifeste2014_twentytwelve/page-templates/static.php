<?php
/**
 * Template Name: Static Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="row">

    <div id="leftcol" class="span9">
        <div class="mainbloc">

		<?php if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">

				</header>

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
				<footer class="entry-meta clearfix">
					<br/><br/>
					<?php twentytwelve_entry_meta(); ?>
				</footer><!-- .entry-meta -->
			</article><!-- #post -->

			<?php
			endwhile;
			?>
		<?php endif; ?>
        </div>
 </div><!-- bootstrap #span -->
<?php get_sidebar('content'); ?>
        </div><!-- RAW -->
<?php get_footer(); ?>