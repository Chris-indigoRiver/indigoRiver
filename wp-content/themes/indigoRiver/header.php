<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/animate.css" />


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="//use.typekit.net/ozh5zle.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/plugin.js"></script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
