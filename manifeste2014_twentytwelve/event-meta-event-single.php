<?php
/**
 * The template is used for displaying a single event details.
 *
 * You can use this to edit how the details re displayed on your site. (see notice below).
 *
 * Or you can edit the entire single event template by creating a single-event.php template
 * in your theme.
 *
 * For a list of available functions (outputting dates, venue details etc) see http://wp-event-organiser.com/documentation/function-reference/
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
 * @since 1.7
 */
?>

<div class="entry-meta eventorganiser-event-meta">
	<!-- Choose a different date format depending on whether we want to include time -->
	<?php 	$date_format = __('j F, H\hi'); ?>

	<!-- Event details -->

	<ul class="eo-event-meta">



		<?php if( get_the_excerpt() ){ ?>
		    <!--participants-->
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/picto-participant.gif"/> <?php echo get_the_excerpt(); ?></li>
		<?php } ?>

		<?php if( eo_get_venue() ){ ?>
            <!--lieux-->
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/picto-lieu.gif"/> <?php eo_venue_name(); ?></li>
		<?php } ?>

		<?php 
		if( true ){
			$date_format = __('j F, H\hi');
			$occurrences = eo_get_the_occurrences_of( get_the_ID() );
			$t = sizeof($occurrences);
			$i = 0;
			$date_format_end = __('H\hi');
		?>
			<ul id="eo-upcoming-dates"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/picto-date.gif"/>
				<li class="dateeventpicto">
				<?php 						
					foreach( $occurrences as $occurrence) {
			    		$i++;
			    		echo remove_minute(eo_format_datetime( $occurrence['start'] , $date_format ));
						if (eo_get_the_end('H\hi') > eo_get_the_start('H\hi')) echo "-".remove_minute(eo_get_the_end($date_format_end));
			    		if ($i < $t) echo " | ";
					} 
				?>
				</li>
			</ul>

			<?php
			wp_reset_postdata();
			//With the ID 'eo-upcoming-dates', JS will hide all but the next 5 dates, with options to show more.
			wp_enqueue_script('eo_front');
			?>

		<?php } ?>

	</ul>

	<div style="clear:both"></div>



</div><!-- .entry-meta -->
