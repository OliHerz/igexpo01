<?php get_header(); ?>

<h3> L'INDEX COMMENCE ICI</h3>
Ceci est un test

<?php 
function greet($name, $color) {
  echo "<p> Hi, my name is $name and my favorite color is $color.</p>";
}

greet('John', 'blue');
greet('Jane', 'green');
?>

<h1> <?php bloginfo('name'); ?> </h1>
<!-- Donne plusieurs infos sur le site internet -->

<?php 
get_template_part('loop');
?>

<h3> ET SE FINI ICI </h3>

<br><br>

<?php get_footer(); ?>