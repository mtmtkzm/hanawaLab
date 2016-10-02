<?php get_header(); ?>
  <div class="mv">
    <img src="<?php bloginfo('template_directory'); ?>/images/<?php the_title(); ?>/mv.png">
  </div>
  <section class="mail">
    <div class="h2">
      <div class="lag-shadow icon">
        <img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png">
      </div>
      <h2>Get in touch</h2>
    </div>
    <a href="mailto:hanawa@sda.nagoya-cu.ac.jp">hanawa@sda.nagoya-cu.ac.jp</a>
  </section>
  <section class="access full">
    <div class="h2">
      <div class="lag-shadow icon">
        <img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png">
      </div>
      <h2>Access to Univ.</h2>
    </div>
    <div class="access-univ">
      <div class="univ-map" id="map_canvas"></div>
      <div class="univ-address">
        名古屋市立大学芸術工学部 大学院芸術工学研究科<br>
        〒464-0083 <br>
        名古屋市千種区北千種2丁目1番10号 <br>
        TEL 052-721-1225(代) <br>
        FAX 052-721-3110
      </div>
    </div>
  </section>

<?php get_footer(); ?>
