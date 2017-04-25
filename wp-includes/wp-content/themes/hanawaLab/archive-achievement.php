<?php get_header(); ?>
  <div class="mv"></div>
  <section id="achievement" class="dropshadow">
    <div class="h2">
      <div class="lag-shadow icon">
        <img src="<?php bloginfo('template_directory'); ?>/images/top/i-about.png">
      </div>
      <h2>Research achievement</h2>
    </div>
    <ul class="achievements">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <li>
        <h3 class="h3"><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
      </li>
      <?php endwhile; endif; ?>
    </ul>
  </section>

<?php get_footer(); ?>
