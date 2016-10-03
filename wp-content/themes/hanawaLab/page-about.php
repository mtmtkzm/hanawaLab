<?php get_header(); ?>
  <div class="mv">
    <img src="<?php bloginfo('template_directory'); ?>/images/<?php the_title(); ?>/mv.png">
  </div>
  <section class="schedule">
    <div class="h2">
      <div class="lag-shadow icon"><img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png"></div>
      <h2>A yearly schedule</h2>
    </div>
    <?php if(have_posts()): the_post(); ?>
      <article <?php post_class(); ?> >
        <?php the_content(); ?>
      </article>
    <?php endif; ?>
  </section>
  <section>
    <div class="h2">
      <div class="lag-shadow icon"><img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png"></div>
      <h2>Member of Lab.</h2>
    </div>
    <ul class="professor">
      <li>Hanawa Dai</li>
    </ul>
    <ul class="undergraduate">
      <li>Umeno Asaka</li>
      <li>Maeda Karen</li>
      <li>Matsumoto Kazuma</li>
    </ul>
    <ul class="graduated">
      <li>Ichikawa Mana</li>
      <li></li>
      <li></li>
    </ul>
  </section>

<?php get_footer(); ?>
