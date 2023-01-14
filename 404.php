<?php get_header() ?>

<?php if (have_posts()): while(have_posts()) : the_post(); ?>
  <h1> Page introuvable </h1>
  <p> Cette page n'exsite pas </p>
  <?php the_content() ?>
  <?php endwhile;
  endif; ?>

<?php get_footer() ?>