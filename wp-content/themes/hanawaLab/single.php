<?php get_header(); ?>

<img src="<?php bloginfo('template_directory'); ?>/images/article/mv.png">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <section id="article" class="dropshadow">
    <article <?php post_class(); ?> >
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
  </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
