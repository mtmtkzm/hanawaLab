<?php get_header(); ?>
<div class="mv">
  <img src="<?php bloginfo('template_directory'); ?>/images/research/mv.png">
</div>
<section id="lecture">
  <div class="h2">
    <div class="lag-shadow icon">
      <img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png">
    </div>
    <h2>Lecture 2017</h2>
  </div>
  <div class="lectures">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class(); ?>>
      <a href="<?php the_permalink(); ?>">
        <div class="post-content dropshadow">
          <div class="lecture-date">
            <span class="lecture-day"><?php echo get_field('lecture_day'); ?></span>
            <?php $periods = get_field('lecture_period'); if ($periods): ?>
            <ul class="lecture-periods">
              <?php foreach ($periods as $period) : ?>
              <li><?php echo $period; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
          <p class="lecture-name"><?php echo get_field('lecture_name'); ?></p>
        </div>
      </a>
    </article>
    <?php endwhile; endif; ?>
  </div>
</section>
<?php get_footer(); ?>
