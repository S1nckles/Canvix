<?php
$hero = get_field('hero_section', get_the_ID());
if ($hero): ?>
  <section class="hero">
    <?php get_header();?>
    <div class="container">
      <div class="hero__inner">
        <div class="hero__content">
          <h1 class="hero__title">
            <?php echo $hero['title_part_1']; ?>
            <span><?php echo $hero['highlighted_part']; ?></span>
            <?php echo $hero['title_part_2']; ?>
          </h1> 
          <?php if (!empty($hero['description'])): ?>
            <p class="hero__desc"><?= esc_html($hero['description']) ?></p>
          <?php endif; ?>
    
          <?php if (!empty($hero['button_text']) && !empty($hero['button_url'])): ?>
            <a href="<?= esc_url($hero['button_url']) ?>" class="btn btn-link">
              <?= esc_html($hero['button_text']) ?>
            </a>
          <?php endif; ?>

          <div class="hero__brands">
            <h3 class="brands__title">Trusted by Leading Brands</h3>
            <div class="brands__list">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/logos/mindfulness.png" alt="Mindfulness">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/logos/leafe.png" alt="Leafe">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/logos/greenish.png" alt="Greenish">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/logos/automation.png" alt="Automation">
            </div>
          </div>
        </div>
        <div class="hero__image">
          <div class="hero__image-border">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Main Image">
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>



<style>
  .btn-link::before {
    content: '';
    position: absolute;;	
    width: 7px;
    height: 12px;
    left: 24px;
    z-index: 2;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow.svg');
    background-size: cover;
    background-repeat: no-repeat;
    margin-right: 8px;
    transition: transform 0.3s ease;
  }               
</style>

