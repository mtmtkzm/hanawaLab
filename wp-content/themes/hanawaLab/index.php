<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<title>HanawaLab.</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?> >

	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<article <?php post_class(); ?>>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article>

	<?php endwhile; endif; ?>


</body>
</html>