<?php
$cta = get_field('cta_section', get_the_ID());
if ($cta): ?>
  <section class="cta">
    <div class="container">
      <?php if (!empty($cta['text'])): ?>
        <h2><?= esc_html($cta['text']) ?></h2>
      <?php endif; ?>

      <?php if (!empty($cta['button_text']) && !empty($cta['button_url'])): ?>
        <a href="<?= esc_url($cta['button_url']) ?>" class="btn">
          <?= esc_html($cta['button_text']) ?>
        </a>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
