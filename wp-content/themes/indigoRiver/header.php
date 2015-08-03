<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/stylesheet.css" />

<script src="//use.typekit.net/ozh5zle.js"></script>


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
