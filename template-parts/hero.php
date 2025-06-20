<?php
$hero = get_field('hero_section', get_the_ID());
if ($hero): ?>
  <section class="hero">
    <div class="container">
      <?php if (!empty($hero['title'])): ?>
        <h1><?= esc_html($hero['title']) ?></h1>
      <?php endif; ?>

      <?php if (!empty($hero['description'])): ?>
        <p><?= esc_html($hero['description']) ?></p>
      <?php endif; ?>

      <?php if (!empty($hero['button_text']) && !empty($hero['button_url'])): ?>
        <a href="<?= esc_url($hero['button_url']) ?>" class="btn">
          <?= esc_html($hero['button_text']) ?>
        </a>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>

