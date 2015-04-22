<?php
/**
 * The template for displaying frontpage content
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

			<?php
			$args = array(
				'post_type' => 'news',
				'posts_per_page' => '1',
				'order' => 'DESC'
				);

			// The Query
			$the_query = query_posts( $args );
			the_post();
			if ( get_the_content() != "" ) { ?>
			<div id="manifeste2014-news" class="marges">
				<h1 class="titre-der-mn"><?php echo __('dernière minute'); ?></h1>
				<?php
					echo "<div class='blocleftder'><span class='titrederminute'>".get_the_title()."</span>" . "<p>".get_the_content()."</p></div>";
				?>
			</div><!-- #manifeste2014-news -->
			<?php }
			wp_reset_postdata();
			?>

			<div id="manifeste2014-edito" class="marges">
 				<?php
					if (isFrench()) $page_id = 519; else $page_id = 528; // Enter your post, page or custom post type id here
					$page_data = get_page( $page_id );  //gets all page data
					echo "<p>".($page_data->post_excerpt)."</p>";
 				?>
 			<h1 class="edito"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/fleche-edito.gif"/>
 				<?php
 					echo "<a href=".get_permalink($page_id).">".__('Édito')."</a>";
 				?>
 			</h1>

			</div><!-- #manifeste2014-edito -->


			<div id="manifeste2014-medias" class="marges">
			<h1><?php echo __('Derniers médias') ?></h1>


				<div class="blocmedias">
				<h2>Article</h2>
					<?php
					$args1 = array(
						'post_type' => 'text',
						'posts_per_page' => '1',
						'order' => 'DESC'
						);

					// The Query
					$the_query = new WP_Query( $args1 );

					// The Loop
					if ( $the_query->have_posts() ) { ?>
						<?php while ( $the_query->have_posts() ) {
							$the_query->the_post();
							echo "<a href=".get_permalink().">".get_the_post_thumbnail($page->ID, 'image-rectangle')."</a>";
							echo "<div class='mediastitre'>";
							echo get_the_title();
							echo "</div><div class='mediasdate'/>";
							echo get_the_date('j F');
							echo "</div><div class='mediastxt'>";
							echo get_the_excerpt();
                            echo "</div>";
						} ?>
					<?php } else {
						// no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</div>

				<div class="blocmedias">
				<h2><?php echo __('vidéo') ?></h2>
					<?php
					$args2 = array(
						'post_type' => 'video',
						'posts_per_page' => '1',
						'order' => 'DESC'
						);

					// The Query
					$the_query = new WP_Query( $args2 );

					// The Loop
					if ( $the_query->have_posts() ) { ?>
						<?php while ( $the_query->have_posts() ) {
							$the_query->the_post();
							echo "<a href=".get_permalink().">".get_the_post_thumbnail($page->ID, 'image-rectangle')."</a>";
							echo "<div class='mediastitre'>";
							echo get_the_title();
							echo "</div><div class='mediasdate'/>";
							echo get_the_date('j F');
							echo "</div><div class='mediastxt'>";
							echo get_the_excerpt();
                            echo "</div>";
						} ?>
					<?php } else {
						// no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</div>

				<div class="blocmedias">
				<h2><?php echo __('Portrait') ?></h2>
					<?php
					$args3 = array(
						'post_type' => 'artist',
						'posts_per_page' => '1',
						'order' => 'DESC'
						);

					// The Query
					$the_query = new WP_Query( $args3 );

					// The Loop
					if ( $the_query->have_posts() ) { ?>
						<?php while ( $the_query->have_posts() ) {
							$the_query->the_post();
							echo "<a href=".get_permalink().">".get_the_post_thumbnail($page->ID, 'image-rectangle')."</a>";
							echo "<div class='mediastitre'>";
							echo get_the_title();
							echo "</div><div class='mediasdate'/>";
							echo get_the_date('j F');
							echo "</div><div class='mediastxt'>";
							echo get_the_excerpt();
                            echo "</div>";
						} ?>
					<?php } else {
						// no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</div>



			</div><!-- #manifeste2014-medias -->

			
			<div id="manifeste2014-revueweb" class="marges">
			<h1><?php echo __('Revue du Web') ?></h1>

				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => '3',
					'order' => 'DESC'
					);

				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) { ?>
					<?php while ( $the_query->have_posts() ) {
						$the_query->the_post();
    					$linktab = parse_scoopit_link(get_the_content());
						echo "<div class='blocrevueweb'>";
            			echo "<div class='mediastitre'><a target=_blank class='web-revue' href=".$linktab[0].">".get_the_title()."</a></div><div class='mediasdate'/>";
						echo the_date('j F');
            			echo "</div><div class='mediastxt'>";
						echo get_the_excerpt();
						echo "</div></div>";

					} ?>
				<?php } else {
					// no posts found
				}

				/* Restore original Post Data */
				wp_reset_postdata();
				?>

				<div class="clearfix"></div>

	 			<div class="touteslesactus">
	 				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/fleche-actualite.gif"/>
	 				<?php echo "<a href=".get_permalink(596)."?lang=".$_GET['lang'].">".__(' Toute l\'actualité')."</a>"; ?>
	 			</div>



				<?php
				//get_posts_from_scoopit(3);
				wp_reset_postdata();
				?>

			</div><!-- #manifeste2014-revueweb -->
			



