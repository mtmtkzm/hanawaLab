<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<title>HanawaLab.</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?> >
	
	<header class="header">
		<div class="logo-path">
			<a href="/"><h2><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></h2></a>
			<a href="/">Home</a>
		</div>
	</header>
	<main class="main"></main>
	<footer class="footer"></footer>

	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<article <?php post_class(); ?>>
		<h3><?php the_title(); ?></h3>
	</article>

	<?php endwhile; endif; ?>
</body>
</html>