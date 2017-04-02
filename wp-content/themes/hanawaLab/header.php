<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title(); ?>｜名古屋市立大学 芸術工学研究科 塙研究室</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">
  <script src="https://maps.googleapis.com/maps/api/js"></script>
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
  <main id="main">
