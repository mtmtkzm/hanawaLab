<?php get_header(); ?>
<div class="mv mv-introduction"></div>
<section id="introduction">
  <div class="h2">
    <div class="lag-shadow icon">
      <img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png">
    </div>
    <h2>Research Introduction</h2>
  </div>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
      <div class="post-thumb">
        <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail('index_thumbnail'); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/eyecatch-default.png">
        <?php endif; ?>
      </div>
      <div class="post-content dropshadow" >
        <h1 class="post-content-title"><?php the_title(); ?></h1>
        <div class="post-content-body">
          <?php the_excerpt(); ?>  
        </div>  
      </div>
    </a>
  </article>
  <?php endwhile; endif; ?>
  
</section>
<?php get_footer(); ?>
