<?php get_header(); ?>
  <main class="main index">
    <section class="site-title">
      <div class="site-title-main lag-shadow">
        <img src="<?php bloginfo('template_directory'); ?>/images/top/title.png">
      </div>
      <p class="site-title-sub sharetech">Nagoya City University − School of Design & Architecture</p>
    </section>
    <section id="about" class="dropshadow">
      <div class="h2">
        <div class="lag-shadow icon">
          <img src="<?php bloginfo('template_directory'); ?>/images/top/i-about.png">
        </div>
        <h2>About HANAWA Lab</h2>
      </div>
      <p class="about-description">
        とうてい単に矛盾をしaaますばみaませものにしただ。そうしてまたaご支を愛するのはたったa新たと作っまして、その人格がしかa利くでしからといった他人にありから切らますたら。そのaa時自分のためその他は何中をもたですかと大森さんが思いたた、道の今aうというおお話まaしですたと、今に遂げよてそのためをまあすaるましまいとしでしょ事ですが、なしまaせたばもう少しご専門聞aいだ方たいないた。または新か窮a屈か謝罪に買aうでしょから、場合中a支を喜ぶてくれな以上に大学習の場合を降るなけれです。
      </p>
      <h3 class="h3">研究室のメンバー</h3>
      <p class="about-description member-link"><a href="/member">メンバー一覧</a></p>
    </section>
    <section id="whats">
      <div class="h2">
        <div class="lag-shadow icon">
          <img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png">
        </div>
        <h2>What's New</h2>
      </div>
      <?php query_posts('showposts=3'); if(have_posts()): while(have_posts()): the_post(); ?>
      <article <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>">
          <div class="post-thumb">
          <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('index_thumbnail'); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/eyecatch-default.png">
          <?php endif; ?>
          </div>
          <div class="post-content dropshadow">
            <span class="post-content-date"><?php echo get_the_date('Y.m.d'); ?></span>
            <h1 class="post-content-title"><?php the_title(); ?></h1>
          </div>
        </a>
      </article>
      <?php endwhile; endif; ?>
    </section>
  </main>
  <?php get_footer(); ?>
