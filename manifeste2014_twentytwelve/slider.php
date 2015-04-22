<!-- slider UI -->



	<div id="slider" style="display:none;">
	<?php
	$tmp = $wp_query;
	$wp_query = new WP_Query(
		array(
			'post_type' => 'event',
			'meta_query' => array(
				array(
					'key' => 'show_in_slider',
					'value' => True
				),
				array(
					'key' => '_eventorganiser_schedule_start_start',
					'orderby' => '_eventorganiser_schedule_start_start',
					'order' => 'ASC'
				)
			)
		)
	);
	if(have_posts()) :
	    while(have_posts()) :
	        the_post();
	    	$arr_title_anchor = array('title' => '#event_'.get_the_ID());
	    	$arr_title_datas = array('title' => get_the_title(get_the_ID()));
	?>
	            <a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail('nivothumb', $arr_title_anchor); ?>
				<?php
					$post_meta = get_post_meta(get_the_ID(), 'image_carrousel', true);
					$img = get_post_meta($post_meta, '_wp_attached_file', true);
					echo "<img title=".$arr_title_anchor['title']." src=".site_url()."/wp-content/uploads/".$img.">";
				?>
				</a>
	<?php
	    endwhile;
	endif;
	$wp_query = $tmp;
	?>
	</div>

	<!-- end slider UI -->
	<!-- text content for the slider -->
	<?php
	?>
<?php
	$tmp = $wp_query;
	$wp_query = new WP_Query(
		array('post_type' => 'event', 'meta_key' => 'show_in_slider', 'meta_value' => True, 'orderby' => 'date', 'order' => 'ASC')
		);
	if(have_posts()) :
	    while(have_posts()) :
	        the_post();
	    	//$arr_title_datas = array('id' => 'event_'.get_the_ID(), 'title' => get_the_title(get_the_ID()),
	    	//	'date' => date_i18n(get_option('date_format'), get_post_meta(get_the_ID(), 'date', true)));
	?>

	<?php

	$date_format = __('j F, H\hi');
	$occurrences = eo_get_the_occurrences_of( get_the_ID() );
	$t = sizeof($occurrences);
	$i = 0;
	?>
	            <div id="event_<?php echo the_ID() ?>" class="nivo-html-caption">
	            	<a href="<?php the_permalink(); ?>">
                        <div class="event-title"><?php echo get_the_title(get_the_ID()); ?></div>
	            	<div class="event-date">
	            		<?php
						foreach( $occurrences as $occurrence) {
						    $i++;
						    echo remove_minute(eo_format_datetime( $occurrence['start'] , $date_format ));
						    if ($i < $t) echo " | ";
						}
						?> <!-- if hour needed H:i -->
					</div>
	            	</a>
	            </div>

	<?php
	    endwhile;
	endif;
	$wp_query = $tmp;
	?>

	<?php
	?>
	<!-- end text content for the slider -->