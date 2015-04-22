<?php
/*
Theme Name:     manifeste2014 twentytwelve
Theme URI:
Description:    Twenty Twelve Child
Author:         Minh Dang
Author URI:
Template:       twentytwelve
Version:        0.1.0
*/


require_once('TwitterAPIExchange.php');


add_filter('show_admin_bar', '__return_false');
add_filter('widget_text', 'do_shortcode');

function my_acf_settings( $options )
{
  // activate add-ons
  $options['activation_codes']['repeater'] = 'XXXX-XXXX-XXXX-XXXX';
  $options['activation_codes']['options_page'] = 'XXXX-XXXX-XXXX-XXXX';
  $options['activation_codes']['flexible_content'] = 'XXXX-XXXX-XXXX-XXXX';
  $options['activation_codes']['gallery'] = 'XXXX-XXXX-XXXX-XXXX';

  // setup other options (http://www.advancedcustomfields.com/docs/filters/acf_settings/)

  return $options;

}
add_filter('acf_settings', 'my_acf_settings');


add_action('init', 'my_custom_init');
function my_custom_init() {
  add_post_type_support( 'page', 'excerpt' );
}


/**
* Register field groups
* The register_field_group function accepts 1 array which holds the
relevant data to register a field group
* You may edit the array as you see fit. However, this may result in
errors if the array is not compatible with ACF
* This code must run every time the functions.php file is read
*/

if(function_exists("register_field_group"))
{

 register_field_group(
  array (
   'id' => '5113f18f1f90a',
   'title' => 'event fields',
   'fields' =>
   array (
   0 =>
   array (
     'key' => 'field_5',
     'label' => 'Subtitle',
     'name' => 'subtitle',
     'type' => 'text',
     'order_no' => 0,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       'value' => '',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'formatting' => 'none',
   ),
   1 =>
   array (
     'key' => 'field_13',
     'label' => 'Pratical info',
     'name' => 'pratical_info',
     'type' => 'wysiwyg',
     'order_no' => 6,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       'value' => '',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'toolbar' => 'full',
     'media_upload' => 'yes',
     'the_content' => 'yes',
   ),
   2 =>
   array (
     'key' => 'field_14',
     'label' => 'Id billetterie',
     'name' => 'id_billetterie',
     'type' => 'text',
     'order_no' => 7,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       'value' => '',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'formatting' => 'html',
   ),
   3 =>
   array (
     'key' => 'field_15',
     'label' => 'Id typo3',
     'name' => 'id_typo3',
     'type' => 'text',
     'order_no' => 8,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       'value' => '',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'formatting' => 'html',
   ),
   4 =>
   array (
     'key' => 'field_17',
     'label' => 'Show in slider',
     'name' => 'show_in_slider',
     'type' => 'true_false',
     'order_no' => 10,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'field_17',
       'operator' => '==',
       'value' => 1,
       ),
     ),
     'allorany' => 'all',
     ),
     'message' => '',
   ),
   5 =>
   array (
     'key' => 'field_20',
     'label' => 'Programme',
     'name' => 'program',
     'type' => 'text',
     'order_no' => 0,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'formatting' => 'html',
   ),
   6 =>
   array (
     'key' => 'field_4',
     'label' => 'Id cycle',
     'name' => 'id_cycle',
     'type' => 'text',
     'order_no' => 8,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       'value' => '',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'formatting' => 'html',
   ),
   7 =>
   array (
     'key' => 'field_21',
     'label' => 'Id playlist',
     'name' => 'id_playlist',
     'type' => 'text',
     'order_no' => 8,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       'value' => '',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'formatting' => 'html',
   ),
   8 =>
    array (
        'key' => 'field_52f371094472a',
        'label' => 'image carrousel',
        'name' => 'image_carrousel',
        'type' => 'file',
        'instructions' => 'Sélectionnez l\'image qui sera affichée dans le carrousel',
        'save_format' => 'object',
        'library' => 'all',
      ),
   ),
   'location' =>
   array (
   'rules' =>
   array (
     0 =>
     array (
     'param' => 'post_type',
     'operator' => '==',
     'value' => 'event',
     'order_no' => 0,
     ),
   ),
   'allorany' => 'all',
   ),
   'options' =>
   array (
   'position' => 'normal',
   'layout' => 'no_box',
   'hide_on_screen' =>
   array (
   ),
   ),
   'menu_order' => 0,
 ));

 register_field_group(array (
   'id' => '5113f18f21bd2',
   'title' => 'text fields',
   'fields' =>
   array (
   0 =>
   array (
     'key' => 'field_18',
     'label' => 'Author',
     'name' => 'author',
     'type' => 'text',
     'order_no' => 0,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       'value' => '',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'formatting' => 'none',
   ),
   1 =>
   array (
     'key' => 'field_19',
     'label' => 'Function',
     'name' => 'function',
     'type' => 'text',
     'order_no' => 1,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       'value' => '',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'formatting' => 'none',
   ),
   ),
   'location' =>
   array (
   'rules' =>
   array (
     0 =>
     array (
     'param' => 'post_type',
     'operator' => '==',
     'value' => 'text',
     'order_no' => 0,
     ),
   ),
   'allorany' => 'all',
   ),
   'options' =>
   array (
   'position' => 'normal',
   'layout' => 'no_box',
   'hide_on_screen' =>
   array (
   ),
   ),
   'menu_order' => 0,
 ));
 register_field_group(array (
   'id' => '511aa075b80e7',
   'title' => 'ARTIST',
   'fields' =>
   array (
   0 =>
   array (
     'key' => 'field_1',
     'label' => 'Last name',
     'name' => 'last_name',
     'type' => 'text',
     'order_no' => 0,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       'value' => '',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'formatting' => 'none',
   ),
   1 =>
   array (
     'key' => 'field_2',
     'label' => 'First name',
     'name' => 'first_name',
     'type' => 'text',
     'order_no' => 1,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'formatting' => 'none',
   ),
   ),
   'location' =>
   array (
   'rules' =>
   array (
     0 =>
     array (
     'param' => 'post_type',
     'operator' => '==',
     'value' => 'artist',
     'order_no' => 0,
     ),
   ),
   'allorany' => 'all',
   ),
   'options' =>
   array (
   'position' => 'normal',
   'layout' => 'no_box',
   'hide_on_screen' =>
   array (
   ),
   ),
   'menu_order' => 0,
 ));
 register_field_group(array (
   'id' => '511aa075b8d10',
   'title' => 'VIDEO',
   'fields' =>
   array (
   0 =>
   array (
     'key' => 'field_3',
     'label' => 'Id medias.ircam.fr',
     'name' => 'media_id',
     'type' => 'text',
     'order_no' => 0,
     'instructions' => '',
     'required' => 0,
     'conditional_logic' =>
     array (
     'status' => 0,
     'rules' =>
     array (
       0 =>
       array (
       'field' => 'null',
       'operator' => '==',
       ),
     ),
     'allorany' => 'all',
     ),
     'default_value' => '',
     'formatting' => 'none',
   ),
   ),
   'location' =>
   array (
   'rules' =>
   array (
     0 =>
     array (
     'param' => 'post_type',
     'operator' => '==',
     'value' => 'video',
     'order_no' => 0,
     ),
   ),
   'allorany' => 'all',
   ),
   'options' =>
   array (
   'position' => 'normal',
   'layout' => 'no_box',
   'hide_on_screen' =>
   array (
   ),
   ),
   'menu_order' => 0,
 ));
}


