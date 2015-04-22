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
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<aside id="tribune" class="widget">
				<h3><?php echo __('Tribunes')?></h3>
				<?php echo __('Partager vos avis et idées, en nous proposant votre tribune') ?>
				<br/>
				<?php icl_link_to_element(252); ?>
			</aside>
		</div><!-- #secondary -->
       </div><!-- bootstrap span3 -->

	<?php endif; ?>
