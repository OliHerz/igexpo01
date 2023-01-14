<?php get_header(); ?>

<h1> L'INDEX COMMENCE ICI</h1>
Ceci est un test

<?php 
// function greet($name, $color) {
//   echo "<p> Hi, my name is $name and my favorite color is $color.</p>";
// }
// greet('John', 'blue');
// greet('Jane', 'green');
?>

<h2> <?php bloginfo('name'); ?> </h2>
avec la fonction  " bloginfo('name') ", on affiche le nom du site comme au dessus
<!-- Donne plusieurs infos sur le site internet -->
<?php 
// get_template_part('loop');
?>

<p> On affiche les articles en dessous </p>

<?php if(have_posts()): ?>
  <ul>
    <?php while(have_posts()): the_post(); ?>
      <li>
        <a href="<?php the_permalink() ?> ">
          <?php the_title()?>  
        </a>
        <p> - fait par : <?php the_author() ?> </p>  
      </li>
    <?php endwhile; ?>
  </ul>

<?php else: ?>
    <h3> pas d'articles </h3>
<?php endif; ?>


<h1> ET L'INDEX SE FINI ICI </h1>
<br><br>

<?php get_footer(); ?>


