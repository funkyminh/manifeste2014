<?php
/**
 * The default template for displaying event content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('event-gap'); ?> >
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">

			<?php if ( is_single() ) : ?>
					<h2 class="entry-title contenttit"><?php the_title(); ?></h2>
					<div class="contenttxt">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) );?>
                    </div>
			<?php else : ?>
	                <div class="eventimg">
	                <?php
	                	if (has_post_thumbnail()) the_post_thumbnail('image-programme');
	                	//else echo "<img src=".wp_get_attachment_url( 371 ).">";
	                ?>
	                </div>

	                <div class="eventtxt">
                            <div class="titremeta"><h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2><?php if( get_the_terms(get_the_ID(),'event-category') ){ ?><div class="meta"><?php echo get_the_term_list( get_the_ID(),'event-category', '', ', ', '' ); ?></div><?php } ?></div>

						<?php
                        eo_get_template_part('event-meta','event-single');
                        echo "<div class='orange'>";
						if (get_field('id_billetterie')!="") {
                         	get_template_part('event-meta','event-date');
                        }
                        echo "</div>";

                         ?>

			<?php endif; // is_single() ?>

		</header><!-- .entry-header -->

	</article><!-- #post -->
