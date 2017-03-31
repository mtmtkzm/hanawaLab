<?php get_header(); ?>
  <div class="mv">
    <img src="<?php bloginfo('template_directory'); ?>/images/member/mv.png">
  </div>
  <section id="member">
    <div class="h2">
      <div class="lag-shadow icon"><img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png"></div>
      <h2>Associate professor</h2>
    </div>
    <div>
      <img class="portrait" src="./images/portrait.png">
      <div class="self-introduction">
        <div class="professor">塙　大　Dai HANAWA</div>
        <p>自己紹介でも研究分野の紹介でもなんでもしてください自己紹介でもなんでもしてください自己紹介でもなんでもしてください自己紹介でもなんでもしてください自己紹介でもなんでもしてください自己紹介でもなんでもしてください自己紹介でもなんでもしてください</p>
      </div>
    </div>
    <div class="h2">
      <div class="lag-shadow icon"><img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png"></div>
      <h2>Laboratory student</h2>
    </div>
    <ul class="members">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <li>
        <span class="member-year"><?php echo get_field('member_year'); ?></span>
        <span class="member-name"><?php echo get_field('member_name'); ?></span>
        <? 
          $txt = get_field('member_link');
          if ($txt) {
        ?>
        <a class="member-link" href="<?php $text ?>" target="_blank">[>]</a>
        <? } ?>
      </li>
      <?php endwhile; endif; ?>
    </ul>
  </section>

<?php get_footer(); ?>
