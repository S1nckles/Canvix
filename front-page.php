<?php
get_header();

global $post;

if (!$post) {
    $post = get_post();
    setup_postdata($post);
}
?>

<main class="home">
  
</pre>
  <?php get_template_part('template-parts/hero'); ?>
  <?php get_template_part('template-parts/services'); ?>
  <?php get_template_part('template-parts/about-short'); ?>
  <?php get_template_part('template-parts/process'); ?>
  <?php get_template_part('template-parts/showcase'); ?>
  <?php get_template_part('template-parts/cta'); ?>
</main>

<?php get_footer(); ?>

