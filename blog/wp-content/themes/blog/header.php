<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/foutreboxon.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/masonry.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
  	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" type="text/css" media="print" />
    <?php wp_head(); ?>
  </head>
  <body>
    <?php
      // Debug
      ini_set('display_startup_errors', '1');
      ini_set('display_errors','1');
      ini_set('max_execution_time', 10000);
    ?>
    <div class="wrap">
