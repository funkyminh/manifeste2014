<?php
/**
 * The template for displaying artists list page
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="row">

    <div id="leftcol" class="span9">
        <div class="mainbloc">
	<section id="primary" class="site-content">
		<div id="content" role="main">

			<header class="archive-header">

			</header><!-- .archive-header -->

			<?php
				$args = array(
					'post_type' => 'artist',
		            'meta_key' => 'last_name',
		            'orderby' => 'meta_value',
					'order'   => 'ASC',
					'posts_per_page' => -1,
				);
				$query = new WP_Query( $args );
			?>

			<?php if ( $query->have_posts() ) :

			/* Start the Loop */
			while ( $query->have_posts() ) : $query->the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', 'artist' );

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