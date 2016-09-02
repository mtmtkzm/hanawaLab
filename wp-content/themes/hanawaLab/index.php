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
		<div class="logo-path sharetech">
			<a href="/"><h2><img src="<?php bloginfo('template_directory'); ?>/images/common/logo.png" alt=""></h2></a>
			<a class="directory" href="/">Home</a>
		</div>
	</header>
	<main class="main index">
		<div class="site-title">
			<div class="site-title-main lag-shadow">
				<img src="<?php bloginfo('template_directory'); ?>/images/top/title.png">
				<img src="<?php bloginfo('template_directory'); ?>/images/top/title-shadow.png">
			</div>
			<p class="site-title-sub sharetech">Nagoya City University − School of Design & Architecture</p>
		</div>
		<section class="about">
			<div class="h2">
				<div class="lag-shadow icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/top/i-about.png">
					<img src="<?php bloginfo('template_directory'); ?>/images/top/i-about-shadow.png">
				</div>
				<h2>About HANAWA Lab</h2>
			</div>
			<p class="about-description">
				とうてい単に矛盾をしますばみませものにしただ。そうしてまたご支を愛するのはたった新たと作っまして、その人格がしか利くでしからといった他人にありから切らますたら。その時自分のためその他は何中をもたですかと大森さんが思いたた、道の今うというおお話ましですたと、今に遂げよてそのためをまあするましまいとしでしょ事ですが、なしませたばもう少しご専門聞いだ方たいないた。または新か窮屈か謝罪に買うでしょから、場合中支を喜ぶてくれな以上に大学習の場合を降るなけれです。
			</p>
		</section>
		<section class="whats">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<article <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
			</article>
			<?php endwhile; endif; ?>
		</section>
	</main>
	<footer class="footer"></footer>
</body>
</html>
