<?php get_header(); ?>

<!-- Code d'Elodie  -->

<section class="presentation">
    <img src="../img/bande_present.svg" alt="">
    <h2 id="presentation-anchor" class="title">Présentation</h2>
    <p class="light-presentation">Cursus vitae congue mauris rhoncus aenean vel. Viverra orci sagittis eu volutpat odio facilisis. Pellentesque dignissim enim sit amet venenatis urna cursus eget nunc. 
      Sit amet venenatis urna cursus eget nunc. Morbi tempus iaculis urna id volutpat.     
      Urna cursus eget nunc.      
      <br><br>  sit amet venenatis urna cursus eget nunc.Cursus vitae congue mauris rhoncus aenean vel. Viverra orci sagittis eu volutpat odio facilisis. Pellentesque dignissim enim sit amet venenatis urna cursus eget nunc. Sit amet venenatis urna cursus eget nunc. Morbi tempus iaculis urna id volutpat. Urna cursus eget nunc. sit amet venenatis urna cursus eget nunc. <br>
      <br>   sit amet venenatis urna cursus eget nunc.Cursus vitae congue mauris rhoncus aenean vel. Viverra orci sagittis eu volutpat odio facilisis. Pellentesque dignissim enim sit amet venenatis urna cursus eget nunc. Sit amet venenatis 
      <br>
      <a class="uppercase" href="index_info.html">En savoir plus</a></p>
  </section>

  <section class="functioning">
    <div class="right">
      <h2 id="functioning-anchor" class="title">Fonctionnement</h2>
      <p class ="dark">.Il s'agit de stand en bois de dimensions <span class="color-secondary-text"> 3mx3m ou 4mx4m</span>
        pour les clients la possibilité de configurer et <span class="color-secondary-text"> choisir les options :</span>     
        - dimensions
        - Nombres de coté ouverts ou fermés - ouvrir <span class="color-secondary-text">1, 2 ou 3 côtés.</span>
        </p>
      <img class="mockup" src="../img/img_mockup.svg" alt="">
    </div>
    <div class="left">
      <img class = "icon-fonct" src="../img/icon_fonct.svg" alt="">
      <img class="img-fonct" src="../img/img_fonct.svg" alt="">
      <p class ="dark">- choix des types de cloisons :<span class="color-secondary-text"> Bois, végétalisées, ajourées </span>
        - Options éclairage : rails leds (1, 2 ou 3 rails → pas généré dans la 3D)
        - Options des sols : soit bois, soit moquette (nuancier 20 couleurs)        
        Le module pourrait générer un devis estimatif accompagné d'un rendu en 3D</p>
      
    </div>
  </section>

  <section class="try">
    <img class ="img-try" src="../img/bande_ess.svg" alt="">
    <h2 id="try-anchor" class="title">Essayer maintenant</h2>
    <img class = "icon-try" src="../img/icon_ess.svg" alt="">
    <button class="style-button"> <a class="button"href="configurateur.html">Configurateur <br> ici</a> </button>

  </section>

  <section class="contact">
    <div class="container-contact">
      <h2 id="contact-anchor" class="title">Contactez nous</h2>
      <img class = "icon-contact" src="../img/icon_contact.svg" alt="">
    </div>


<div class="form-contact">  
  <form action="" method="post">
   <div class="conteneur-nom-mail">
    <div class ="nom">
      <label for="nom"></label>
      <input type="text" id="nom" name="nom" placeholder="Votre nom et prénom" required>
    </div>
    <div class="mail">
      <label for="email"></label>
      <input type="email" id="email" name="email" placeholder="Votre adresse mail" required>
    </div>
  </div>
    <div class="message">
      <label for="message"></label>
      <textarea id="message" name="message" placeholder="Écrivez votre message" required></textarea>
    </div>
    <div class="button-contact">
      <button type="submit">Envoyer mon message</button>
    </div>
  </form>
</div>

   <div class="text-center">
    <p class="dark info">www.igexpo.fr  |  +33 (0)3 81 51 42 24  |  info@igexpo.fr</p>
  </div>
  </section>



<?php $homepagePosts = new WP_Query();
// WPquery (write a customQuery ) pour permettre d'afficher les post personnalisés  : Pouvoir afficher les posts d'articles voulus sur
// Sur la page Présentation (home.php) qui n'est pas la page d'archivage.  
?>

<?php  get_footer(); ?>