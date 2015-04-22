<?php
/**
 * The default template for displaying text content
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

			<?php if ( is_single() ) : ?>
                        <header class="entry-header">
						<h2 class="entry-title contenttit"><?php the_title(); ?></h2>

						<?php 
								$author = get_post_meta( $post->ID, 'author');
								$function = get_post_meta( $post->ID, 'function');
								echo "<span class='entry-infos'>".__('par')." ".$author[0]." ".$function[0]."</span>";
								$text_type = wp_get_post_terms( $post->ID, 'text_type');
								echo "<span class='categorie-label-tribune'>".$text_type[0]->name."</span>";
								echo "</header><!-- .entry-header -->";
						?>

			<?php else : ?>
                        <header class="entry-header blocktribunes">
                        <div class="tribunesleft">
						<?php the_post_thumbnail('image-miniature'); ?>
                        </div>

                        <div class="tribunesright">
						<h2 class="entry-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h2>

						<?php
								$author = get_post_meta( $post->ID, 'author');
								$function = get_post_meta( $post->ID, 'function');
								echo "<p><span class='entry-infos'>".__('par')." ".$author[0]." ".$function[0]."</span>";
								$text_type = wp_get_post_terms( $post->ID, 'text_type');
								echo "<span class='categorie-label-tribune'>".$text_type[0]->name."</span></p>";
								the_excerpt();
								echo "</div>";
                                echo "</header><!-- .entry-header -->";
                        ?>
			<?php endif; // is_single() ?>

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


	</article><!-- #post -->
