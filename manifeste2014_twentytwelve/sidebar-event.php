<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="span3 sidebarcolor">
			<div id="secondary" class="widget-area" role="complementary">
			<?php

				$date_format = __('j F, H\hi');
				$date_format_end = __('H\hi');

				//Event reoccurs - display dates.
				$upcoming = new WP_Query(array(
					'post_type'=>'event',
					'posts_per_page' => -1,
					'event_series' => get_the_ID(),
					'group_events_by'=>'occurrence'//Don't group by series
				));

				dynamic_sidebar( 'sidebar-1' );
				echo "<div id=lieu style='margin-bottom:45px;'>";
					echo "<h3>".__('date & lieu')."</h3>";
        			while( $upcoming->have_posts() ): $upcoming->the_post();
						echo remove_minute(eo_get_the_start($date_format));
						if (eo_get_the_end('H\hi') > eo_get_the_start('H\hi')) echo "-".remove_minute(eo_get_the_end($date_format_end));
						echo "<br/>";
					endwhile;
					//echo "<br>";
					eo_venue_name();
					echo "<br><br>";
					echo get_ical();
				echo "</div>";

				echo "<div id=tarif style='margin-bottom:25px;'>";
				echo "<h3>".__('tarifs & infos pratiques')."</h3>";
				echo the_field('pratical_info');
				echo "<div class='btorange orange'>";
				if (get_field('id_billetterie')!="") {
					get_template_part('event-meta','event-date');
				}
				echo "</div><div class='clearfix'></div></div>";
    			echo "<h3 class='titrerespplay'>".__('playlist')."</h3>";
    			echo "<div id=playlist style='margin-bottom:45px;'>";
    			if (get_field('id_playlist')!="") {
					echo get_playlist_event_pmc($post->ID);
				} else echo get_playlist_pmc($id);
				echo "</div>";

				echo "<div id=program>";
					echo "<h3>".__('télécharger')."</h3>";
					?>
					<div style="float: left;">
						<img width="120" height="140" src="<?php bloginfo( "stylesheet_directory"); ?>/images/manifeste2014.jpg" />
					</div>
					<div style="float: left;">
						<?php if (get_field('program')!='') {?>
						<a href="<?php bloginfo( "wpurl"); ?>/<?php echo get_field('program'); ?>" target="_blank"><i class="icon-download"></i> <?php echo __('Le programme') ?></a>
						<?php } ?>
						<a href="<?php bloginfo( "stylesheet_directory"); ?>/pdf/manifeste2014.pdf" target="_blank"><i class="icon-download"></i> <?php echo __('La brochure') ?></a>
					</div>
					<div class="clearfix"></div>
					<?php
				echo "</div>";
			?>
			</div><!-- #secondary -->
	  </div><!-- bootstrap #span -->

	<?php endif; ?>