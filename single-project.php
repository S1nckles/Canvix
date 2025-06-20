<?php get_header(); ?>

<main class="single-project">
  <div class="container">
    <h1><?= get_the_title(); ?></h1>

    <?php if (has_post_thumbnail()): ?>
      <div class="project-thumbnail">
        <?= get_the_post_thumbnail(null, 'large'); ?>
      </div>
    <?php endif; ?>

    <div class="project-content">
      <?= apply_filters('the_content', get_the_content()); ?>
    </div>

    <a href="<?= get_post_type_archive_link('project'); ?>" class="back-link">← Back to all projects</a>
  </div>
</main>

<?php get_footer(); ?>
