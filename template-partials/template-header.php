<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('template_title'); ?> -<?php wp_title(''); ?></title>
    <meta name="description" content="<?php bloginfo("description"); ?>" />

    <!-- css files-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/src/css/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/src/css/slick/slick-theme.css"/>
    <!-- js files -->
    
    <?php wp_head(); ?>
</head>

<body>