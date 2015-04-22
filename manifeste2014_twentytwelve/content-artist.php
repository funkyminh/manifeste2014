<?php
/**
 * The default template for displaying artist content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>

		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title contenttit"><?php the_title(); ?></h1>

			<?php else : ?>
                        <div class="thumb">
                                                        <div class="view view-first">
                                <?php the_post_thumbnail('image-miniature'); ?>
                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                            <div class="mask">
                            <h2><?php the_title(); ?></h2>
                        </div></a>
                        </div>
                        </div>
			<?php endif; // is_single() ?>


		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content contenttxt">
			<?php if ( is_single() ) :?>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php endif; ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php //twentytwelve_entry_meta() ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