/* nivo slider support */

// add nivo javascript
function theme_add_scripts() {
  wp_enqueue_script('jquery'); //omit if jQuery already included
  wp_enqueue_script('nivoslider', get_bloginfo('stylesheet_directory').'/js/nivo-slider/jquery.nivo.slider.pack.js');
  wp_enqueue_script('ircamslider', get_bloginfo('stylesheet_directory').'/js/slider.js');
  wp_enqueue_script('slidesjs', get_bloginfo('stylesheet_directory').'/js/jquery.slides.min.js');
}
add_action('init', 'theme_add_scripts');

// add nivo stylesheets
function theme_add_styles() {
  wp_enqueue_style('nivoslider', get_bloginfo('stylesheet_directory').'/js/nivo-slider/nivo-slider.css');
  wp_enqueue_style('nivoslider-custom', get_bloginfo('stylesheet_directory').'/js/nivo-slider/themes/default/default.css');
}
add_action('init', 'theme_add_styles');


/**
 * Connect to manifeste2014 Wordpress
 */
function connect_wp(){
  include('db_config.inc');
  $con_wp = mysql_connect($host_wp, $login_wp, $pwd_wp);
  $db_selected = mysql_select_db($db_name_wp, $con_wp);
}


/**
 * Connect to www.ircam.fr typo3
 */
function connect_typo3(){
  include('db_config.inc');
  $con_typo3 = mysql_connect($host_typo3, $login_typo3, $pwd_typo3);
  mysql_set_charset("utf8");
  $db_selected = mysql_select_db($db_name_typo3, $con_typo3);
}


/**
 * Add 00 minutes to hour if minutes are missing. For example : 14h to 14h00
 */
function format_time($str) {
	if ($str != ""){
		if (strlen(trim($str)) <= 3) {
			$s = trim($str)."00";
		} else $s = trim($str);
	}
	return $s;
}


/**
 * Get events in Json format from typo3
 */
function get_events_from_typo3($id_event_typo3){
	connect_typo3();

  $sql = "
  SELECT
  tx_ircam_events.uid,
  tx_ircam_events.pid,
  tx_ircam_events.tstamp,
  tx_ircam_events.crdate,
  tx_ircam_events.cruser_id,
  tx_ircam_events.deleted,
  tx_ircam_events.hidden,
  tx_ircam_events.title_fr,
  tx_ircam_events.title_en,
  tx_ircam_events.subtitle_fr,
  tx_ircam_events.subtitle_en,
  tx_ircam_events.dates,
  tx_ircam_events.parent_cycle,
  tx_ircam_events.time_place_fr,
  tx_ircam_events.time_place_en,
  tx_ircam_events.short_description_fr,
  tx_ircam_events.short_description_en,
  tx_ircam_events.long_description_fr,
  tx_ircam_events.long_description_en,
  tx_ircam_events.infos_fr,
  tx_ircam_events.infos_en,
  tx_ircam_events.sorting,
  tx_ircam_events.event_type,
  tx_ircam_events.duration,
  tx_ircam_events.off_calendar,
  tx_ircam_events.price1,
  tx_ircam_events.price2,
  tx_ircam_events.price3,
  tx_ircam_events.price4,
  tx_ircam_events.closed,
  tx_ircam_events.raw_code_fr,
  tx_ircam_events.raw_code_en,
  tx_ircam_events.billetterie_id,
  tx_ircam_events.on_pmi,
  tx_ircam_events.icono,
  tx_ircam_events.begin_hours,
  tx_ircam_events.begin_minutes,
  tx_ircam_events.end_hours,
  tx_ircam_events.end_minutes,
  tx_ircam_events.public,
  tx_ircam_events.level,
  tx_ircam_events_subtypes.uid as 'tx_ircam_events_subtypes.uid',
  tx_ircam_events_subtypes.pid as 'tx_ircam_events_subtypes.pid',
  tx_ircam_events_subtypes.tstamp as 'tx_ircam_events_subtypes.tstamp',
  tx_ircam_events_subtypes.crdate as 'tx_ircam_events_subtypes.crdate',
  tx_ircam_events_subtypes.cruser_id as 'tx_ircam_events_subtypes.cruser_id',
  tx_ircam_events_subtypes.sorting as 'tx_ircam_events_subtypes.sorting',
  tx_ircam_events_subtypes.deleted as 'tx_ircam_events_subtypes.deleted',
  tx_ircam_events_subtypes.title_fr as 'tx_ircam_events_subtypes.title_fr',
  tx_ircam_events_subtypes.title_en as 'tx_ircam_events_subtypes.title_en',
  tx_ircam_events_subtypes.parent_type as 'tx_ircam_events_subtypes.parent_type as',
  tx_ircam_cycles.uid as 'tx_ircam_cycles.uid',
  tx_ircam_cycles.pid as 'tx_ircam_cycles.pid',
  tx_ircam_cycles.tstamp as 'tx_ircam_cycles.tstamp',
  tx_ircam_cycles.crdate as 'tx_ircam_cycles.crdate',
  tx_ircam_cycles.cruser_id as 'tx_ircam_cycles.cruser_id',
  tx_ircam_cycles.deleted as 'tx_ircam_cycles.deleted',
  tx_ircam_cycles.hidden as 'tx_ircam_cycles.hidden',
  tx_ircam_cycles.title_fr as 'tx_ircam_cycles.title_fr',
  tx_ircam_cycles.subtitle_fr as 'tx_ircam_cycles.subtitle_fr',
  tx_ircam_cycles.time_place_fr as 'tx_ircam_cycles.time_place_fr',
  tx_ircam_cycles.short_description_fr as 'tx_ircam_cycles.short_description_fr',
  tx_ircam_cycles.long_description_fr as 'tx_ircam_cycles.long_description_fr',
  tx_ircam_cycles.infos_fr as 'tx_ircam_cycles.infos_fr',
  tx_ircam_cycles.title_en as 'tx_ircam_cycles.title_en',
  tx_ircam_cycles.subtitle_en as 'tx_ircam_cycles.subtitle_en',
  tx_ircam_cycles.time_place_en as 'tx_ircam_cycles.time_place_en',
  tx_ircam_cycles.short_description_en as 'tx_ircam_cycles.short_description_en',
  tx_ircam_cycles.long_description_en as 'tx_ircam_cycles.long_description_en',
  tx_ircam_cycles.infos_en as 'tx_ircam_cycles.infos_en',
  tx_ircam_cycles.sorting as 'tx_ircam_cycles.sorting'
  FROM tx_ircam_events
  LEFT JOIN tx_ircam_events_subtypes ON tx_ircam_events.event_type = tx_ircam_events_subtypes.uid
  LEFT JOIN tx_ircam_events_parent_cycle_mm ON tx_ircam_events.uid = tx_ircam_events_parent_cycle_mm.uid_local
  LEFT JOIN tx_ircam_cycles ON tx_ircam_events_parent_cycle_mm.uid_foreign = tx_ircam_cycles.uid
  WHERE tx_ircam_events.uid = ".$id_event_typo3."
  ";

  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

  $rows = array();
  while ($row = mysql_fetch_assoc($req)) {
     $rows[] = $row;
  }

  return json_encode($rows[0]);
}


