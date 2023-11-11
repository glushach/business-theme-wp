<?php get_header() ;?>

<div class="business-front-page">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content() ?>
  <?php endwhile; ?>

  <?php else: ?>

  <?php endif; ?>
</div>

<?php get_footer() ;?>
