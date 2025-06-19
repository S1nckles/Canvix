<?php
$hero = get_field('hero_section');
if ($hero): ?>
  <section class="services">
  <div class="container">
    <h2><?= esc_html(get_field('services_title')) ?></h2>
    <div class="service-cards">
      <?php for ($i = 1; $i <= 3; $i++): 
        $service = get_field("service_$i");
        if ($service): ?>
          <div class="service-card">
            <div class="icon"><?= wp_kses_post($service['icon']) ?></div>
            <h3><?= esc_html($service['title']) ?></h3>
            <p><?= esc_html($service['description']) ?></p>
          </div>
      <?php endif; endfor; ?>
    </div>
  </div>
</section>

<?php endif; ?>
