<?php
$about = get_field('about_short', get_the_ID());
if ($about): ?>
  <section class="about-short">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <?php if (!empty($about['title'])): ?>
            <h2><?= esc_html($about['title']) ?></h2>
          <?php endif; ?>

          <?php if (!empty($about['description'])): ?>
            <p><?= esc_html($about['description']) ?></p>
          <?php endif; ?>
        </div>

        <?php if (!empty($about['image'])): ?>
          <div class="about-image">
            <img src="<?= esc_url($about['image']['url']) ?>" alt="<?= esc_attr($about['image']['alt']) ?>">
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
