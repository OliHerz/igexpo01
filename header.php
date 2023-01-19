<!DOCTYPE html>
<html>
<!-- language_attribute permet au site internet de s'addapter la langue des textes en fonction de l'utilisateur -->
  <head <?php language_attributes(); ?>>
<!-- 'charset' permet de dire au navigateur quel type de lettre, caractères et chiffre utiliser pour le site -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
<!-- ce meta permettre à wordpress d'utiliser ses propres dimensions pour les media querry --> 
    <meta name="viewport" content="width=device-width, initial-scale = 1">
<!-- wp_head(); permet d'insérer toutes les informations à mettre en entête -->
    <?php wp_head(); ?> 
  </head>

<!-- body_class() permet de donner différentes information sur la page en cours, et attribue à chaque page différentes pages  -->
  <body <?php body_class() ?>>
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

<!---------------------------------- Liste of Menu --------------------------------------->
      <div class="menuEnd">
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'walker',
            'container' => 'menu',
            'menu_class' => 'navBar',
          ))
          ?>
          
        <!-- faire un <a>et ajouter cet icon à l'intérieur https://fontawesome.com/v4/icon/user , donc utiliser font-awesome -->
        <button class="containerIcon"> 
          <i class="fa fa-user" aria-hidden="true" class="userIcon"></i>
          <!-- champ ACF + Mettre l'image l'image dans un tableau + Pour l'afficher  -->
        </button>
    </div>
  </div>
<!---------------------------------- FIN Navbar --------------------------------------->


<section class = "landing">
  <img src="<?php echo get_theme_file_uri('./img/backgroundHeader.jpg') ?>" alt="">
  <div class="containerHeader"></div>
    <span class="excerptHeader"> Créez et réservez votre <span class="boldGreen"> 
    stand en bois </span> avec notre configurateur </span>
  </div>
</section>

  </header>
  <main>