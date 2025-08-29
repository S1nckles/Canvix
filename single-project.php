<?php get_header(); ?>

<main class="single-project">
  <div class="container">
    <div class="single-project__inner">
      <?php if (has_post_thumbnail()): ?>
        <div class="single-project__image">
          <?= get_the_post_thumbnail(); ?>
          <div class="single-project__overlay">
            <div class="overlay__item">
              <h6>Category : </h6>
              <p>Cloud solution</p>
            </div>  
            <div class="overlay__item">
              <h6>Category : </h6>
              <p>Lorem, ipsum.</p>
            </div>
            <div class="overlay__item">
              <h6>Category : </h6>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="overlay__item"> 
              <h6>Category :</h6>
              <p>Lorem ipsum dolor sit amet consectetur </p>
            </div>
          </div>
        </div>
      <?php endif; ?>
  
      <div class="single-project__content">
        <?= apply_filters('the_content', get_the_content()); ?>
      </div>
  
      <div class="single-project__recent-projects">
        <h2 class="recent-projects__title">Recent Projects </h2>
        <div class="recent-projects__items">
          <?php
          $projects = new WP_Query([
            'post_type' => 'project',
            'posts_per_page' => 3
          ]);
          if ($projects->have_posts()):
            while ($projects->have_posts()): $projects->the_post(); ?>
              <div class="recent-projects__item">
                <?php if (has_post_thumbnail()): ?>
                  <a class="recent-projects__item-image" href="<?= get_permalink(); ?>">
                    <?= get_the_post_thumbnail(null, 'medium'); ?>
                  </a>
                  <?php endif; ?>

                  <div class="recent-projects__content">
                    <h3 class="recent-projects__item-title"><a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a></h3>
                    <p class="recent-projects__item-desc"><?= wp_trim_words(get_the_content(), 20); ?></p>
                  </div>
              </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
