<?php
/* Template Name: About Page */
get_header(); 

global $post;

if (!$post) {
    $post = get_post();
    setup_postdata($post);
}
?>

<main class="about-page">
  
</pre>
  <?php get_template_part('template-parts/about/about-hero'); ?>
  <?php get_template_part('template-parts/about/about-services'); ?>
  <?php get_template_part('template-parts/about/about-mission'); ?>
</main>

<?php get_footer(); ?>
