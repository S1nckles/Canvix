<?php 
$about_page = get_field('about_page'); 
?>

<section class="about-services">
    <div class="container">
        <div class="about-services__inner">
            <div class="about-services__item">
                <span class="about-services__procentage"><?php echo $about_page['family_count']; ?></span>
                <h3 class="about-services__title">We’re a family</h3>
                <p class="about-services__desc">Speedily say has suitable disposal add boy. On fourth doubt miles of child. Exercise joy man children rejoiced.</p>
            </div>
            <div class="about-services__item">
                <span class="about-services__procentage"><?php echo $about_page['design_knowledge']; ?></span>
                <h3 class="about-services__title">Graphic Design </h3>
                <p class="about-services__desc">Perceived end knowledge certainly day sweetness why cordially. Ask a quick six seven offer see among.</p>
            </div>
            <div class="about-services__item">
                <span class="about-services__procentage"><?php echo $about_page['marketing_count']; ?></span>
                <h3 class="about-services__title">Digital Marketing </h3>
                <p class="about-services__desc">Rooms oh fully taken by worse do. Points afraid but may end law lasted. Was out laughter raptures returned outweigh.</p>
            </div>
        </div>
    </div>
</section>