<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title(); ?>名古屋市立大学 芸術工学研究科 塙研究室</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <?php wp_head(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
  <style type="text/css">
    /* wpのtopbarを削除・最後に戻す */
    html {
      margin-top: 0px !important;
    }
    #wpadminbar {
      display: none !important;
    }
  </style>
</head>
<body <?php body_class(); ?> >
  <header id="header">
    <div class="logo-path sharetech">
      <a href="/"><h2><img src="<?php bloginfo('template_directory'); ?>/images/common/logo.png"></h2></a>
      <a class="directory" href="/">HOME</a>
    </div>
  </header>
  <nav>
    <ul id="gnav">
      <li><a href="/">トップページ</a></li>
      <li><a href="/achievement">研究業績</a></li>
      <li><a href="/introduction">研究紹介</a></li>
      <li><a href="/contact">お問い合わせ</a></li>
      <li class="lecture"><a href="/lecture">講義</a></li>
    </ul>
  </nav>
  <main id="main">
