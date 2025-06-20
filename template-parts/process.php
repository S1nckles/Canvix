<section class="process">
  <div class="container">
    <h2><?= esc_html(get_field('process_title')) ?></h2>

    <div class="process-steps">
      <?php for ($i = 1; $i <= 4; $i++): 
        $step = get_field("step_$i");
        if ($step): ?>
          <div class="process-step">
            <div class="step-number"><?= $i ?></div>
            <h3><?= esc_html($step['title']) ?></h3>
            <p><?= esc_html($step['description']) ?></p>
          </div>
      <?php endif; endfor; ?>
    </div>
  </div>
</section>
