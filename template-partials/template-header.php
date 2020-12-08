<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('template_title'); ?> -<?php wp_title(''); ?></title>
    <meta name="description" content="<?php bloginfo("description"); ?>" />

    <!-- css files-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/css/main.css">

    <!-- js files -->
    <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/src/js/main.js"></script>
    <?php wp_head(); ?>
</head>

<body>