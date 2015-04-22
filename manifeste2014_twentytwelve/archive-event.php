<?php
/**
 * The template for displaying events list page
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


//intervalle dates
$tab = array(
	array('2014-06-11','2014-06-15',__('11 juin - 15 juin')),
	array('2014-06-16','2014-06-22',__('16 juin - 22 juin')),
	array('2014-06-23','2014-06-29',__('23 juin - 29 juin')),
	array('2014-06-30','2014-07-06',__('30 juin - 6 juillet')),
	array('2014-07-07','2014-07-10',__('7 juillet - 10 juillet'))
);

//pour récupérer la date lorsqu'on clique sur le permalien généré par le widget calendrier. HACK dégueu
$urltemp = explode('/', $_SERVER['REQUEST_URI']);
if ($urltemp[(sizeof($urltemp)-5)]=='on') {
	$ondate = new DateTime($urltemp[(sizeof($urltemp)-4)].'-'.$urltemp[(sizeof($urltemp)-3)].'-'.$urltemp[(sizeof($urltemp)-2)], eo_get_blog_timezone());
	$ondatestring = $ondate->format('Y-m-d');
}

if (isset($ondate)) $today = $ondate;
else {
	$now = date('Y-m-d');
	$today = new DateTime($now, eo_get_blog_timezone());
	//$today = new DateTime('2014-06-29', eo_get_blog_timezone());
}

if ($_GET['event_start_after']=="" && $_GET['event_end_before']=="") {
	for ($i=0; $i <= sizeof($tab); $i++) {
		$date1 = new DateTime($tab[$i][0], eo_get_blog_timezone());
		$date2 = new DateTime($tab[$i][1], eo_get_blog_timezone());
		if ($date1 <= $today && $today <= $date2) {
			$date_start_after = $tab[$i][0];
			$date_end_before = $tab[$i][1];
			$selected = $i;
			if (isset($ondate)){
				$selected = $i;
			}
		}
	}
} else {
	$date_start_after = $_GET['event_start_after'];
	$date_end_before = $_GET['event_end_before'];
	for ($i=0; $i < sizeof($tab); $i++) {
		if ($tab[$i][0] == $date_start_after) $selected = $i;
	}
}


if (isset($_GET['lang'])) $url = $url."&lang=".$_GET['lang'];


get_header(); ?>
<div class="row">
    <div id="leftcol" class="span9">
    <div class="mainbloc">
	<section id="primary" class="site-content">
		<div id="content" role="main">

			<header class="archive-header">
				<ul class="naveve">
					<?php
					for ($i=0; $i<=4; $i++){
						$intervalledate = $tab[$i][2];
						if ($i == $selected) echo "<li class='selected dateevent'>".$intervalledate."</li>";
						else echo "<li class='dateevent'><a href=".site_url()."/events/event?lang=".$_GET['lang']."&event_start_after=".$tab[$i][0]."&event_end_before=".$tab[$i][1].">".$intervalledate." </a></li>";
					}
					?>
				</ul>
			</header><!-- .archive-header -->

			<?php
				$args = array(
					'post_type' => 'event',
					'posts_per_page' => -1,
					'event_start_after' => $date_start_after,
					'event_end_before' =>  $date_end_before,
					'ondate' => $ondatestring
				);
				$query = query_posts( $args );
			?>

			<?php if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', 'event' );

			endwhile;

			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->
    </div><!-- bootstrap .mainbloc -->
 	</div><!-- bootstrap .span9 -->
<?php get_sidebar('content'); ?>
</div><!-- ROW -->
<?php get_footer(); ?>