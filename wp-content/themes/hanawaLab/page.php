<?php get_header(); ?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <article <?php post_class(); ?> >
      <?php the_title(); ?>
      <?php the_content(); ?>
    </article>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>
