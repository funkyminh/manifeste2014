<?php
if ($_GET['export']=="ical"){
	make_ical();
}
sync_social_network();
?>

<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>

	$(function() {
		$( "#tabs" ).tabs();
	});

	$(function() {
		$( "#tabevent" ).tabs();
	});

	$(function() {
		$( "div[id^='book']" )
		//$( "#book-471" )
		.button()
		//.click(function() {
		//alert( "Running the last action" );
		//})
		.next()
		.button({
		text: false,
		icons: {
		primary: "ui-icon-triangle-1-s"
		}
		})
		.click(function() {
		var menu = $( this ).parent().next().show().position({
		my: "left top",
		at: "left bottom",
		of: this
		});
		$( document ).one( "click", function() {
		menu.hide();
		});
		return false;
		})
		.parent()
		.buttonset()
		.next()
		.hide()
		.menu();
	});

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49580481-1', 'ircam.fr');
  ga('send', 'pageview');

</script>


<script type="text/javascript">

  $( document ).ready(function() {
    var checkboxes = []
    // Prepare the playlist
    $( "#playlist li" ).each(function( index ) {
        var $audio = $($(this).children('audio')[0]);
        var $checkbox = $($(this).find('input')[0]);
        var $label = $($(this).find('label')[0]);
        var $play = $($(this).find('.play-btn')[0]);
        var $stop = $($(this).find('.stop-btn')[0]);
        $stop.hide();
        $checkbox.hide();
        $.extend($checkbox, {audio: $audio, play:$play, stop:$stop})
        $audio.removeAttr('controls');
        checkboxes.push($checkbox);
        var title = $audio.data('title');
        $label.append(title);
    });
    // Trigger events
    $.each(checkboxes, function(index, value){
        var audio = value.audio;
        var index = index
        value.change(function(evt){
            var $checkbox = checkboxes[index];
            if($(evt.target).prop('checked')){
                // Stop other audio
                for(var i=0; i<checkboxes.length; i++){
                    if(i !== index){
                        checkboxes[i].removeAttr('checked');
                        checkboxes[i].audio.get(0).pause();
                        checkboxes[i].audio.get(0).currentTime = 0;
                        checkboxes[i].play.show();
                        checkboxes[i].stop.hide();
                    }
                }
                $checkbox.audio.get(0).play(0);
                $checkbox.play.hide();
                $checkbox.stop.show();
            }else{
                $checkbox.audio.get(0).pause();
                $checkbox.audio.get(0).currentTime = 0;
                $checkbox.play.show();
                $checkbox.stop.hide();
            }
        })
    });
});

</script>



<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript">
	jQuery(document).ready(function() {
		var resize = setTimeout(resizeColumn, 3000);
		jQuery('#slider').show();
		jQuery('.itemlangen img').attr('src', '<?php echo get_stylesheet_directory_uri(); ?>/assets/en.png' );
		jQuery('.itemlangfr img').attr('src', '<?php echo get_stylesheet_directory_uri(); ?>/assets/fr.png' );

		/* BOUTON RESERVER MOBILE */
		jQuery( ".orange" ).click(function() {
			jQuery(this).find("#listedates").addClass( "smartphone" );
		});
	});

	jQuery(window).resize(function() {
		resizeColumn();
	});

	var resizeColumn = function($) {
		if (window.matchMedia("(min-width: 767px)").matches) {
			lHeight = jQuery('#leftcol').outerHeight(true);
			rHeight = jQuery('.sidebarcolor').outerHeight(true);

			if ( lHeight > rHeight ){
				jQuery(".sidebarcolor").height(lHeight)
			} else {
				jQuery(".sidebarcolor").height(rHeight)
			}
		} else {
			jQuery(".sidebarcolor").css("height", "inherit");
		}
	}

</script>

<!-- BOOTSTRAP -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">

<?php wp_head(); ?>




</head>

<body <?php body_class(); ?>>


<div id="page" class="hfeed">

    <div class="container colorheader fluid">


	<header id="masthead" class="site-header" role="banner">
		<div class="content">
			<div class="manifeste-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/manifeste-2014.png" alt="" /></a></div>
			<?php if ( get_bloginfo( 'language' ) == "en-US" ) { ?>
				<div class="ircam-logo"><a target=_blank href="http://www.ircam.fr/?&L=1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ircam.png" alt="" /></a></div>
			<?php } else { ?>
				<div class="ircam-logo"><a target=_blank href="http://www.ircam.fr"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ircam.png" alt="" /></a></div>
			<?php } ?>
			<div class="title"><?php echo __('festival 11 juin / 10 juillet') ?></div>
			<div class="subtitle"><?php echo __('musique théâtre danse') ?></div>
		</div>

		<nav id="site-navigation" class="navigation main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<?php wp_nav_menu( array( 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->


		<!-- front page slider -->
		<?php $front_page = is_front_page();
		if ( $front_page ) : ?>


			<?php get_template_part('slider');?>


		<?php endif; ?>



			<!-- LIEN VERS FACEBOOK TWITTER -->
                        <div class="subnav">
                        <div class="lang">
                        <?php language_selector_flags(); ?>
                        </div>
			<div class="social">
                        <?php echo get_social_network();?>
                        </div>
                        </div>
