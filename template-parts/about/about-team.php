<?php $about = get_field('about_page'); ?>

<section class="about-team">
    <div class="container">
        <div class="about-team__inner">
            <h2 class="about-team__title">Our team</h2>
            <div class="about-team__members">
                <?php 
                    $member_1 = $about['member_1']; 
                    $photo_1 = $member_1['photo'];
                    $member_2 = $about['member_2']; 
                    $photo_2 = $member_2['photo'];
                    $member_3 = $about['member_3']; 
                    $photo_3 = $member_3['photo'];

                ?>
                <div class="about-team__member">
                    <div class="member__photo">
                        <?php echo wp_get_attachment_image($photo_1['ID'], '', false ); ?>
                        <div class="member__socials">
                            <a href="#" class="socials__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/facebook.svg" alt="facebook"></a>
                            <a href="#" class="socials__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/instagram.svg" alt="instagram"></a>
                            <a href="#" class="socials__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/linkedIn.svg" alt="linkedIn"></a>
                        </div>
                    </div>
                    <a class="member__name" href="#"><h5><?php echo esc_html($member_1['name']); ?></h5></a>
                    <span class="member__role"><?php echo esc_html($member_1['role']); ?></span>
                </div>
                <div class="about-team__member">
                    <div class="member__photo">
                        <?php echo wp_get_attachment_image($photo_2['ID'], '', false ); ?>
                        <div class="member__socials">
                            <a href="#" class="socials__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/facebook.svg" alt="facebook"></a>
                            <a href="#" class="socials__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/instagram.svg" alt="instagram"></a>
                            <a href="#" class="socials__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/linkedIn.svg" alt="linkedIn"></a>
                        </div>
                    </div>
                    <a class="member__name" href="#"><h5><?php echo esc_html($member_2['name']); ?></h5></a>
                    <span class="member__role"><?php echo esc_html($member_2['role']); ?></span>
                </div>
                <div class="about-team__member">
                    <div class="member__photo">
                        <?php echo wp_get_attachment_image($photo_3['ID'], '', false ); ?>
                        <div class="member__socials">
                            <a href="#" class="socials__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/facebook.svg" alt="facebook"></a>
                            <a href="#" class="socials__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/instagram.svg" alt="instagram"></a>
                            <a href="#" class="socials__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/linkedIn.svg" alt="linkedIn"></a>
                        </div>
                    </div>
                    <a class="member__name" href="#"><h5><?php echo esc_html($member_3['name']); ?></h5></a>
                    <span class="member__role"><?php echo esc_html($member_3['role']); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>