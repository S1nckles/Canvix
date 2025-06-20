<section class="showcase">
  <div class="container">
    <h2><?= esc_html(get_field('showcase_title')) ?></h2>

    <div class="project-cards">
      <?php
      $projects = new WP_Query([
        'post_type' => 'project',
        'posts_per_page' => 4
      ]);
      if ($projects->have_posts()):
        while ($projects->have_posts()): $projects->the_post(); ?>
          <div class="project-card">
            <?php if (has_post_thumbnail()): ?>
              <a href="<?= get_permalink(); ?>">
                <?= get_the_post_thumbnail(null, 'medium'); ?>
              </a>
            <?php endif; ?>

            <h3><a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a></h3>
            <p><?= wp_trim_words(get_the_content(), 20); ?></p>
          </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
</section>
