<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title(); ?>　名古屋市立大学 芸術工学研究科 塙研究室</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">
  <?php wp_head(); ?>
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
      <a class="logo-path-root" href="/"></a>
      <a class="logo-path-directory js-directory" href=""></a>
    </div>
  </header>
  <nav>
    <a class="hamburger gnav-trigger js-menu-trigger">
      <span class="hamburger-item"></span>
      <span class="hamburger-item"></span>
      <span class="hamburger-item"></span>
    </a>
    <ul id="gnav" class="js-header-menu">
      <li><a href="/">トップページ</a></li>
      <li><a href="/achievement">研究業績</a></li>
      <li><a href="/introduction">研究紹介</a></li>
      <li><a href="/contact">お問い合わせ</a></li>
      <li class="lecture"><a href="/lecture">講義</a></li>
    </ul>
  </nav>
  <main id="main">