/**
 * Get ID event in wp_posts from UID typo3
 */
function get_event_ID($uid, $locale){
  $sql_postid = "
  SELECT t1.meta_value, t2.language_code, t3.ID
  FROM wp_postmeta as t1, wp_icl_translations as t2, wp_posts as t3
  WHERE t1.post_id = t3.ID
  AND t1.post_id = t2.element_id
  AND post_type = 'event'
  AND post_status = 'publish'
  AND t1.meta_key = 'id_typo3' AND t1.meta_value = ".$uid." AND t2.language_code = '".$locale."'";
  $req_postid = mysql_query($sql_postid) or die('Erreur SQL !<br>'.$sql_postid.'<br>'.mysql_error());

  $rows_postid = array();
  while ($row_postid = mysql_fetch_assoc($req_postid)) {
     $rows_postid[] = $row_postid;
  }

  return $rows_postid[0]['ID'];
}


/**
 * Get ID cycle in wp_posts from UID typo3
 */
function get_cycle_ID($uid, $locale){
  $sql_postid = "
  SELECT t1.meta_value, t2.language_code, t3.ID
  FROM wp_postmeta as t1, wp_icl_translations as t2, wp_posts as t3
  WHERE t1.post_id = t3.ID
  AND t1.post_id = t2.element_id
  AND post_type = 'cycle'
  AND post_status = 'publish'
  AND t1.meta_key = 'id_cycle' AND t1.meta_value = ".$uid." AND t2.language_code = '".$locale."'";
  $req_postid = mysql_query($sql_postid) or die('Erreur SQL !<br>'.$sql_postid.'<br>'.mysql_error());

  $rows_postid = array();
  while ($row_postid = mysql_fetch_assoc($req_postid)) {
     $rows_postid[] = $row_postid;
  }

  return $rows_postid[0]['ID'];
}


/**
 * Creates a translation of a post (to be used with WPML)
 *
 * @param int $post_id The ID of the post to be translated.
 * @param array $post_content The post content of the post to be transaled with it 'post_type' key(ie. 'post', 'page', 'custom type', etc.).
 * @param string $lang The language of the translated post (ie 'fr', 'de', etc.).
 * @param array $event_data The envent data for eo event plugin
 * @return the translated post ID
 *  */
function mwm_wpml_translate_post_eo_insert( $post_id, $post_content, $lang, $event_data = null ){

  // Include WPML API
  include_once( WP_PLUGIN_DIR . '/sitepress-multilingual-cms/inc/wpml-api.php' );

  // Define title of translated post
  $post_translated_title = get_post( $post_id )->post_title . ' (' . $lang . ')';

  if (isset($event_data)) {
    // Insert translated post + EO Event
    $post_translated_id = eo_insert_event($post_content, $event_data);
  } else {
    // Insert translated post
    $post_translated_id = wp_insert_post( $post_content );
  }

  // Get trid of original post
  $trid = wpml_get_content_trid( 'post_'.$post_content['post_type'], $post_id );

  // Get default language
  $default_lang = wpml_get_default_language();

  // Associate original post and translated post
  global $wpdb;
  $wpdb->update( $wpdb->prefix.'icl_translations', array( 'trid' => $trid, 'language_code' => $lang, 'source_language_code' => $default_lang ), array( 'element_id' => $post_translated_id ) );

  // Return translated post ID
  return $post_translated_id;

}


/**
 * return a slug from a string
 */
function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

  // trim
  $text = trim($text, '-');

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  if (empty($text))
  {
    return 'n-a';
  }

  return $text;
}


function multiexplode($delimiters,$string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}


/**
 * Insert or Update events and cycles from typo3
 */
