<?php get_header(); ?>
<main>
<?php
if (have_posts()) : 
  while (have_posts()): the_post(); ?>
  <h1><?php the_title(); ?></h1>
<small>Posted on: <?php the_time('F , j , Y') ?> at <?php the_time('g:i a') ?> in <?php the_category(', '); ?>
    <?php the_content(); ?>
    <?php endwhile;
    endif;?>
    </small>
  </main>
<?php get_footer(); ?>