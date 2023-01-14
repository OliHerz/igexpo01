<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
<!-- wp_head(); permet d'insérer toutes les informations à mettre en entête -->
    <?php wp_head(); ?> 
  </head>
  <body <?php body_class(); ?>>

    <div class="container">
      <header>
      <?php
          wp_nav_menu( array('theme_location' => 'Menu en tête',) );
        ?>
        <h2><?php bloginfo('description'); ?></h2>
        <h6>Voici l'entête de mon site </h6>
        <br>