function wp_manage_event_cycle($id_event_typo3) {

	$json = get_events_from_typo3($id_event_typo3);

	connect_wp();

	// get params from json
	$objEvent = json_decode($json);
	$post_uid = $objEvent->{'uid'};
	$post_title_fr = $objEvent->{'title_fr'};
  $post_title_en = $objEvent->{'title_en'};
  $post_subtitle_fr = $objEvent->{'subtitle_fr'};
  $post_subtitle_en = $objEvent->{'subtitle_en'};
	$post_content_fr = $objEvent->{'long_description_fr'};
  $post_content_en = $objEvent->{'long_description_en'};
  $post_excerpt_fr = $objEvent->{'short_description_fr'};
  $post_excerpt_en = $objEvent->{'short_description_en'};
  $post_infos_fr = $objEvent->{'infos_fr'};
  $post_infos_en = $objEvent->{'infos_en'};
	$post_time_place_fr = $objEvent->{'time_place_fr'};
  $post_time_place_en = $objEvent->{'time_place_fr'};
  $post_date = $objEvent->{'dates'};
	$post_billetterie_id = $objEvent->{'billetterie_id'};
	$post_parent_cycle = $objEvent->{'parent_cycle'};
  $post_tx_ircam_cycles_uid = $objEvent->{'tx_ircam_cycles.uid'};
  $post_tx_ircam_cycles_title_fr = $objEvent->{'tx_ircam_cycles.title_fr'};
  $post_tx_ircam_cycles_long_description_fr = $objEvent->{'tx_ircam_cycles.long_description_fr'};
  $post_tx_ircam_cycles_title_en = $objEvent->{'tx_ircam_cycles.title_en'};
  $post_tx_ircam_cycles_long_description_en = $objEvent->{'tx_ircam_cycles.long_description_en'};

	// get time and place
	// time_place_fr
	// case 1 : 14h30 / Ircam, salle Igor-Stravinskys id_typo3 = 1217, 1214
	// case 2 : 19h30 et 22h / Ircam, Espace de projection id_typo3 = 1223
	// case 3 : 11h-12h / Collège de France, Amphithéâtre Halbwachs = 1218, 1247

	$time_place_fr = explode("/", $post_time_place_fr);
	$event_place = $time_place_fr[1];

	$time_place_fr[0] = str_replace("h", ":", $time_place_fr[0]);
	$time_duration = explode("-", $time_place_fr[0]);
  //$time = explode("et", $time_place_fr[0]);
  $time = multiexplode(array(',','et'),$time_place_fr[0]);  //cas 19h30, 20h30 et 15h

	if (sizeof($time)<=1){
		if (sizeof($time_duration)<=1){
			$event_time[] = format_time($time_place_fr[0]);	//cas 1
		} else {
			$event_time[] = format_time($time_duration[0]);} //cas 3
	} else {
		for ($i=0; $i<sizeof($time); $i++){
			$event_time[] = format_time($time[$i]);	//cas 2
		}
	}

	// get dates
	$event_date = explode(";", $post_date);

	for ($i=0; $i<sizeof(explode(";", $post_date)); $i++){
		for ($j=0; $j<sizeof($event_time); $j++){
			if ($i==0 && $j==0) {
				$firstDate[] = new DateTime(date("Y-m-d", strtotime($event_date[$i])).' '.$event_time[$j], eo_get_blog_timezone());
				if (format_time($time_duration[1])) {
					$end = new DateTime(date("Y-m-d", strtotime($event_date[$i])).' '.format_time($time_duration[1]), eo_get_blog_timezone());
			  } else $end = '';
      } else $otherDate[] = new DateTime(date("Y-m-d", strtotime($event_date[$i])).' '.$event_time[$j], eo_get_blog_timezone());
		}
	}

	//EVENT
  $post_data_fr = array(
    'post_title' => $post_title_fr,
    'post_content' => parse_img($post_content_fr),
    'post_excerpt' => $post_excerpt_fr,
    'post_type' => 'event',
    'post_status' => 'publish',
    'comment_status' => 'closed'
  );

  $post_data_en = array(
    'post_title' => $post_title_en,
    'post_content' => parse_img($post_content_en),
    'post_excerpt' => $post_excerpt_en,
    'post_type' => 'event',
    'post_status' => 'publish',
    'comment_status' => 'closed'
  );

  $event_data = array(
    'start'=> $firstDate[0],
    'end'=> $end,
    'frequency' => 0,
    'all_day' => 0,
    'schedule'=>'once',
    'include' => $otherDate
  );

  $venue = array(
    'name' => $event_place
  );

  // manage event FR
	if (get_event_ID($post_uid, 'fr')>0) {
    $event_id = eo_update_event(get_event_ID($post_uid, 'fr'), $event_data, $post_data_fr);
   	echo " update FR event_typo3 ".$post_title_fr;
  } else {
  	$event_id = eo_insert_event($post_data_fr, $event_data);
   	echo " insert FR event_typo3 ".$post_title_fr;
  }
  if ($event_id){
    update_post_meta($event_id, 'id_typo3', $post_uid);
    update_post_meta($event_id, 'id_cycle', $post_tx_ircam_cycles_uid);
    update_post_meta($event_id, 'id_billetterie', $post_billetterie_id);
    update_post_meta($event_id, 'pratical_info', $post_infos_fr);
    update_post_meta($event_id, 'subtitle', $post_subtitle_fr);
  }

  // manage event EN
  if (get_event_ID($post_uid, 'en')>0) {
    $event_translated_id = eo_update_event(get_event_ID($post_uid, 'en'), $event_data, $post_data_en);
    echo " update EN event_typo3 ".$post_title_en;
  } else {
    $event_translated_id = mwm_wpml_translate_post_eo_insert($event_id, $post_data_en, 'en', $event_data);
    echo " insert EN event_typo3 ".$post_title_en;
  }
  if ($event_translated_id){
    update_post_meta($event_translated_id, 'pratical_info', $post_infos_en);
    update_post_meta($event_translated_id, 'subtitle', $post_subtitle_en);
    update_post_meta($event_translated_id, 'id_typo3', $post_uid);
    update_post_meta($event_translated_id, 'id_cycle', $post_tx_ircam_cycles_uid);
    update_post_meta($event_translated_id, 'id_billetterie', $post_billetterie_id);
  }


  // LIEUX
  $v = eo_get_venue_by('slug', slugify($venue['name']));
  if( $v )
     $venue_id = (int) $v->term_id;

  //Maybe create a new venue
  if ( empty( $venue_id )){
    if ( !empty( $venue['name'] ) ){
      $new_venue = eo_insert_venue( $venue['name'], $venue );
      if ( !is_wp_error( $new_venue ) )
        $venue_id = $new_venue['term_id'];
    }
  }

  $r = wp_set_post_terms( get_event_ID($post_uid, 'fr'), array( $venue_id ), 'event-venue', false );
  $r = wp_set_post_terms( get_event_ID($post_uid, 'en'), array( $venue_id ), 'event-venue', false );


	// CYCLE
	if ($post_parent_cycle == 1){
		$post_cycle_fr = array(
			'post_title' => $post_tx_ircam_cycles_title_fr,
			'post_content' => $post_tx_ircam_cycles_long_description_fr,
			'post_type' => 'cycle',
			'post_status' => 'publish',
			'comment_status' => 'closed'
		);

    $post_cycle_en = array(
      'post_title' => $post_tx_ircam_cycles_title_en,
      'post_content' => $post_tx_ircam_cycles_long_description_en,
      'post_type' => 'cycle',
      'post_status' => 'publish',
      'comment_status' => 'closed'
    );

    // manage cycle FR
	  if (get_cycle_ID($post_tx_ircam_cycles_uid, 'fr')>0) {
			$cycle_id = wp_update_post($post_cycle_fr);
	  	echo " update FR cycle ".$post_tx_ircam_cycles_title_fr;
		} else {
	  	$cycle_id = wp_insert_post($post_cycle_fr);
	   	echo " insert FR cycle ".$post_tx_ircam_cycles_title_fr;
		}
    if ($cycle_id){
      update_post_meta($cycle_id, 'id_cycle', $post_tx_ircam_cycles_uid);
    }

    // manage cycle EN
    if (get_cycle_ID($post_tx_ircam_cycles_uid, 'en')>0) {
      $cycle_translated_id = wp_update_post($post_cycle_en);
      echo " update EN cycle ".$post_tx_ircam_cycles_title_en;
    } else {
      $cycle_translated_id = mwm_wpml_translate_post_eo_insert($cycle_id, $post_cycle_en, 'en');
      echo " insert EN cycle ".$post_tx_ircam_cycles_title_en;
    }
    if ($cycle_translated_id){
      update_post_meta($cycle_translated_id, 'id_cycle', $post_tx_ircam_cycles_uid);
    }
	}
}


/**
 * Create post types
 */
