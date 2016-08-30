<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<title>HanawaLab.</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">
</head>
<body <?php body_class(); ?> >

	<header class="header">
		<div class="logo-path">
			<a href="/"><h2><img src="<?php bloginfo('template_directory'); ?>/images/common/logo.png" alt=""></h2></a>
			<a href="/">Home</a>
		</div>
	</header>
	<main class="main index">
		<div class="lag-shadow">
			<img src="<?php bloginfo('template_directory'); ?>/images/top/title.png">
			<img class="shadow" src="<?php bloginfo('template_directory'); ?>/images/top/title-shadow.png">
		</div>
		<p class="sharetech">Nagoya City University − School of Design & Architecture</p>

		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<article <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
		</article>
		<?php endwhile; endif; ?>
	</main>
	<footer class="footer"></footer>


</body>
</html>
