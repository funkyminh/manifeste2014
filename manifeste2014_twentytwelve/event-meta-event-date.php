
<?php
/**
 * The template is used for displaying a book button with dates.
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
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>


<?php

$date_format = __('j F, H\hi');

//Event reoccurs - display dates.
$upcoming = new WP_Query(array(
	'post_type'=>'event',
	'posts_per_page' => -1,
	'event_series' => get_the_ID(),
	'group_events_by'=>'occurrence'//Don't group by series
));

if( $upcoming->have_posts() ):

$nb_date = $upcoming->have_posts();

if ($upcoming->post_count == 1) { ?>

<div class="dateblock">
<a target="_blank" href=<?php echo display_link_billeterie(eo_get_the_id_billeterie(), ICL_LANGUAGE_CODE); ?>>
	<button id="addClass">
            <div class="butreserver">
		<span class="resa">
			<?php echo __('Réserver'); ?>
		</span>
		<span class="dateresa">
			<?php //echo display_link_billeterie(eo_the_id_billeterie(), ICL_LANGUAGE_CODE); ?>
		</span>
                </div>
	</button>
</a>
</div>

<?php } else { ?>

<div class="dateblock">
<button id="addClass">
<div class="butreserver">
<span class="resa">
		<?php echo __('Réserver'); ?>
</span>
</div>
</button>

		<ul id="listedates" class="">
                        <h4><?php //the_title(); ?></h4>
			<?php while( $upcoming->have_posts() ): $upcoming->the_post(); ?>
					<li><strong><a target="_blank" href=<?php echo display_link_billeterie(eo_get_the_id_billeterie(), ICL_LANGUAGE_CODE); ?>><?php echo remove_minute(eo_get_the_start($date_format)); ?></a></strong></li>
			<?php endwhile; ?>
		</ul>


    </div>
<?php } ?>

	<?php
	wp_reset_postdata();
	?>
<?php endif; ?>


