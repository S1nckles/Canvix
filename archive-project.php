<?php get_header(); ?>

<main class="project-archive">
  <div class="container">
    <h1>Our Projects</h1>

    <div class="project-cards">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <div class="project-card">
          <a href="<?= get_permalink(); ?>">
            <?php if (has_post_thumbnail()): ?>
              <?= get_the_post_thumbnail(null, 'medium'); ?>
            <?php endif; ?>
            <h2><?= get_the_title(); ?></h2>
          </a>
          <p><?= wp_trim_words(get_the_content(), 15); ?></p>
        </div>
      <?php endwhile; else: ?>
        <p>No projects found.</p>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
