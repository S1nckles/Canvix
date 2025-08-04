<section class="showcase">
  <div class="container">
    <h2 class="showcase__title"><?= esc_html(get_field('showcase_title')) ?></h2>
    <div class="showcase__items">
      <?php
      $projects = new WP_Query([
        'post_type' => 'project',
        'posts_per_page' => 4
      ]);
      if ($projects->have_posts()):
        while ($projects->have_posts()): $projects->the_post(); ?>
          <div class="showcase__item">
            <?php if (has_post_thumbnail()): ?>
              <a class="showcase__item-image" href="<?= get_permalink(); ?>">
                <?= get_the_post_thumbnail(null, 'medium'); ?>
              </a>
              <?php endif; ?>

              <h3 class="showcase__item-title"><a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a></h3>
            <p class="showcase__item-desc"><?= wp_trim_words(get_the_content(), 20); ?></p>
          </div>
          <?php endwhile; wp_reset_postdata(); endif; ?>
          <a href="#" class="btn btn-link showcase__btn">
              Start your Free Trial
            </a>
    </div>
  </div>
</section>
