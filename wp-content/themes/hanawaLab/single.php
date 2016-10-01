<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <article <?php post_class(); ?> >
      <?php the_title(); ?>
      <?php the_content(); ?>
    </article>

  <?php endwhile; endif; ?>

</body>
</html>