function create_post_type() {
	register_post_type( 'cycle',
		array(
			'labels' => array(
				'name' => __( 'Cycle' ),
				'singular_name' => __( 'Cycle' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'custom-fields')
		)
	);
  register_post_type( 'artist',
  array(
    'labels' => array(
    'name' => __( 'Artists' ),
    'singular_name' => __( 'Artist' )
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
  )
  );
  register_post_type( 'video',
  array(
    'labels' => array(
    'name' => __( 'Videos' ),
    'singular_name' => __( 'Video' )
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'excerpt', 'editor', 'thumbnail')
  )
  );
  register_post_type( 'text',
  array(
    'labels' => array(
    'name' => __( 'Texts' ),
    'singular_name' => __( 'Text' )
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'excerpt', 'editor', 'thumbnail')
  )
  );
  register_post_type( 'news',
  array(
    'labels' => array(
    'name' => __( 'Breaking News' ),
    'singular_name' => __( 'Breaking News' )
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail')
  )
  );
  register_taxonomy(
  'text_type',
  'text',
  array(
    'label' => __( 'Text type' ),
    'rewrite' => array( 'slug' => 'text_type'),
    'hierarchical' => true
  )
  );
  register_taxonomy(
  'video_type',
  'video',
  array(
    'label' => __( 'Video type' ),
    'rewrite' => array( 'slug' => 'video_type'),
    'hierarchical' => true
  )
  );
}
add_action( 'init', 'create_post_type' );


function add_links_menu() {
    add_menu_page('Script Import Test', 'Import Typo3', 'administrator', 'script-perso.php', '', 'images/marker.png', 50);
}
add_action( 'admin_menu', 'add_links_menu' );


/**
 * Create P2P connection
 */
function my_connection_types() {
	p2p_register_connection_type( array(
		'name' => 'events_to_cycles',
		'from' => 'event',
		'to' => 'cycle'
	) );
  p2p_register_connection_type( array(
    'name' => 'artists_to_events',
    'from' => 'artist',
    'to' => 'event'
  ) );
  p2p_register_connection_type( array(
    'name' => 'artists_to_videos',
    'from' => 'artist',
    'to' => 'video'
  ) );
  p2p_register_connection_type( array(
    'name' => 'artists_to_texts',
    'from' => 'artist',
    'to' => 'text'
  ) );
  p2p_register_connection_type( array(
    'name' => 'events_to_videos',
    'from' => 'event',
    'to' => 'video'
  ) );
  p2p_register_connection_type( array(
    'name' => 'events_to_texts',
    'from' => 'event',
    'to' => 'text'
  ) );
  p2p_register_connection_type( array(
    'name' => 'videos_to_texts',
    'from' => 'video',
    'to' => 'text'
  ) );
  p2p_register_connection_type( array(
    'name' => 'artists_to_artists',
    'from' => 'artist',
    'to' => 'artist',
    'reciprocal' => true
  ) );
  p2p_register_connection_type( array(
    'name' => 'videos_to_videos',
    'from' => 'video',
    'to' => 'video',
    'reciprocal' => true
  ) );
  p2p_register_connection_type( array(
    'name' => 'events_to_events',
    'from' => 'event',
    'to' => 'event',
    'reciprocal' => true
  ) );
  p2p_register_connection_type( array(
    'name' => 'texts_to_texts',
    'from' => 'text',
    'to' => 'text',
    'reciprocal' => true
  ) );
}
add_action( 'p2p_init', 'my_connection_types' );


/**
 * Parse Scoopit link
 */
function parse_scoopit_link($text) {
  $matches = array();
  $newtext = preg_match_all('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#', $text, $matches);

  $tab_link = $matches[0];
  $size = sizeof($tab_link)-1;
  $link = $tab_link[$size];
  $shortlink = explode("/", $link);
  $shortlink = $shortlink[2];

  return array($link, $shortlink);
}


/**
 * Scoopit
 */
function get_posts_from_scoopit($post_per_page){
  $args = array(
  'post_type' => 'post',
  'category_name' => 'Scoopit',
  'posts_per_page' => $post_per_page,
  );

  $loop = new WP_Query($args);
  echo "<ul>";
  while ( $loop->have_posts() ) : $loop->the_post();
    $linktab = parse_scoopit_link(get_the_content());

    $p = '<li><a class="web-revue" target="_blank" href="' . $linktab[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark"><i class="icon-play"></i> ';
    $p .= get_the_date('d.m.y') . ' - ' . get_the_title();
    $p .= ' - Source : ' . $linktab[1];
    $p .= "</a></li>";
    echo $p;

  endwhile;
  echo "</ul>";
}


/**
 * Ical
 */
function get_ical(){
  return "<a href=?export=ical>".__('Ajouter cet évènement à votre agenda Ical')."</a>";
}

function make_ical(){
  include_once("ical.php");

  //set correct content-type-header
  header('Content-type: text/calendar; charset=utf-8');
  header('Content-Disposition: inline; filename=calendar.ics');

  exit;
}


/**
 * Playlist Generale Portail Musique Contemporaine
 */
function get_playlist_pmc(){
  $playlist =
    "<div data-id='".$id."'>
    <embed id=\"playlist\" width=\"100%\" height=\"212\"
    flashvars=\"&file=".get_bloginfo( "stylesheet_directory")."/mp3/playlist.xml&backcolor=333333&frontcolor=ffffff&lightcolor=dd3333&playlist=top&dock=true&repeat=list&wmode=opaque&skin=http://playlists.ircam.fr/application/js/mediaplayer/stylish_slim.swf&autostart=none&stretching=none\"
    allowfullscreen=\"true\" allowscriptaccess=\"always\" quality=\"high\" name=\"playlist\" style=\"undefined\"
    src=\"http://playlists.ircam.fr/application/js/mediaplayer/player.swf\" type=\"application/x-shockwave-flash\"></div>
    <a class='lientwit' target=\"_blank\" href=\"http://www.musiquecontemporaine.fr\"><img src=\"http://www.ircam.fr//media/logos/mc2021.jpg\">&nbsp;Portail de la musique contemporaine</a>
    ";
  return $playlist;  
}
add_shortcode( 'playlist_pmc', 'get_playlist_pmc' );


/**
 * Playlist Event Portail Musique Contemporaine
 */
function get_playlist_event_pmc($postid){
  $media_id = get_post_meta($postid, 'id_playlist');
  if ($media_id[0]!="") {
    $id = $media_id[0];
    $playlist =
    "<div data-id='".$id."'>
    <embed id=\"playlist\" width=\"100%\" height=\"212\"
    flashvars=\"&file=http://playlists.ircam.fr/plFiles/playlist_". $id .".xml&backcolor=333333&frontcolor=ffffff&lightcolor=dd3333&playlist=top&dock=true&repeat=list&wmode=opaque&skin=http://playlists.ircam.fr/application/js/mediaplayer/stylish_slim.swf&autostart=none&stretching=none\"
    allowfullscreen=\"true\" allowscriptaccess=\"always\" quality=\"high\" name=\"playlist\" style=\"undefined\"
    src=\"http://playlists.ircam.fr/application/js/mediaplayer/player.swf\" type=\"application/x-shockwave-flash\"></div>
    <a class='lientwit' target=\"_blank\" href=\"http://www.musiquecontemporaine.fr\"><img src=\"http://www.ircam.fr//media/logos/mc2021.jpg\">&nbsp;Portail de la musique contemporaine</a>
    ";
  } 
  return $playlist;
}


/**
 * Playlist Generale
 * DEPRECATED : use playlist from Portail Musique Contemporaine instead
 */
function get_playlist($atts){
  extract( shortcode_atts( array(
    'ids' => array(),
  ), $atts ) );
  if (!empty($ids)){
    $tab_media = explode(',',$ids);
    $playlist = "<ol id='playlist'>";
    for ($i=0; $i < sizeof($tab_media); $i++) {
      $playlist .= "<li><label><span class='stop-btn'>■</span><span class='play-btn'>▶</span><input type='checkbox' /></label>".get_media_embed(trim($tab_media[$i]))."</li>";
    }
    $playlist .= "</ol>";
  }

  //temp pour design Fred
  //$playlist = temp_design_fred();

  return $playlist;
}
add_shortcode( 'playlist', 'get_playlist' );


/**
 * Playlist Event
 * DEPRECATED : use playlist from Portail Musique Contemporaine instead
 */
function get_playlist_event($postid){
  $media_id = get_post_meta($postid, 'id_playlist');
  if ($media_id[0]!="") {
    $playlist = "<ol id='playlist'>";
    $tab_media = explode(',' , $media_id[0]);
    for ($i=0; $i < sizeof($tab_media); $i++) {
      $playlist .= "<li><label><span class='stop-btn'>■</span><span class='play-btn'>▶</span><input type='checkbox' /></label>".get_media_embed(trim($tab_media[$i]))."</li>";
    }
    $playlist .= "</ol>";
  } else $playlist = __( 'pas de playslit disponible' );

  //temp pour design Fred
  //$playlist = temp_design_fred();

  return $playlist;
}


function temp_design_fred(){
  $playlist = "
<ol id='playlist'>
<li>
<label>
<span class='stop-btn' style='display: none;'>■</span>
<span class='play-btn' style='display: inline;'>▶</span>
<input type='checkbox' style='display: none;'>
</label>
<audio data-title='<i>Office des Ténèbres (Répons à six voix pour les Matines des trois Jours Saints)</i>, Carlo Gesualdo'>
<source type='audio/mp4' src='http://media.w3.org/2010/07/bunny/04-Death_Becomes_Fur.mp4'></source>
<source type='audio/ogg' src='http://media.w3.org/2010/07/bunny/04-Death_Becomes_Fur.oga'></source>
</audio>
</li>
<li>
<label>
<span class='stop-btn' style='display: none;'>■</span>
<span class='play-btn' style='display: inline;'>▶</span>
<input type='checkbox' style='display: none;'>
</label>
<audio data-title='<i>Te craindre en ton absence</i>, NDiaye Marie, Hèctor Parra'>
<source type='audio/mp4' src='http://media.w3.org/2010/07/bunny/04-Death_Becomes_Fur.mp4'></source>
<source type='audio/ogg' src='http://media.w3.org/2010/07/bunny/04-Death_Becomes_Fur.oga'></source>
</audio>
</li>
<li>
<label>
<span class='stop-btn' style='display: none;'>■</span>
<span class='play-btn' style='display: inline;'>▶</span>
<input type='checkbox' style='display: none;'>
</label>
<audio data-title='<i>Quatuor à cordes n° 1</i>, György Ligeti'>
<source type='audio/mp4' src='http://media.w3.org/2010/07/bunny/04-Death_Becomes_Fur.mp4'></source>
<source type='audio/ogg' src='http://media.w3.org/2010/07/bunny/04-Death_Becomes_Fur.oga'></source>
</audio>
</li>
</ol>
";
  return $playlist;
}


/**
 * Link Social Networks
 */
function get_social_network(){
  //https://twitter.com/ircam
  //https://www.facebook.com/iIRCAM
  return "<ul class='socialul'><a href='https://twitter.com/ircam'><li class='twitter'></li></a><a href='https://www.facebook.com/iIRCAM'><li class='facebook'></li></a></ul>";
}


/**
 * check if it's French locale
 */
function isFrench(){
  if (get_locale()=="fr_FR") return true;
}


/**
 * Get more post types (A decouvrir aussi)
 */
function get_more_posttype(){
      // Find connected pages
      $connected = new WP_Query( array(
        'post_type' => any,
        'connected_type' => array(
          'events_to_cycles',
          'artists_to_artists',
          'artists_to_videos',
          'artists_to_events',
          'videos_to_videos',
          'events_to_events',
          'texts_to_texts',
          'events_to_videos',
          'events_to_texts',
          'artists_to_texts',
          'videos_to_texts'
        ),
        'connected_items' => get_queried_object(),
        'nopaging' => true,
      ) );

      // Display connected pages
      if ( $connected->have_posts() ) :
        while ( $connected->have_posts() ) : $connected->the_post();

        $date_format = 'j F ';
        $upcoming = new WP_Query(array(
          'post_type'=>'event',
          'posts_per_page' => -1,
          'event_series' => get_the_ID(),
          'group_events_by'=>'occurrence'//Don't group by series
        ));

        while( $upcoming->have_posts() ): $upcoming->the_post();
          $date = eo_get_the_start($date_format);
        endwhile;

          $link[] = array(
            'permalink' => get_permalink(),
            'title' => get_the_title(),
            'post_type' => get_post_type(),
            'id' => get_the_ID(),
            'date' => $date
          );
        endwhile;

        wp_reset_postdata();

      endif;

      return $link;
}


/**
 *
 */
function twentytwelve_entry_meta() {

  $id = get_the_ID();

  if(ICL_LANGUAGE_CODE=='fr'){
    $locale = 'fr_FR';
  }else{
    $locale = 'en_GB';
  }


  $social = '
  <div class="socialsingle">
  <div class="social-single">
  <div id="twitterbutton">
  <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><div>
  <a href="http://twitter.com/share" class="twitter-share-button" data-url="'.get_permalink().'" data-counturl="'.get_permalink().'" data-text="'.get_the_title().'" data-via="ircam" data-related="ircam">Tweet</a>
  </div>
  </div>

  <div id="likebutton" style="height:20px;">
  <iframe src="http://www.facebook.com/plugins/like.php?locale='.$locale.'&amp;href='.rawurlencode(get_permalink()).'&amp;layout=button_count&amp;show-faces=true&amp;width=450&amp;action=recommend&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" id="facebook-like"></iframe>
  </div>

  <div id="mailto" class="btn btn-default btn-mini" role="button">
  <a href="mailto:destinaire?subject=Manifeste2013&body='.get_permalink().'"> '.__( 'Partager par mail' ).'</a>
  </div>

  <div id="print" class="btn btn-default btn-mini" role="button">
  <a href="#" onClick="window.print()"> '.__( 'Imprimer' ).'</a>
  </div>
  </div>

  </div>';

  $linked_contents = get_more_posttype();
  $linked_contents_text = '';

  $i = 0;

  $linked_contents_text = '<div id=decouvrir>';
  if (count($linked_contents)>0){
    echo "<ul>";
    foreach ($linked_contents as $linked_content) {
      if ($linked_content['post_type'] == 'artist') {
        $icon = 'icon-camera';
      } else if ($linked_content['post_type'] == 'page') {
        $icon = 'icon-book';
      } else if ($linked_content['post_type'] == 'event') {
        $icon = 'icon-calendar';
      } else if ($linked_content['post_type'] == 'post') {
        $icon = 'icon-book';
      } else if ($linked_content['post_type'] == 'video') {
        $icon = 'icon-play-circle';
      } else if ($linked_content['post_type'] == 'text') {
        $icon = 'icon-bullhorn';
        $text_type = wp_get_post_terms( $linked_content['id'], 'text_type');
      }

      if($linked_content['post_type'] == 'event'){
      	$date_format = __('j F, H\hi');
        $occurrences = eo_get_the_occurrences_of( $linked_content['id'] );
        $t = sizeof($occurrences);
        $i = 0;
        $start = "";
        foreach( $occurrences as $occurrence) {
          $i++;
          $start .= remove_minute(eo_format_datetime( $occurrence['start'] , $date_format ));
          if ($i<$t) $start .= " | ";
        }
        $linked_contents_text .= '<li class='.$linked_content['post_type'].'><a href="'.$linked_content['permalink'].'">'.'<i class="'.$icon.' icon-verylarge"></i>'.$linked_content['title'].'</a><div class="date_start">'.$start.'</div></li>';
      }
      else if($linked_content['post_type'] == 'text'){
        $linked_contents_text .= '<li class='.$linked_content['post_type'].'><a href="'.$linked_content['permalink'].'">'.$linked_content['title'].'</a><div class="date_start">&nbsp;</div></li>';
      }
      else{
        $linked_contents_text .= '<li class='.$linked_content['post_type'].'><a href="'.$linked_content['permalink'].'">'.$linked_content['title'].'</a><div class="date_start">&nbsp;</div></li>';
      }
      $i++;
    }
    echo "</ul>";
  }
  $linked_contents_text .= '</div>';


  $count = sizeof($linked_contents);
  if ($count!=0) {

    if ( $linked_contents_text != ''){
      $linked_contents_text = '<div><h3 class="contenttit">'.__('À découvrir aussi').'</h3>'.$linked_contents_text.'</div>';
    }

  }

  echo $social.$linked_contents_text;

}


/**
 * Put Json Instagram stream in file instagram.json
 */
function sync_instagram(){
  include("config.inc");
  $raw_response = wp_remote_get($url_instagram);

  if ( is_wp_error($raw_response) ) {
    $output = "<p>Failed to update from Instagram!</p>\n";
  } else {
    $output = "<p>Sync Instagram OK</p>\n";
    file_put_contents($file_instagram, $raw_response['body']);
  }
  return $output;
}


/**
 * Get Instagram stream from file instagram.json
 */
function get_instagram(){
  include("config.inc");
  $json_body = @file_get_contents($file_instagram);
  if($json_body === FALSE) {
    $instagram = array();
  } else {
    if ( function_exists('json_decode') ) {
      $response = @get_object_vars(json_decode($json_body));
      $instagram = array();
      for ( $i=0; $i < count($response['data']); $i++ ) {
        $response['data'][$i] = get_object_vars($response['data'][$i]);
        array_push($instagram, array(
          'title' => $response['data'][$i]['caption']->text,
          'thumbnail' => $response['data'][$i]['images']->thumbnail->url,
          'standard_resolution' => $response['data'][$i]['images']->standard_resolution->url,
          'low_resolution' => $response['data'][$i]['images']->low_resolution->url,
          'link' => $response['data'][$i]['link'],
          'date' => $response['data'][$i]['created_time'],
          'username' => $response['data'][$i]['caption']->from->username,
        ));
      }
    } else {
      include(ABSPATH . WPINC . '/js/tinymce/plugins/spellchecker/classes/utils/JSON.php');
      $json = new Moxiecode_JSON();
      $response = @$json->decode($json_body);
    }
  }

  return $instagram;
}


/**
 * Put Json Twitter stream in file twitter.json
 */
function sync_twitter(){
  include("config.inc");
  $raw_response = new TwitterAPIExchange($settings_twitter);
  $request_twitter = $raw_response->setGetfield($getfield_twitter)
               ->buildOauth($url_twitter, 'GET')
               ->performRequest();

  file_put_contents($file_twitter, $request_twitter);
}


/**
 * Get Twitter stream from file twitter.json
 */
function get_twitter(){
  include("config.inc");
  $json_body = @file_get_contents($file_twitter);
  if($json_body === FALSE) {
    $twitter = array();
  } else {
    if ( function_exists('json_decode') ) {
      $response = @get_object_vars(json_decode($json_body));
      $twitter = array();
      for ( $i=0; $i < count($response['statuses']); $i++ ) {
        $response['statuses'][$i] = get_object_vars($response['statuses'][$i]);
        array_push($twitter, array(
          'text' => $response['statuses'][$i]['text'],
          'username' => $response['statuses'][$i]['user']->name,
          'url' => "https://twitter.com/".$response['statuses'][$i]['user']->screen_name."/status/".$response['statuses'][$i]['id'],
          'date' => $response['statuses'][$i]['created_at']
        ));
      }
    } else {
      include(ABSPATH . WPINC . '/js/tinymce/plugins/spellchecker/classes/utils/JSON.php');
      $json = new Moxiecode_JSON();
      $response = @$json->decode($json_body);
    }
  }

  return $twitter;
}


/**
 * Put Json Facebook stream in file facebook.json
 */
function sync_facebook(){
  include("config.inc");
  $raw_response = wp_remote_get($url_facebook);

  if ( is_wp_error($raw_response) ) {
    $output = "<p>Failed to update from Facebook!</p>\n";
  } else {
    $output = "<p>Sync Facebook OK</p>\n";
    file_put_contents($file_facebook, $raw_response['body']);
  }
  return $output;
}


/**
 * Get Facebook stream from file facebook.json
 */
function get_facebook(){
  include("config.inc");
  $json_body = file_get_contents($file_facebook);

    if ( function_exists('json_decode') ) {
      $response = @get_object_vars(json_decode($json_body));
      $facebook = array();
      for ( $i=0; $i < count($response['data']); $i++ ) {
        $response['data'][$i] = get_object_vars($response['data'][$i]);
        array_push($facebook, array(
          'author' => $response['data'][$i]['from']->name,
          'message' => $response['data'][$i]['message'],
          'link' => $response['data'][$i]['link'],
          'date' => $response['data'][$i]['created_time'],
          'caption' => $response['data'][$i]['caption'],
          'type' => $response['data'][$i]['type']
        ));
      }
    } else {
      include(ABSPATH . WPINC . '/js/tinymce/plugins/spellchecker/classes/utils/JSON.php');
      $json = new Moxiecode_JSON();
      $response = @$json->decode($json_body);
    }

  return $facebook;
}


/**
 * Synchronize social network with param ?sync=ok in url
 */
function sync_social_network(){
  if ($_GET['sync']=="ok"){
    sync_instagram();
    sync_twitter();
    sync_facebook();
  }
}


/**
 * Social Networks
 */
function get_social_network_stream($atts){
  extract( shortcode_atts( array(
    'display' => array(),
  ), $atts ) );

  if (!empty($display)) {
    $view = array_map('trim', explode(',',$display));

    $social = '';

    if (in_array('twitter', $view)){
      $twitter = get_twitter();
      $nb_twitt = 3;
      if (!empty($twitter)){
      $social .= "<h4 id=twitter></h4>";
        for ($i=0; $i < $nb_twitt; $i++) {
          if (!empty($twitter[$i])){
            $date = date(__('d-m H:i'), strtotime($twitter[$i]["date"]));
            $social .= "<div>";
            $social .=  "<span class='date'>".$date."&nbsp;".$twitter[$i]["username"]."</span>";
            $social .=  "<a target=_blank class='lientwit' href=".$twitter[$i]["url"].">".$twitter[$i]["text"]."</a>";
            $social .=  "</div>";
          }
        }
      }
    }

    if (in_array('facebook', $view)){
      $facebook = get_facebook();
      $nb_fb = 3;
      if (!empty($facebook)){
      $social .=  "<h4 id=facebook></h4>";
        for ($i=0; $i < $nb_fb; $i++) {
          if (!empty($facebook[$i])){
            $date = date(__('d-m'), strtotime($facebook[$i]["date"]));
            $social .=  "<div>";
            $social .=  "<span class='date'>".$date." ".$facebook[$i]["author"]."<span>";
            if ($facebook[$i]["link"]!="")
              $social .=  "<a target=_blank class='lientwit' href=".$facebook[$i]["link"].">".$facebook[$i]["message"]."</a>";
            else $social .=  "<br/><span style='font-size:12px'>".$facebook[$i]["message"]."</span>";
            $social .=  "</div>";
          }
        }
      }
    }

    if (in_array('instagram', $view)){
      $instagram = get_instagram();
      $nb_pic = 1;
      if (!empty($instagram)){
      $social .=  "<h4 id=instagram></h4>";
        for ($i=0; $i < $nb_pic; $i++) {
          if (!empty($instagram[$i])){
            $date = date(__('d-m H:i'), $instagram[$i]["date"]);
            $social .=  "<div>";
            $social .=  "<span class='date'>".$date."</span>";
            $social .=  "<div style='margin:5px 0 5px 0;'>";
            $social .=  "<a target=_blank href=".$instagram[$i]["link"]."><img src=".$instagram[$i]["low_resolution"]."></a>";
            $social .=  "</div>";
            $social .=  "<a class='lientwit' href='".get_permalink( 594 )."?lang=".$_GET['lang']."'>".__('voir la galerie #manifeste14')."</a>";
            $social .=  "</div>";
          }
        }
      }
    }
  }

  return $social;
}

add_shortcode( 'social', 'get_social_network_stream' );



/**
 * Display Instagram
 */
function display_instagram(){
  $instagram = get_instagram();
  $nb_pic = 100;
  for ($i=0; $i < $nb_pic; $i++) {
    $date = date('Y-m-d H:i:s', $instagram[$i]["date"]);
    if (isset($instagram[$i])){
      ?>
      <div class="thumb">
      <div class="view view-first">
      <img src="<?php echo $instagram[$i]["low_resolution"] ?>" width=200 height=200>
      <a target="_blank" href="<?php echo $instagram[$i]["link"] ?>" rel="bookmark"><div class="mask">
      <h2><?php echo $instagram[$i]["username"]; ?></h2>
      </div></a>
      </div>
      </div>
      <?php

      //echo "<a target=_blank href=".$instagram[$i]["link"]."><img src=".$instagram[$i]["thumbnail"]."></a>";
    }
  }
}


/**
 * media video or audio by id from medias.ircam.fr
 */
function get_media_embed($id_media){
    $url = "http://medias.ircam.fr/embed/media/".$id_media;
    $raw_response = wp_remote_get($url);
    return $raw_response['body'];
    //return str_replace("/stream", "http://medias.ircam.fr/stream", $raw_response['body']);//on ajoute le chemin complet de medias.ircam.fr
}


function parse_img($text){

  $img1 = str_replace('src="uploads/', 'src="http://www.ircam.fr/uploads/', $text);
  $newtext = str_replace('src="fileadmin/sites/manifeste-2014/', 'src="http://www.ircam.fr/fileadmin/sites/manifeste-2014/', $img1);

  return $newtext;
}


function parse_pdf_link($text) {
  $matches = array();
  $newtext = preg_match_all('/\bfileadmin\/sites\/(.*)\.pdf\b/', $text, $matches);

  if ($matches[0][0]!="")
    $link_pdf = $matches[0][0];

  return $link_pdf;
}


/*-------------------------------------- WPML CUSTOM -------------------------------------- */
function language_selector_flags(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo '<div class="itemlang'.$l['language_code'].'"><img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" /></div>';
            if(!$l['active']) echo '</a>';
        }
    }
}


/**
 * Hook get_search_form action
 */
function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div>
    <input type="text" placeholder="'. esc_attr__( 'Search' ) .'" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );


/**
 * Limit excerpt to 20 car
 */
function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/**
 * hide widget texts social networks and playslist general in in event detail
 */
add_filter('sidebars_widgets', 'hidemywidget');
function hidemywidget($all_widgets)
{
  if(is_single() && get_post_type() == "event")
  {
    foreach ($all_widgets['sidebar-1'] as $i => $inst)
    {
      //check if the id for the texts widgets exists.
      $pos = strpos($inst, 'text');

      if($pos !== false)
      {
          //remove the texts widget by unsetting it's id
          unset($all_widgets['sidebar-1'][$i]);
      }
    }
  }

  return $all_widgets;
}


add_action('init', 'myStartSession', 1);
function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}

