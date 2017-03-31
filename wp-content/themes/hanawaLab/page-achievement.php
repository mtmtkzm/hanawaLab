<?php get_header(); ?>
  <div class="mv">
    <img src="<?php bloginfo('template_directory'); ?>/images/member/mv.png">
  </div>
  <section id="achievement">
    <div class="h2">
      <div class="lag-shadow icon"><img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png"></div>
      <h2>Research Achievement</h2>
    </div>
    <?php if(have_posts()): the_post(); ?>
      <article <?php post_class(); ?> >
        <div class="achievement">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endif; ?>
  </section>

<?php get_footer(); ?>
