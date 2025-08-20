<?php
$comments = get_comments([
  'status'  => 'approve',
  'number'  => 20,
  'orderby' => 'comment_date_gmt',
  'order'   => 'DESC',
]);

if ($comments) : ?>
<section class="cta">
  <div class="container">
    <div class="testimonial swiper-container">
      <div class="swiper cta-swiper">
        <div class="swiper-wrapper">
          <?php foreach ($comments as $c): ?>
            <div class="swiper-slide">
              <div class="cta__inner">
                <div class="cta__avatar">
                  <?php echo get_avatar($c, 80); ?>
                </div>

                <div class="cta__text">
                  <h2>“<?php echo esc_html( wp_trim_words($c->comment_content, 35, '…') ); ?>”</h2>
                </div>

                <div class="cta__author">
                  <div class="author__name"><h2><?php echo esc_html($c->comment_author); ?></h2></div>
                  <div class="author__profession">
                    <h2><?php echo esc_html( get_comment_date( get_option('date_format'), $c ) ); ?></h2>
                  </div>
                </div>

                <div class="testimonial-nav">
                  <button class="nav-btn prev" aria-label="Previous">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"></path></svg>
                  </button>
                  <button class="nav-btn next" aria-label="Next">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 6l6 6-6 6"></path></svg>
                  </button>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
