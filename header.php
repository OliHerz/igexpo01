<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
<!-- wp_head(); permet d'insérer toutes les informations à mettre en entête -->
    <?php wp_head(); ?> 
  </head>
  <body>

  <header class="header">

<!---------------------------------- Navbar --------------------------------------->
  <nav class="menu">
    <a href="#" class="navLogo">
    <?php if(has_custom_logo()) : ?>
    <?php the_custom_logo(); ?>
    <?php else : ?>
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    <?php endif; ?>
      <!-- <img src="../img/logo.svg" alt="Logo IG EXPO"  class = "logoIGexpo"> -->
    </a>


    <!---------------------------------- Toggle Nav For MediaQuerys --------------------------------------->
    <button class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <!---------------------------------- FIN Toggle Nav For MediaQuerys --------------------------------------->

    <!---------------------------------- Liste of Menu --------------------------------------->
    <ul class="navBar">
      <li class="navItem"> <a href="/html/index.html" class="navLink"> Présentation </a> </li>
      <li class="navItem"> <a href="#" class="navLink">Fonctionnement</a> </li>
      <li class="navItem"> <a href="#" class="navLink">Configurateur</a> </li>
      <li class="navItem"> <a href="#" class="navLink">Contact</a> </li>
    </ul>
    <!---------------------------------- FIN Liste of Menu  --------------------------------------->

    <div class="containerIcon"> 
      <img src="<?php echo get_theme_file_uri('/img/icon_connect.svg') ?>" alt="Logo utilisateur" class="userIcon"> 
    </div>
  </nav>
<!---------------------------------- FIN Navbar --------------------------------------->
  </header>
  <main>