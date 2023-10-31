<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv='X-UA-Compatible' content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <header>
      <div class="header__container">
        <?php the_custom_logo(); ?>
        <?php get_search_form(); ?>
        <?php
        wp_nav_menu([
          'theme_location' => 'services-header',
          'container' => 'nav',
          'container_class' => 'services-navigation',
          'menu_class' => 'services-navigation__list',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>'
        ]);
        ?>
      </div>
      <?php
      wp_nav_menu([
        'theme_location' => 'menu-header',
        'container' => 'nav',
        'container_class' => 'header-navigation',
        'menu_class' => 'header-navigation__list',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>'
      ]);
      ?>
    </header>