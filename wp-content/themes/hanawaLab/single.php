<?php get_header(); ?>
<div class="mv mv-news"></div>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <section id="article" class="dropshadow">
    <article <?php post_class(); ?> >
      <h1 class="article-post-title"><?php the_title(); ?></h1>
      <p class="article-post-date"><?php echo get_the_date('Y.m.d'); ?></p>
      <div class="article-post-content">
        <?php the_content(); ?>
      </div>
    </article>
  </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
