<?php
$about = get_field('about_short', get_the_ID());
if ($about): ?>
  <section class="about_short">
    <div class="container">
      <div class="about__inner">
        <div class="about_image-list">
          <?php
          $about_short = get_field('about_short');
          for ($i = 1; $i <= 3; $i++):
            $image = $about_short["image_$i"];
            if ($image):
          ?>
            <div class="about__image">
                <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>">
            </div>
          <?php
              endif;
          endfor;
          ?>
        </div>

        <div class="about__content">

          <span class="section__subtitle">About us</span>
          
          <?php if (!empty($about['title'])): ?>
            <h2 class="about__title"><?= esc_html($about['title']) ?></h2>
          <?php endif; ?>
          
          <?php if (!empty($about['description'])): ?>
            <p class="about__desc"><?= esc_html($about['description']) ?></p>
          <?php endif; ?>

          <div class="about__main-counts">
            <div class="about__main-count">
              <span>330 +</span>
              <p>Companies helped</p>
            </div>
            <div class="about__main-count">
              <span>230 +</span>
              <p>Revenue generated</p>
            </div>
          </div>
        
          <?php if (!empty($about_short['button_text']) && !empty($about_short['button_url'])): ?>
            <a href="<?= esc_url($about_short['button_url']) ?>" class="btn btn-link btn-about">
              <?= esc_html($about_short['button_text']) ?>
            </a>
          <?php endif; ?> 

          
         
        </div>

        
      </div>
    </div>
  </section>
<?php endif; ?>
