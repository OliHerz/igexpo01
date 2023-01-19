<?php
/*
Template Name : Archiveuh
*/
?>

<?php get_header(); ?>

<?php while(have_posts()){
  the_post();?>

  <h1> Page d'archive </h1>

<h2> <?php the_title();?> </h2>
<?php the_content();?>

<?php } get_footer(); ?>
