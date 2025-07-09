<?php function sanitize_svg_colors($svg) {
    // замінюємо жорсткі кольори на currentColor
    $svg = preg_replace('/(fill|stroke)=["\']#[0-9a-fA-F]{3,6}["\']/', '$1="currentColor"', $svg);
    return $svg;
}
?>


<section class="services">
  <div class="container">
    <div class="services__inner">
      <div class="services__title-wrapper">
        <span class="services__subtitle">Our Services</span>
        <h2 class="services__title"><?= esc_html(get_field('services_title')) ?></h2>
      </div>
      <div class="service__cards">
        <?php for ($i = 1; $i <= 6; $i++): 
          $service = get_field("service_$i");
          if ($service): ?>
            <div class="service__card">
              <?php if (!empty($service['icon_inline'])): ?>
                <div class="service__card-icon">
                  <?= sanitize_svg_colors($service['icon_inline']) ?>
                </div>
              <?php endif; ?>

              <div class="service__card-content">
                <?php if (!empty($service['title'])): ?>
                  <h3 class="service__card-title"><?= esc_html($service['title']) ?></h3>
                <?php endif; ?>
    
                <?php if (!empty($service['description'])): ?>
                  <p class="service__card-description"><?= esc_html($service['description']) ?></p>
                <?php endif; ?>
              </div>
            </div>
        <?php endif; endfor; ?>
      </div>
    </div>
  </div>
</section>
