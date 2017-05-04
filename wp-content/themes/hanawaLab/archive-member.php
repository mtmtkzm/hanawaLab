<?php get_header(); ?>
  <div class="mv mv-member"></div>
  <section id="member">
    <div class="dropshadow member">
      <div class="h2">
        <div class="lag-shadow icon">
          <img src="<?php bloginfo('template_directory'); ?>/images/icon/i-about.png">
        </div>
        <h2>The member of Lab</h2>
      </div>
      <div class="member-professor">
        <h3 class="h3">教員</h3>
        <p class="member-name">塙　大／Dai HANAWA（准教授）</p>
        <p class="member-introduction">自己紹介でも経歴でも研究分野の紹介でもなんでもしてください自己紹介でもなんでもしてください自己紹介でもなんでもしてください自己紹介でもなんでもしてください自己紹介でもなんでもしてください自己紹介でもなんでもしてください自己紹介でもなんでもしてください</p>
      </div>
      <div class="member-student">
        <h3 class="h3">学生</h3>
        <ul>
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <li>            
            <span class="member-name"><?php echo get_field('member_name'); ?>（<?php echo get_field('member_year'); ?>）</span>
            <? 
              $txt = get_field('member_link');
              if ($txt) {
            ?>
            <a class="member-link" href="<?php echo $txt ?>" target="_blank">[>]</a>
            <? } ?>
          </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
