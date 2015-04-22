<?php
//Hashtags
$hashtag_facebook = 'manifeste14';
$hashtag_instagram = 'manifeste14';
$hashtag_twitter = 'manifeste14';

//Settings
//$facebook_token = "CAACEdEose0cBACHZBMzEJonKFYDO9yBiCvwPLZAtiSMqityhJD69nRq3nFLFEdKZAPbVJdyRbsa1SwYeO2IwJ3TRSnqL6VDICfJdET8fMsjfY8ZCuYHmhLtRWgKNqqnDtrbfwCZB5H7RwaF7Hh2HH2spklwuJoFyssTI1oFisxwJ9M3fZBfk3eNDXxIbx0PGUZD";
$facebook_token = "1505418956352433|0bdd8076ee738ed89ea3762fa8a620d6";
$instagram_token = "1145050122.6556ee2.d2a230691c474ed6bd58e05f628060e4";
$settings_twitter = array(
'oauth_access_token' => "1512993866-lYwdChixxYnYZTEV8E1MMdXB4Fbb7gAAvFIzQrD",
'oauth_access_token_secret' => "bDKZ4TsusBwztN9Cv2JbUv1sVMOsZMOvYiTYxas8z28",
'consumer_key' => "PxhUmsfq6LiIk4bW6xTA",
'consumer_secret' => "2s3UNGNfX1WxD3LoOwHhANEISlutImBlS6eV0IW4"
);

//Url
//$url_facebook = "https://graph.facebook.com/".$hashtag_facebook."/feed?access_token=".$facebook_token;
//modify way to access facebook api => check https://developers.facebook.com/docs/facebook-login/access-tokens/
//$url_facebook = "https://graph.facebook.com/".$hashtag_facebook."/feed?access_token=".$facebook_token;
$url_facebook = "https://graph.facebook.com/search?q=%23".$hashtag_facebook."&type=post&access_token=".$facebook_token;
$url_instagram = "https://api.instagram.com/v1/tags/".$hashtag_instagram."/media/recent?access_token=".$instagram_token;

//$url_twitter = 'https://api.twitter.com/1.1/search/tweets.json';
$url_twitter = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield_twitter = '?q=%23'.$hashtag_twitter.'%20-RT&result_type=recent';

//Json files
$file_facebook = 'wp-content/themes/manifeste2014_twentytwelve/facebook.json';
$file_instagram = 'wp-content/themes/manifeste2014_twentytwelve/instagram.json';
$file_twitter = 'wp-content/themes/manifeste2014_twentytwelve/twitter.json';


?>