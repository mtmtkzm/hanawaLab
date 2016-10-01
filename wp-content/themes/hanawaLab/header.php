<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title(); ?>名古屋市立大学 芸術工学研究科 塙研究室</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <header class="header">
    <section>
      <div class="logo-path sharetech">
        <a href="/"><h2><img src="<?php bloginfo('template_directory'); ?>/images/common/logo.png"></h2></a>
        <a class="directory" href="/">Home</a>
      </div>
    </section>
  </header>
