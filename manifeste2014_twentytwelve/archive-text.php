<?php
/**
 * The template for displaying events list
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

			<?php if ( have_posts() ) :

				$taxonomies = array(
				    'text_type',
				);

				$args = array(
	    			'orderby' => 'slug',
	    			'order'   => 'ASC',
	    			'posts_per_page' => -1,
	    		);

				$member_group_terms = get_terms( $taxonomies, $args );
				?>

				<!-- MENU TAB -->
				<div id="tabs" class="tribunes">
				<ul>
				<?php
				foreach ( $member_group_terms as $member_group_term ) {
					echo "<li><a href=\"#".$member_group_term->slug."\">".$member_group_term->name."</a></li>";
				}
				?>
				</ul>
				<br/>
				<?php
				foreach ( $member_group_terms as $member_group_term ) { ?>

					<?php
					$args = array(
						'post_type' => 'text',
						'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'text_type',
								'field' => 'slug',
								'terms' => $member_group_term->slug,
								'operator' => 'IN'
							)
						)
					);

					$query = new WP_Query( $args );

					echo "<div id=".$member_group_term->slug.">";

					//echo "<h2 class='entry-title contenttit'>".$member_group_term->name."</h2>";

					// Start the Loop.
					while ( $query->have_posts() ) : $query->the_post();

					/* Include the post format-specific template for the content. If you want to
					 * this in a child theme then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', 'text' );

					endwhile;
					echo "</div>";
				}

				?>
				</div><!-- #tab -->
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->
         </div><!-- .mainbloc -->
 </div><!-- bootstrap #span -->

<?php get_sidebar('content'); ?>
        </div><!-- RAW -->
<?php get_footer(); ?>