<?php get_header(); ?>
<div class="mv">
  <img src="<?php bloginfo('template_directory'); ?>/images/research/mv.png">
</div>
<section id="introduction">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
      <div class="post-content">
        <h1 class="post-content-title"><?php the_title(); ?></h1>
      </div>
    </a>
  </article>
  <?php endwhile; endif; ?>
  
</section>
<?php get_footer(); ?>
