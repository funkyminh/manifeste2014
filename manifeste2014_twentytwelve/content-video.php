<?php
/**
 * The default template for displaying video content
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
		<header class="entry-header video">
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<a href="<?php the_permalink(); ?>" rel="bookmark"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/playvid.png" class="playvid"/><?php the_post_thumbnail('image-rectangle'); ?></a>
			<h3><?php the_title(); ?></h3>
			<?php endif; // is_single() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php if ( is_single() ) :?>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php endif; ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php
				if ( is_single() ) :
					//category video type
					$video_type = wp_get_post_terms( $post->ID, 'video_type');
					//echo "<p>categorie : ".$video_type[0]->name."</p>";

					//id video for link video
					$media_id = get_post_meta( $post->ID, 'media_id');
					//echo "<p>id media : ".$media_id[0]."</p>";
					echo "<div>";
					echo get_media_embed(trim($media_id[0]));
					echo "</div>";
				endif;
				//twentytwelve_entry_meta();
			?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
