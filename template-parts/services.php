<section class="services">
  <div class="container">
    <h2><?= esc_html(get_field('services_title')) ?></h2>
    <div class="service-cards">
      <?php for ($i = 1; $i <= 3; $i++): 
        $service = get_field("service_$i");
        if ($service): ?>
          <div class="service-card">
            <?php if (!empty($service['icon'])): ?>
              <div class="icon"><?= wp_kses_post($service['icon']) ?></div>
            <?php endif; ?>
            
            <?php if (!empty($service['title'])): ?>
              <h3><?= esc_html($service['title']) ?></h3>
            <?php endif; ?>

            <?php if (!empty($service['description'])): ?>
              <p><?= esc_html($service['description']) ?></p>
            <?php endif; ?>
          </div>
      <?php endif; endfor; ?>
    </div>
  </div>
</section>
