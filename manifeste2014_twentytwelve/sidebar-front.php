<?php
/**
 * The sidebar containing the front page widget areas
 *
 * If no active widgets are in either sidebar, hide them completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */


if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<div class="span3 sidebarcolor">
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<div>
				<h3><?php echo __('Réseaux Sociaux'); ?></h3>
				<?php echo get_social_network_stream() ?>
			</div>
			<br/>
			<div>
				<h3><?php echo __('Playlist'); ?></h3> 
				<?php echo get_playlist() ?>
			</div>
			<br/>
			<div>
				<h3><?php echo __('Tribunes'); ?></h3>
				<?php icl_link_to_element(252); ?>
			</div>
		</div><!-- #secondary -->
                  </div><!-- bootstrap #span -->  
	<?php endif; ?>