function save_idcaddy(){
  // on enregistre la valeur du caddy en session
  if (isset($_GET['idcaddy'])) {
    $_SESSION['idcaddy'] = $_GET['idcaddy'];
    $idcaddy = $_GET['idcaddy'];
    //var_dump($_SESSION['idcaddy']);
  } else if (isset($_SESSION['idcaddy'])) {
      $idcaddy = $_SESSION['idcaddy'];
  } else {
    $_SESSION['idcaddy'] = "";
    $idcaddy = "";
  }
  return $idcaddy;
}


function display_link_billeterie($id_billetterie, $locale){
  if ($locale == 'fr') $lg = "LNG1";
  else if  ($locale == 'en') $lg = "LNG2";
  else $lg = "LNG1";

  $idcaddy = save_idcaddy();

  if ($id_billetterie!='')
  	//lien direct vers une date d'un évènement
    $url = "http://www.ircam.fr/b2b.html?ttarget=%2F4DCGI%2FIDCADDY".$idcaddy."REC0094000".$id_billetterie.$lg;
  else $url = "";

  return $url;
}


function remove_minute($time){
  $s = explode('h', $time);
  if ($s[1] == "00") $new_time = $s[0]."h";
  else $new_time = $time;

  return $new_time;
}


function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "Ce contenu est protégé, entrez votre mot de passe:" ) . '
    <label for="' . $label . '">' . __( "Mot de passe:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );


