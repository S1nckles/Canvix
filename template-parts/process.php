<?php sanitize_svg_colors($svg);
?>


<section class="process">
  <div class="container">
    <div class="process__inner">
      <div class="process__title-wrapper">
        <span class="section__subtitle">Process</span>
        <h2 class="process__title"> <?= esc_html(get_field('process_title')) ?></h2>
      </div>

      <div class="process__steps">
        <?php for ($i = 1; $i <= 4; $i++): 
          $step = get_field("step_$i");
          if ($step): ?>
            <div class="process__step">
              <div class="step__wrapper">
                <div class="step__icon"><?= sanitize_svg_colors($step['icon_inline']) ?></div>
                <h3 class="step__title"><?= esc_html($step['title']) ?></h3>
              </div>
              <p class="step__desc"><?= esc_html($step['description']) ?></p>
            </div>
        <?php endif; endfor; ?>
      </div>

    </div>
  </div>
</section>
