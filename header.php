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

  <header>

<!---------------------------------- Navbar --------------------------------------->
  <div class="menu">
    <div class="menuStart>
      <?php if(has_custom_logo()) : ?>
      <?php the_custom_logo(); ?>
      <?php else : ?>
      <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      <?php endif; ?>
        <!-- <img src="../img/logo.svg" alt="Logo IG EXPO"  class = "logoIGexpo"> -->
      </a>
    </div>


    <!---------------------------------- Toggle Nav For MediaQuerys --------------------------------------->
    <button class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <!---------------------------------- FIN Toggle Nav For MediaQuerys --------------------------------------->

    <!---------------------------------- Liste of Menu --------------------------------------->
      <div class="menuEnd">
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'walker',
            'container' => 'menu',
            'menu_class' => 'navBar',
          ))
          ?>
          <!-- <li class="navItem"> <a href="/html/index.html" class="navLink"> Présentation </a> </li>
          <li class="navItem"> <a href="#" class="navLink">Fonctionnement</a> </li>
          <li class="navItem"> <a href="#" class="navLink">Configurateur</a> </li>
          <li class="navItem"> <a href="#" class="navLink">Contact</a> </li> -->
        <!---------------------------------- FIN Liste of Menu  --------------------------------------->

        <!-- faire un <a>et ajouter cet icon à l'intérieur https://fontawesome.com/v4/icon/user , donc utiliser font-awesome -->
        <button class="containerIcon"> 
          <img src="<?php echo get_theme_file_uri('/img/icon_connect.svg') ?>" alt="Logo utilisateur" class="userIcon"> 
        </button>
    </div>
  </div>
<!---------------------------------- FIN Navbar --------------------------------------->
  </header>
  <main>