<?php 
$about_page = get_field('about_page'); 
?>


<section class="about-hero">
    <div class="container">
        <div class="about-hero__inner">
            <div class="about-hero__content">
                <span class="about-hero__subtitle">Pleasure and so read the was hope.</span>
                <h1 class="about-hero__title">
                    <?php echo $about_page['title_part_1']; ?>
                    <br>
                    <span><?php echo $about_page['highlighted_part']; ?></span>
                    <br>
                    <?php echo $about_page['title_part_2']; ?>
                </h1>
                <p class="about-hero__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit- et ut massa libero egestas malesuada viverra gravida libero cursus nulla leo pulvinar.</p>
                <div class="about-hero__review">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/avatar.png">
                    <div class="review__info">
                        <span>Rated 4.9/5 stars</span>
                        <div class="review__stars">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.svg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.svg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.svg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.svg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.svg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-hero__image-list">
                <?php
                $about_image = get_field('about_page');
                for ($i = 1; $i <= 3; $i++):
                    $image = $about_image["image_$i"];
                    if ($image):
                ?>
                    <div class="about-page__image">
                        <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>">
                    </div>
                <?php
                    endif;
                endfor;
                ?>
            </div>
        </div>
    </div>
</section>