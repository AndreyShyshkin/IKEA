<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv='X-UA-Compatible' content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<?php the_custom_logo(); ?>
<?php get_search_form(); ?>
<?php
wp_nav_menu([
  'theme_location' => 'services-header',
  'container' => 'nav',
  'container_class' => 'main-navigation',
  'menu_class' => 'main-navigation__list',
  'items_wrap' => '<ul class="%2$s">%3$s</ul>'
]);
?>
<?php
wp_nav_menu([
  'theme_location' => 'menu-header',
  'container' => 'nav',
  'container_class' => 'main-navigation',
  'menu_class' => 'main-navigation__list',
  'items_wrap' => '<ul class="%2$s">%3$s</ul>'
]);
?>

<body>
  <header>
  </header>