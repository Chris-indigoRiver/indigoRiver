<?php
$ip=$_SERVER['REMOTE_ADDR']; 
if ($ip == "92.19.214.0" || $ip == '::1') { 

} else { 
	header('Location: http://www.indigo-river.com');
} 
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->
<meta name="viewport" content="width=device-width, initial-scale=0.9, minimum-scale=0.9, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<title><?php wp_title( ' | ', true, 'right' ); ?></title>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/center/jquery.blImageCenter.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/headline_js/main.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.vibe.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/peach_responsive_video.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/plugin.js"></script>
<script src="//use.typekit.net/ozh5zle.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script src="//use.typekit.net/fge5ldw.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/headline_css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/headline_css/reset.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/animate.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/jquery.bxslider.css" />



<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>