//IMAGE SIZE
add_theme_support( 'post-thumbnails' );
add_image_size( 'image-miniature', 200, 200, true );
add_image_size( 'image-rectangle', 260, 190, true );
add_image_size( 'image-video', 195, 133, true );
add_image_size( 'image-programme', 175, 175, true );


// override twentytwelve's navigation.js
add_action( 'wp_print_scripts', 'de_script', 100 );

function de_script() {
    wp_dequeue_script( 'twentytwelve-navigation' );
    wp_enqueue_script( 'manifeste-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array(), '1.0', true );
}


function change_mce_options($initArray) {
  $initArray['remove_redundant_brs'] = false;
  $initArray['remove_linebreaks'] = false;
  $initArray['force_p_newlines'] = false;
  $initArray['force_br_newlines'] = false;

  $initArray['entities'] = '160,nbsp,38,amp,60,lt,62,gt';

  return $initArray;
}
add_filter('tiny_mce_before_init', 'change_mce_options');


// menu highlights for custom post_type
// from http://wordpress.stackexchange.com/questions/3014/highlighting-wp-nav-menu-ancestor-class-w-o-children-in-nav-structure/3034#3034
add_filter('nav_menu_css_class', 'current_type_nav_class', 10, 2 );
function current_type_nav_class($classes, $item) {
  $post_type = get_query_var('post_type');

  if ($item->attr_title != '' && $item->attr_title == $post_type) {
    array_push($classes, 'current-menu-item');
  };

  //portes_ouvertes est un evenement de programme. on enleve la surbrillance du parent (programme)
  $tab = array('portes-ouvertes-2','open-house');
  if ($post_type == 'event' && in_array(get_query_var('name'), $tab)) {
    array_pop($classes);
  };

  return $classes;
}


add_action( 'wp', 'prefix_setup_schedule' );
/**
 * On an early action hook, check if the hook is scheduled - if not, schedule it.
 */
function prefix_setup_schedule() {
  if ( ! wp_next_scheduled( 'prefix_hourly_event' ) ) {
    wp_schedule_event( time(), 'hourly', 'prefix_hourly_event');
  }
}


add_action( 'prefix_hourly_event', 'prefix_do_this_hourly' );
/**
 * On the scheduled action hook, run a function.
 */
function prefix_do_this_hourly() {
  // do something every hour
    sync_instagram();
    sync_twitter();
    sync_facebook();
}


function display_post_type(){
  $pt = get_post_type( $post );
  if ($pt == 'artist') {
    $type = __('artiste');
  } else if ($pt == 'page') {
    $type = __('page');
  } else if ($pt == 'event') {
    $type = __('evènement');
  } else if ($pt == 'post') {
    $type = __('article');
  } else if ($pt == 'video') {
    $type = __('vidéo');
  } else if ($pt == 'text') {
    $type = __('tribune');
  } 
  echo ucfirst($type);
}


