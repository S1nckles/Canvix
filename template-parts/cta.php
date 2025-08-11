<?php
$cta = get_field('cta_section', get_the_ID());
if ($cta): ?>
  <section class="cta">
    <div class="container">
      <div class="testimonial">
        <div class="swiper cta-swiper">
          <div class="swiper-wrapper">
          <?php while ( have_rows('cta_section', get_the_ID()) ) : the_row(); ?>
            <div class="swiper-slide">
              <div class="cta__inner">
                <div class="cta__avatar">
                  <?php 
                    $avatar_url = $cta["avatar"];
                    if ( $avatar_url ) {
                      echo '<img src="'. esc_url($avatar_url) .'" alt="Avatar">';
                    }
                  ?>
                </div>
                <div class="cta__text">
                  <?php if (!empty($cta['text'])): ?>
                    <h2><?= esc_html($cta['text']) ?></h2>
                  <?php endif; ?>
                </div>
                <div class="cta__author">        
                  <div class="author__name">
                    <?php if (!empty($cta['author'])): ?>
                      <h2><?= esc_html($cta['author']) ?></h2>
                    <?php endif; ?>
                  </div>
                  <div class="author__profession">
                    <?php if (!empty($cta['profession'])): ?>
                      <h2><?= esc_html($cta['profession']) ?></h2>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="testimonial-nav">
    <button class="nav-btn prev" aria-label="Previous">
      <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M15 18l-6-6 6-6"></path>
      </svg>
    </button>
    <button class="nav-btn next" aria-label="Next">
      <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M9 6l6 6-6 6"></path>
      </svg>
    </button>
  </div>              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php
  wp_enqueue_script(
    'cta-swiper',
    get_stylesheet_directory_uri() . '/js/cta-swiper.js',
    array('swiper-bundle'),
    '1.0.0',
    true
  );
?>